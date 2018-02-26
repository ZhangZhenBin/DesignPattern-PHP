<?php
/**
 * Created by PhpStorm.
 * User: zhang
 * Date: 18/2/8
 * Time: 下午12:42
 */

namespace behavior\Visitor;


class ConcreteElementB extends Element
{
    public function accept(Visitor $visitor)
    {
        // TODO: Implement accept() method.
        $visitor->visitConcreteElementB($this);
        echo '《visiting ConcreteElementB》';
    }
}