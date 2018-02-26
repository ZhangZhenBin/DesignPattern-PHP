<?php
/**
 * Created by PhpStorm.
 * User: zhang
 * Date: 18/2/8
 * Time: 下午12:37
 */

namespace behavior\Visitor;


class ConcreteVisitorA extends Visitor
{
    public function visitConcreteElementA(Element $element)
    {
        // TODO: Implement visitConcreteElementA() method.
        echo "《ConcreteVisitorA：ElementA》";
    }

    public function visitConcreteElementB(Element $element)
    {
        // TODO: Implement visitConcreteElementB() method.
        echo "《ConcreteVisitorA：ElementB》";
    }
}