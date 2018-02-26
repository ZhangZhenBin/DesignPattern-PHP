<?php
/**
 * Created by PhpStorm.
 * User: zhang
 * Date: 18/2/8
 * Time: 下午3:02
 */

namespace behavior\ChainOfResponsibility;


class ConcreteHandleA extends Handle
{
    public function handleRequest()
    {
        // TODO: Implement handleRequest() method.
        if($this->getSuccessor())
        {
            echo "《ConcreteHandleA 我把处理权给后继节点》";
            $this->getSuccessor()->handleRequest();
        }
        else
        {
            echo "《ConcreteHandleA 没有后继了,我必须自己处理》";
        }
    }
}