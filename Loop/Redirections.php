<?php

namespace Redir301\Loop;

use Redir301\Model\Redir301RedirectionsQuery;
use Thelia\Core\Template\Element\PropelSearchLoopInterface;
use Thelia\Core\Template\Element\BaseLoop;
use Thelia\Core\Template\Element\LoopResult;
use Thelia\Core\Template\Element\LoopResultRow;
use Thelia\Core\Template\Loop\Argument\ArgumentCollection;
use Thelia\Core\Template\Loop\Argument\Argument;
use Propel\Runtime\ActiveQuery\Criteria;

/**
 *
 * Redir301 loop
 *
 * Class Redir301
 * @package Redir301\Loop
 * @author Alexandre Noziere - dev.alexandre.noziere@gmail.com
 */
class Redirections extends BaseLoop implements PropelSearchLoopInterface
{
    /* set countable to false since we need to preserve keys */

    public $countable = true;
    public $timestampable = false;
    public $versionable = false;

    /**
     * @return ArgumentCollection
     */
    protected function getArgDefinitions()
    {
        return new ArgumentCollection(
                Argument::createIntTypeArgument('start', 0), 
                Argument::createIntTypeArgument('limit', 20)
        );
    }

    public function buildModelCriteria()
    {
        $redirections = Redir301RedirectionsQuery::create();
        $start = $this->getStart();
        $limit = $this->getLimit();
        if (!is_null($start) && !is_null($limit)) {
            $redirections->offset($start);
            $redirections->limit($limit);
        } 
        $redirections->orderById(Criteria::DESC);

        return $redirections;
    }

    public function parseResults(LoopResult $loopResult)
    {
        foreach ($loopResult->getResultDataCollection() as $item) {
            $loopResultRow = new LoopResultRow($item);

            $loopResultRow->set("ID", $item->getId());
            $loopResultRow->set("PATTERN", $item->getPattern());
            $loopResultRow->set("TARGET", $item->getTarget());
            $loopResultRow->set("ACTIVE", $item->getActive());
            $loopResultRow->set("CLASS_BTN_ACTIVE", ($item->getActive()) ? 'success' : 'danger');
            $loopResultRow->set("CLASS_ICON_ACTIVE", ($item->getActive()) ? 'ok' : 'remove');
            $loopResultRow->set("TRIGGERED", $item->getTriggered());
            if ($item->getTriggeredLast() != null) {
                $loopResultRow->set("LASTTIME", $item->getTriggeredLast()->format("d/m/Y H:i"));
            } else {
                $loopResultRow->set("LASTTIME", $this->translator->trans("No triggered", array(), "redir301"));
            }

            $loopResult->addRow($loopResultRow);
        }
        return $loopResult;
    }

}
