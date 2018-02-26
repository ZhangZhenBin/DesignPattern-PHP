<?php
/**
 * Created by PhpStorm.
 * User: zhang
 * Date: 18/1/22
 * Time: 上午1:02
 */

namespace create\AbstractFactory;

/**
 * @explain  抽象工厂
 * @good     高内聚和松耦合
 * @function 为了解决要创建一组相关或者相互依赖的对象的问题
 * Class AbstractFactory
 * @package  create\AbstractFactory
 */
abstract class AbstractFactory
{
    public function createProduct0X(){}
    public function createProduct1X(){}
}