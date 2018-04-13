<?php
namespace Tisseo\TestBundle\Menu;

use Symfony\Component\DependencyInjection\Container;
use Symfony\Component\Yaml\Parser;

use  Tisseo\TestBundle\Menu\BusinessMenuItem;

class MenuManager
{
    private $container;
    public function __construct(Container $container)
    {
        $this->container = $container;
    }
    public function getMenu()
    {
        $translator = $this->container->get('translator');
        $menus = array();
        $securityContext = $this->container->get('security.authorization_checker');
        $yaml = new Parser();
        $configMenus = $yaml->parse(file_get_contents(__DIR__.'/../Resources/config/menus.yml'));
        foreach ($configMenus as $menu => $config) {
            if ($securityContext->isGranted($config['rights'])) {
                $menuItem = new BusinessMenuItem();
                $menuItem->setName($translator->trans($menu));
                $menuItem->setRoute($config['route']);
                if ($config['submenus'] != null) {
                    foreach ($config['submenus'] as $subMenu => $subConfig) {
                        $rights = true;
                        if (array_key_exists('rights', $subConfig) && !$securityContext->isGranted($subConfig['rights'])) {
                            $rights = false;
                        }
                        if ($rights) {
                            $subMenuItem = new BusinessMenuItem();
                            $subMenuItem->setName($translator->trans($subMenu));
                            $subMenuItem->setRoute($subConfig['route']);
                            if (array_key_exists('parameters', $subConfig)) {
                                $subMenuItem->setParameters($subConfig['parameters']);
                            }
                            $menuItem->addChild($subMenuItem);
                        }
                    }
                }
                $menus[] = $menuItem;
            }
        }
        return $menus;
    }
}