<?php
/**
 * Created by PhpStorm.
 * User: zhang
 * Date: 18/2/7
 * Time: 下午11:02
 */

namespace behavior\Mediator;


class ConcreteColleageA extends Colleage
{
    protected $_state;
    public function action()
    {
        // TODO: Implement action() method.
        $this->_mediator->doActionFromAtoB();
        echo '《State of ConcreteColleageB》'.$this->getState();
    }

    public function getState()
    {
        // TODO: Implement getState() method.
        return $this->_state;
    }

    public function setState($stateString)
    {
        // TODO: Implement setState() method.
        $this->_state = $stateString;
    }
}