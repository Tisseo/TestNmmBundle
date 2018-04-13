<?php
namespace Tisseo\TestBundle\Permission;

use CanalTP\SamEcoreApplicationManagerBundle\Permission\AbstractBusinessPermissionModule;

class BusinessPermissionModule extends AbstractBusinessPermissionModule
{
    public function getName()
    {
        return 'testbundle_business_module';
    }
}