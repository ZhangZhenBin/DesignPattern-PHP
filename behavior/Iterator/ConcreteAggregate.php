<?php
/**
 * Created by PhpStorm.
 * User: zhang
 * Date: 18/2/8
 * Time: 下午3:28
 */

namespace behavior\Iterator;


class ConcreteAggregate extends Aggregate
{
    private $objects;
    function __construct()
    {
        $this->objects = ['object00','object01','object02','object03'];
    }

    public function createIterator()
    {
        // TODO: Implement createIterator() method.
        return new ConcreteAggregate();
    }

    public function getItem($index)
    {
        // TODO: Implement getItem() method.
        return $this->objects[$index];
    }

    public function getSize()
    {
        // TODO: Implement getSize() method.
        return count($this->objects);
    }
}