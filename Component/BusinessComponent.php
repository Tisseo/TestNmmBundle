<?php
namespace Tisseo\TestBundle\Component;

use CanalTP\SamEcoreApplicationManagerBundle\Component\AbstractBusinessComponent;
use CanalTP\SamEcoreApplicationManagerBundle\Perimeter\BusinessPerimeterManagerInterface;
use CanalTP\SamEcoreApplicationManagerBundle\Permission\BusinessPermissionManagerInterface;

use Tisseo\TestBundle\Menu\MenuManager;

class BusinessComponent extends AbstractBusinessComponent
{
    private $businessPermissionManager;
    private $businessPerimeterManager;
    private $menuManager;
    public function __construct(
        BusinessPermissionManagerInterface $bPermissionManager,
        BusinessPerimeterManagerInterface $bPerimeterManager,
        MenuManager $menuManager
    )
    {
        $this->businessPermissionManager = $bPermissionManager;
        $this->businessPerimeterManager = $bPerimeterManager;
        $this->menuManager = $menuManager;
    }
    public function getId()
    {
        return 'testbundle_business_component';
    }
    public function getName()
    {
        return 'Business component TestBundle';
    }
    public function hasPerimeters()
    {
        $perimeters = $this->getPerimetersManager()->getPerimeters();
        return !empty($perimeters);
    }
    public function getMenuItems()
    {
        return $this->menuManager->getMenu();
    }
    public function getPerimetersManager()
    {
        return $this->businessPerimeterManager;
    }
    public function getPermissionsManager()
    {
        return $this->businessPermissionManager;
    }
}