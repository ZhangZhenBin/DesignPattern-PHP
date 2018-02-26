<?php
/**
 * Created by PhpStorm.
 * User: zhang
 * Date: 18/2/8
 * Time: 下午12:36
 */

namespace behavior\Visitor;


abstract class Element
{
    abstract public function accept(Visitor $visitor);
}