<?php
/**
 * Created by PhpStorm.
 * User: zhang
 * Date: 18/1/24
 * Time: 下午11:49
 */

namespace structure\Flyweight;


class FlyweightFactory00
{
    private $_flyweights;

    public function __construct()
    {
        $this->_flyweights = array();
    }

    public function getFlyweigth($state)
    {
        if (is_array($state))
        {
            $uFlyweight = new UnsharedConcreteFlyweight();
            foreach ($state as $row)
            {
                $uFlyweight->add($row, $this->getFlyweigth($row));
            }
            return $uFlyweight;
        }
        else if (is_string($state))
        {
            if (isset($this->_flyweights[$state]))
            {
                return $this->_flyweights[$state];
            } else {
                return $this->_flyweights[$state] = new ConcreteFlyweight($state);
            }
        }
        else
        {
            return null;
        }
    }
}