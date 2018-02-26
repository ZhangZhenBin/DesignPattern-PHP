<?php
/**
 * Created by PhpStorm.
 * User: zhang
 * Date: 18/1/25
 * Time: 下午11:00
 */

namespace behavior\Strategy;


class Context
{
    protected $strategy;
    function __construct($strategy)
    {
        $this->strategy = $strategy;
    }

    public function doAction()
    {
        $this->strategy->algrithmInterface();
    }
}