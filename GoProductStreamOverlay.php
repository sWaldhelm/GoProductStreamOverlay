<?php
namespace GoProductStreamOverlay;

use Shopware\Components\Plugin;
use Shopware\Components\Plugin\Context\InstallContext;
use Shopware\Components\Plugin\Context\UninstallContext;

class GoProductStreamOverlay extends Plugin
{
     public static function getSubscribedEvents()
    {
        return[
            'Enlight_Controller_Action_PostDispatch_Frontend_Index' => 'onStartDispatch',
         ];
    }

    public function onStartDispatch()
    {
       die('Test');
    }
}
