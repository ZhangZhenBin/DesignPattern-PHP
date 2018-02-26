<?php
/**
 * Created by PhpStorm.
 * User: zhang
 * Date: 18/1/24
 * Time: 下午11:24
 */

namespace structure\Flyweight;


class ConcreteFlyweight extends Flyweight
{
    protected $intrinsicState = null;
    function __construct($state)
    {
        $this->intrinsicState = $state;
    }

    public function operation($state)
    {
        // TODO: Implement operation() method.
        echo "《".$this->intrinsicState.":".$state."》";
    }
}