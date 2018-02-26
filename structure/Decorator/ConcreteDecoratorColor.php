<?php
/**
 * Created by PhpStorm.
 * User: zhang
 * Date: 18/1/23
 * Time: 下午10:38
 */

namespace structure\Decorator;


class ConcreteDecoratorColor extends Decorator
{
    public $myColor='red';
    public function operation()
    {
        echo '<font style="color:'.$this->myColor.'">';
        $this->component->operation();
        echo "</font>";
    }


}