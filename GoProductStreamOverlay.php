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

    public function onStartDispatch(\Enlight_Event_EventArgs $args)
    {
       /* $uri = $this->container->get('front')->Request()->getRequestUri();
        $template = $this->container->get('front')->Request();
        echo $template;
      	$this->container->get('Template')->addTemplateDir(
      			$this->getPath() . '/Resources/views/'
        );*/

        /**
         * @var $controller \Shopware_Controllers_Frontend_Index
         */
        $controller = $args->getSubject();

        /**
         * @var $request \Zend_Controller_Request_Http
         */
        $request = $controller->Request();
        /**
         * @var $response \Zend_Controller_Response_Http
         */
        $response = $controller->Response();

        /**
         * @var $view \Enlight_View_Default
         */
        $view = $controller->View();

        //$sArticle = $view->getAssign('sArticle');

        $view->Engine()->addTemplateDir(
            $this->getPath() . '/Resources/views/Themes/'
        );

        $sArticle['someCustomVar'] = 'hello article detail page!';
        $view->assign('someCustomVar', $sArticle);
    }
}
