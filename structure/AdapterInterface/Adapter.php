<?php
/**
 * Created by PhpStorm.
 * User: zhang
 * Date: 18/1/23
 * Time: 上午10:55
 */

namespace structure\AdapterInterface;

/**
 * 想要使用接口中的某个或某些方法，但是接口中有太多方法，
 * 我们要使用时必须实现接口并实现其中的所有方法，
 * 可以使用抽象类来实现接口，并不对方法进行实现（仅置空），
 * 然后我们再继承这个抽象类来通过重写想用的方法的方式来实现。这个抽象类就是适配器。
 */

/**
 * @explain 接口适配器
 * Class Adapter
 * @package structure\AdapterInterface
 */
class Adapter implements Adaptee
{
    function method01()
    {
        // TODO: Implement method01() method.
    }

    function method02()
    {
        // TODO: Implement method02() method.
    }

    function method03()
    {
        // TODO: Implement method03() method.
    }

    function method04()
    {
        // TODO: Implement method04() method.
    }

    function method05()
    {
        // TODO: Implement method05() method.
    }
}