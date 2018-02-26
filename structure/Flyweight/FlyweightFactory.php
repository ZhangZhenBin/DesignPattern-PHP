<?php
/**
 * Created by PhpStorm.
 * User: zhang
 * Date: 18/1/24
 * Time: 下午11:35
 */

namespace structure\Flyweight;
/**
 * Flyweight 模式在实现过程中主要是要为共享对象提供一个存放的“仓库”(对象池),
 * 这里是通过 C++ STL 中 Vector 容器,当然就牵涉到 STL 编程的一些问题(Iterator 使用等)。
 * 另外应该注意的就是对对象“仓库”(对象池)的管理策略(查找、插入等),这里是通过直 接的顺序遍历实现的,
 * 当然我们可以使用其他更加有效的索引策略,例如 Hash 表的管理策 略,当时这些细节已经不是 Flyweight模式本身要处理的了。
 */
/**
 * @explain 单纯享元模式
 * Class FlyweightFactory
 * @package structure\Flyweight
 */
class FlyweightFactory
{
    private $_flyweights;

    public function __construct()
    {
        $this->_flyweights = array();
    }

    public function getFlyweigth($state)
    {
        if (isset($this->_flyweights[$state])) {
            return $this->_flyweights[$state];
        } else {
            return $this->_flyweights[$state] = new ConcreteFlyweight($state);
        }
    }
}