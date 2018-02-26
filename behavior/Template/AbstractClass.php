<?php
/**
 * Created by PhpStorm.
 * User: zhang
 * Date: 18/1/25
 * Time: 下午10:17
 */

namespace behavior\Template;


abstract class AbstractClass
{
    abstract protected function primitiveOperation1();
    abstract protected function primitiveOperation2();
    public function templateMethod()
    {
        $this->primitiveOperation1();
        $this->primitiveOperation2();
    }
}