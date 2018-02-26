<?php
/**
 * Created by PhpStorm.
 * User: zhang
 * Date: 18/1/25
 * Time: 下午11:33
 */

namespace behavior\State;


class ConcreteStateB extends State
{
    public function operationInterface($context)
    {
        // TODO: Implement operationInterface() method.
        echo "《ConcreteStateB::OperationInterface》";
    }

    public function operationChangeState($context)
    {
        // TODO: Implement operationChangeState() method.
        $this->operationInterface($context);
        $this->ChangeState($context,new ConcreteStateA());
    }
}