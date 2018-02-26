<?php
/**
 * Created by PhpStorm.
 * User: zhang
 * Date: 18/2/7
 * Time: 下午11:09
 */

namespace behavior\Mediator;


class ConcreteMediator extends Mediator
{
    protected $_colleageA;
    protected $_colleageB;
    function doActionFromAtoB()
    {
        // TODO: Implement doActionFromAtoB() method.
        if($this->_colleageA && $this->_colleageB){
            $this->_colleageB->setState($this->_colleageA->getState());
        }
    }

    function doActionFromBtoA()
    {
        // TODO: Implement doActionFromBtoA() method.
        if($this->_colleageA && $this->_colleageB){
            $this->_colleageA->setState($this->_colleageB->getState());
        }
    }
    
    public function setColleageA(Colleage $colleageA)
    {
        $this->_colleageA = $colleageA;
    }

    public function setColleageB(Colleage $colleageB)
    {
        $this->_colleageB = $colleageB;
    }
}