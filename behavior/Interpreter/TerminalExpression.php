<?php
/**
 * Created by PhpStorm.
 * User: zhang
 * Date: 18/2/12
 * Time: 下午10:56
 */

namespace behavior\Interpreter;


class TerminalExpression extends AbstractExpression
{
    private $statement;

    function __construct($statement)
    {
        $this->statement = $statement;
    }

    public function Interpret(Context $context)
    {
        // TODO: Implement Interpret() method.
        echo '《TerminalExpression》'.$this->statement;
    }
}