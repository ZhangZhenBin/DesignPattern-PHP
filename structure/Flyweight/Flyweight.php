<?php
/**
 * Created by PhpStorm.
 * User: zhang
 * Date: 18/1/24
 * Time: 下午11:22
 */

namespace structure\Flyweight;

/**
 * Class Flyweight
 * @package structure\Flyweight
 */
abstract class Flyweight
{
    abstract public function operation($state);
}