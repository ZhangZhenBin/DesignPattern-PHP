<?php
/**
 * Created by PhpStorm.
 * User: zhang
 * Date: 18/1/25
 * Time: 下午11:46
 */

namespace behavior\State;


class Context
{
    protected $state;

    function __construct($state)
    {
        $this->state = $state;
    }

    public function oprationInterface()
    {
        $this->state->operationInterface($this);
    }

    public function changeState($state)
    {
        $this->state = $state;
        return true;
    }

    public function operationChangState()
    {
        $this->state->operationChangeState($this);
    }

}