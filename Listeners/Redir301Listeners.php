<?php

namespace Redir301\Listeners;

use Symfony\Component\EventDispatcher\EventSubscriberInterface;
use Thelia\Action\BaseAction;
use Thelia\Core\Event\TheliaEvents;
use \Redir301\Model\Redir301RedirectionsQuery;
use \Thelia\Tools\Redirect;

/**
 * Class Redir301Listeners
 * @package Redir301\Listeners
 */
class Redir301Listeners extends BaseAction implements EventSubscriberInterface
{

    public function initRedir301()
    {
        $search = @$_SERVER['REQUEST_URI'];
        //dev
        $search = str_replace("index_dev.php/", "", $search);
        $search = str_replace("index_dev.php", "", $search);


        $redirect = Redir301RedirectionsQuery::create()->filterByPattern($search)->findOne();
        if (!is_null($redirect) && $redirect->getActive() === 1) {
            $target = $redirect->getTarget();

            if (strpos($target, '$') !== false) {
                $pattern = $redirect->getPattern();
                $target = preg_replace('/' . $pattern . '/', $target, $search);
            }
            if (!strpos($target, '://')) {
                $target = $target;
            }
            if ($redirect->getTriggered() == 0) {
                $redirect->setTriggeredFirst(date("Y-m-d H:i:s"));
            }
            $redirect->setTriggeredLast(date("Y-m-d H:i:s"));
            $redirect->setTriggered($redirect->getTriggered() + 1);
            $redirect->save();

            Redirect::exec($target, "301");
        }
    }

    public static function getSubscribedEvents()
    {
        return array(
            TheliaEvents::BOOT => array("initRedir301", 128)
        );
    }

}
