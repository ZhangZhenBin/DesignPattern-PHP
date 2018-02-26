<?php
/**
 * Created by PhpStorm.
 * User: zhang
 * Date: 18/2/8
 * Time: 下午12:37
 */

namespace behavior\Visitor;


class ConcreteVisitorB extends Visitor
{
    public function visitConcreteElementA(Element $element)
    {
        // TODO: Implement visitConcreteElementA() method.
        echo "《ConcreteVisitorB：ElementA》";
    }

    public function visitConcreteElementB(Element $element)
    {
        // TODO: Implement visitConcreteElementB() method.
        echo "《ConcreteVisitorB：ElementB》";
    }
}