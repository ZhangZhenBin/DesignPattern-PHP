<?php
/**
 * Created by PhpStorm.
 * User: zhang
 * Date: 18/2/8
 * Time: 下午3:24
 */

namespace behavior\Iterator;


abstract class Aggregate
{
    abstract public function createIterator();
    abstract public function getItem($index);
    abstract public function getSize();

}