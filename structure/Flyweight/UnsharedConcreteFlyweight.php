<?php
/**
 * Created by PhpStorm.
 * User: zhang
 * Date: 18/1/24
 * Time: 下午11:47
 */

namespace structure\Flyweight;

/**
 * @explain 不共享
 * Class UnsharedConcreteFlyweight
 * @package structure\Flyweight
 */
class UnsharedConcreteFlyweight extends Flyweight
{
    private $_flyweights;

    public function __construct()
    {
        $this->_flyweights = array();
    }

    public function operation($state)
    {
        foreach ($this->_flyweights as $flyweight)
        {
            $flyweight->operation($state);
        }
    }

    public function add($state, Flyweight $flyweight)
    {
        $this->_flyweights[$state] = $flyweight;
    }
}