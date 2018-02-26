<?php
/**
 * Created by PhpStorm.
 * User: zhang
 * Date: 18/1/25
 * Time: 上午12:02
 */

namespace structure\Facade;

/**
 * Façade 模式在高层提供了一个统一的接口,解耦了系统。
 * 设计模式中还有另一种模式 Mediator 也和 Façade 有类似的地方。
 * 但是 Mediator 主要目的是对象间的访问的解耦(通讯 时候的协议),
 */

/**
 * @explain 外观模式
 * Class Facade
 * @package structure\Facade
 */
class Facade
{
    public $system01;
    public $system02;
    function __construct()
    {
        $this->system01 = new System01();
        $this->system02 = new System02();
    }

    public function operationWrapper()
    {
        $this->system01->operation();
        $this->system02->operation();
    }
}