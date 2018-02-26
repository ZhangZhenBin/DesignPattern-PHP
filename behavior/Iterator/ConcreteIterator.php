<?php
/**
 * Created by PhpStorm.
 * User: zhang
 * Date: 18/2/8
 * Time: 下午3:40
 */

namespace behavior\Iterator;


class ConcreteIterator extends Iterator
{
    private $_aggregate;
    private $_index;

    function __construct(Aggregate $aggregate,$index=0)
    {
        $this->_aggregate = $aggregate;
        $this->_index     = $index;
    }

    public function first()
    {
        // TODO: Implement first() method.
        $this->_index = 0 ;
    }

    public function next()
    {
        // TODO: Implement next() method.
        $this->_index = $this->_index + 1;
    }

    public function isDone()
    {
        // TODO: Implement isDone() method.
        if($this->_index < $this->_aggregate->getSize())
        {
            return true;
        }
        return false;
    }

    public function currentItem()
    {
        // TODO: Implement currentItem() method.
        if($this->_index < $this->_aggregate->getSize())
        {
            return $this->_aggregate->getItem($this->_index);
        }
        return 0;
    }
}