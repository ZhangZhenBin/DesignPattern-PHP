<?php
/**
 * Created by PhpStorm.
 * User: zhang
 * Date: 18/2/7
 * Time: 下午11:03
 */

namespace behavior\Mediator;


class ConcreteColleageB extends Colleage
{
    public $_state;
    public function action()
    {
        // TODO: Implement action() method.
        $this->_mediator->doActionFromBtoA();
        echo '《State of ConcreteColleageA》'.$this->getState();
    }

    public function setState($stateString)
    {
        // TODO: Implement setState() method.
        $this->_state = $stateString;
    }

    public function getState()
    {
        // TODO: Implement getState() method.
        return $this->_state;
    }
}