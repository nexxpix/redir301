<?php

namespace Redir301\Controller;

use \Thelia\Controller\Admin\BaseAdminController;

class Redir301AdminController extends BaseAdminController
{

    public function defaultAction()
    {
        return $this->getRedirections();
    }

    public function getRedirections()
    {
        return $this->render(
                        'module', array(
                    'module_code' => 'Redir301',
                        )
        );
    }

    public function addRedirection()
    {
        $post = $this->getRequest();
        $redirection = new \Redir301\Model\Redir301Redirections();
        $redirection->setPattern($post->get("pattern"));
        $redirection->setTarget($post->get("target"));
        $redirection->setActive(($post->get("active") == "" || $post->get("active") == false ) ? 0 : 1);
        $redirection->setTriggered(0);
        $redirection->save();
        return $this->redirectToRoute("admin.module.configure", array(), array('module_code' => "Redir301",
                    '_controller' => 'Thelia\\Controller\\Admin\\ModuleController::configureAction'));
    }
    
    public function updateRedirection()
    {
        $post = $this->getRequest();
        $redirection = \Redir301\Model\Redir301RedirectionsQuery::create()->findPk($post->get("id"));
         if (!is_null($redirection)) {
            $redirection->setPattern($post->get("pattern"));
            $redirection->setTarget($post->get("target"));
            $redirection->setActive(($post->get("active") == "" || $post->get("active") == false ) ? 0 : 1);
            $redirection->setTriggered(0);
            $redirection->save();
         }
        return $this->redirectToRoute("admin.module.configure", array(), array('module_code' => "Redir301",
                    '_controller' => 'Thelia\\Controller\\Admin\\ModuleController::configureAction'));
    }

    public function deleteRedirection()
    {
        $post = $this->getRequest();
        $redirection = \Redir301\Model\Redir301RedirectionsQuery::create()->findPk($post->get("id"));
        if (!is_null($redirection)) {
            $redirection->delete();
        }
        return $this->redirectToRoute("admin.module.configure", array(), array('module_code' => "Redir301",
                    '_controller' => 'Thelia\\Controller\\Admin\\ModuleController::configureAction'));
    }

}
