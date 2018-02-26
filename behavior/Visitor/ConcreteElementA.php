<?php
/**
 * Created by PhpStorm.
 * User: zhang
 * Date: 18/2/8
 * Time: 下午12:42
 */

namespace behavior\Visitor;


class ConcreteElementA extends Element
{
    public function accept(Visitor $visitor)
    {
        // TODO: Implement accept() method.
        $visitor->visitConcreteElementA($this);
        echo '《visiting ConcreteElementA》';
    }
}