<?php
/**
 * Created by PhpStorm.
 * User: zhang
 * Date: 18/1/24
 * Time: 上午10:26
 */

namespace structure\Composite;

/**
 * Composite 模式通过和 Decorator 模式有着类似的结构图,
 * 但是 Composite 模式旨在构造 类,而 Decorator 模式重在不生成子类即可给对象添加职责。
 * Decorator 模式重在修饰,而 Composite 模式重在表示。
 *
 * Composite 模式在实现中有一个问题就是要提供对于子节点(Leaf)的管理策略。
 */

/**
 * @explain 组合模式
 * Class Component
 * @package structure\Composite
 */
abstract class Component
{
    public function add($component){}
    public function remove($component){}
    public function getChild($key){}
    public function operation(){}
}