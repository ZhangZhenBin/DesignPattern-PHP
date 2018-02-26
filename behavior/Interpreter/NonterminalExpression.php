<?php
/**
 * Created by PhpStorm.
 * User: zhang
 * Date: 18/2/12
 * Time: 下午10:57
 */

namespace behavior\Interpreter;


class NonterminalExpression extends AbstractExpression
{
    private $times;
    private $expression;

    function __construct(AbstractExpression $expression,$times)
    {
        $this->expression = $expression;
        $this->times      = $times;
    }

    public function Interpret(Context $context)
    {
        // TODO: Implement Interpret() method.
        for($i=0;$i<$this->times;$i++)
        {
            $this->expression->Interpret($context);
        }
    }
}