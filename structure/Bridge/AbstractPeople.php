<?php
/**
 * Created by PhpStorm.
 * User: zhang
 * Date: 18/1/22
 * Time: 下午11:26
 */

namespace structure\Bridge;


abstract class AbstractPeople
{
    protected $car;
    function __construct($car)
    {
        $this->car=$car;
    }

    public abstract function run();
}