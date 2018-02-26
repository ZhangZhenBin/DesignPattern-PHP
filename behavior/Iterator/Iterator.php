<?php
/**
 * Created by PhpStorm.
 * User: zhang
 * Date: 18/2/8
 * Time: 下午3:23
 */

namespace behavior\Iterator;

/**
 * @explain 迭代器模式
 * Class Iterator
 * @package behavior\Iterator
 */
abstract class Iterator
{
    abstract public function first();
    abstract public function next();
    abstract public function isDone();
    abstract public function currentItem();
}