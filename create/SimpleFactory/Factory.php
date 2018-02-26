<?php
/**
 * Created by PhpStorm.
 * User: zhang
 * Date: 18/1/21
 * Time: 下午11:18
 */

namespace create\SimpleFactory;

/**
 * @explain 简单工厂的创建，简单工厂就是工厂方法模式的一个特例
 * @good    为了提高内聚和松耦合。提高了维护和可读性
 * @bad     就是增加类需要修改该方法或增加方法
 * Class Factory
 * @package create\SimpleFactory
 */
class Factory
{
    /**
     * @param $type
     * @return Product01|Product02|null
     */
    public function createProduct($type)
    {
        if($type == 0)
        {
            return new Product01();
        }
        else if($type == 1)
        {
            return new Product02();
        }
        else{
            return null;
        }
    }
}