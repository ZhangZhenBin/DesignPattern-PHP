<?php
/**
 * Created by PhpStorm.
 * User: zhang
 * Date: 18/1/22
 * Time: 上午12:25
 */

namespace create\FactoryMethod;

/**
 * @explain 创建工厂产品类02
 * Class FactoryProduct02
 * @package create\FactoryMethod
 */
class FactoryProduct02 implements Factory
{
    function createProduct()
    {
        // TODO: Implement createProduct() method.
        return new Product02();
    }
}