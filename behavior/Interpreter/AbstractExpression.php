<?php
/**
 * Created by PhpStorm.
 * User: zhang
 * Date: 18/2/12
 * Time: 下午10:54
 */

namespace behavior\Interpreter;


abstract class AbstractExpression
{
    abstract public function Interpret(Context $context);
}