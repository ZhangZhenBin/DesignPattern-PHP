<?php
/**
 * Created by PhpStorm.
 * User: zhang
 * Date: 18/2/7
 * Time: 下午10:56
 */

namespace behavior\Mediator;


abstract class Colleage
{
    protected $_mediator;
    function __construct(Mediator $mediator)
    {
        $this->_mediator = $mediator;
    }
    abstract public function action();
    abstract public function setState($stateString);
    abstract public function getState();
}