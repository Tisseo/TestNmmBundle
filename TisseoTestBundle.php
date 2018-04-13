<?php
namespace Tisseo\TestBundle;

use Symfony\Component\HttpKernel\Bundle\Bundle;
use CanalTP\SamEcoreApplicationManagerBundle\SamApplication;

class TisseoTestBundle extends Bundle implements SamApplication
{
    public function getCanonicalName()
    {
        return 'testbundle';
    }
}