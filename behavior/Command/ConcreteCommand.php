<?php
/**
 * Created by PhpStorm.
 * User: zhang
 * Date: 18/2/8
 * Time: 上午11:40
 */

namespace behavior\Command;


class ConcreteCommand extends Command
{
    private $_reciever;

    function __construct(Reciever $reciever)
    {
        $this->_reciever = $reciever;
    }

    public function excute()
    {
        // TODO: Implement excute() method.
        $this->_reciever->action();
        echo '《ConcreteCommand->excute》';
    }

}