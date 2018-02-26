<?php
/**
 * Created by PhpStorm.
 * User: zhang
 * Date: 18/1/22
 * Time: 上午12:19
 */

namespace create\FactoryMethod;

/**
 * @explain  工厂方法模式
 * @good     为了提高内聚和松耦合。可读性和维护性提高很多。
 * @bad      实现子类为代价
 * @function 1、定义创建对象接口，封装了对象的创建。
 *           2、使得具体化类的工作延迟到了子类中
 * Interface Factory
 * @package  create\FactoryMethod
 */
interface Factory
{
    function createProduct();
}