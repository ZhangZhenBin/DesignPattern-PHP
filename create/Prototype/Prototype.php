<?php
/**
 * Created by PhpStorm.
 * User: zhang
 * Date: 18/1/22
 * Time: 下午9:29
 */

namespace create\Prototype;

/**
 * @explain 原型模式
 * Class Prototype
 * @package create\Prototype
 */
abstract class Prototype
{
    public abstract  function deepClones();
    public abstract  function shallowClone();
}