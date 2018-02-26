<?php
/**
 * Created by PhpStorm.
 * User: zhang
 * Date: 18/2/8
 * Time: 下午2:58
 */

namespace behavior\ChainOfResponsibility;


abstract class Handle
{
    private  $_success;

    abstract public function handleRequest();

    public function setSuccessor(Handle $handle)
    {
        $this->_success = $handle;
    }

    public function getSuccessor()
    {
        return $this->_success;
    }


}