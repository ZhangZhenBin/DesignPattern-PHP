<?php
/**
 * Created by PhpStorm.
 * User: zhang
 * Date: 18/1/23
 * Time: 下午10:33
 */

namespace structure\Decorator;


class ConcreteComponent implements Component
{
    public function operation()
    {
        // TODO: Implement operation() method.
        echo '《我是一面墙》';
    }
}