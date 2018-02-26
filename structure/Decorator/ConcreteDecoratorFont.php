<?php
/**
 * Created by PhpStorm.
 * User: zhang
 * Date: 18/1/23
 * Time: 下午11:24
 */

namespace structure\Decorator;


class ConcreteDecoratorFont extends Decorator
{
    public $myFont='15px';
    public function operation()
    {
        echo '<font style="font-size:'.$this->myFont.'">';
        $this->component->operation();
        echo "</font>";
    }
}