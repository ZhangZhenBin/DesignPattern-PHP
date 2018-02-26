<?php
/**
 * Created by PhpStorm.
 * User: zhang
 * Date: 18/2/8
 * Time: 上午11:44
 */

namespace behavior\Command;


class Invoker
{
    private $_command;

    function __construct(Command $command)
    {
        $this->_command = $command;
    }

    public function Invoker()
    {
        $this->_command->excute();
    }
}