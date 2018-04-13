<?php
namespace Tisseo\TestBundle\Controller;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Security;

/**
 * Default Controller
 *
 * @Security("has_role('ROLE_USER')")
 */
class DefaultController extends Controller
{
    public function indexAction()
    {
        return $this->render('TisseoTestBundle:Default:index.html.twig');
    }

    public function editAction()
    {
        return $this->render('TisseoTestBundle:Default:index.html.twig');
    }

    public function deleteAction()
    {
        return $this->render('TisseoTestBundle:Default:index.html.twig');
    }

    public function menu1Action()
    {
        return $this->render('TisseoTestBundle:Default:index.html.twig');
    }

    public function menu2Action()
    {
        return $this->render('TisseoTestBundle:Default:index.html.twig');
    }
}