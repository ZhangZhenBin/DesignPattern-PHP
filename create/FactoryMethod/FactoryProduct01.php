<?php
/**
 * Created by PhpStorm.
 * User: zhang
 * Date: 18/1/22
 * Time: 上午12:24
 */

namespace create\FactoryMethod;

/**
 * @explain 创建工厂产品类01
 * Class FactoryProduct01
 * @package create\FactoryMethod
 */
class FactoryProduct01 implements Factory
{
    function createProduct()
    {
        // TODO: Implement createProduct() method.
        return new Product01();
    }
}