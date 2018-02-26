<?php
/**
 * Created by PhpStorm.
 * User: zhang
 * Date: 18/1/22
 * Time: 上午9:40
 */

namespace create\Singleton;

/**
 * @experience
 * 1、Singleton 模式经常和 Factory(AbstractFactory)模式在一起使用,因为系统中工厂对象 一般来说只要一个。
 */

/**
 * @explain 单例模式
 * @good    1. 改进系统的设计。 2. 是对全局变量的一种改进。
 * @bad     1. 难于调试。2. 隐藏的依赖关系。3. 无法用错误类型的数据覆写一个单例。
 * Class Singleton
 * @package create\Singleton
 */
class Singleton
{
    /**
     * @explain 静态变量保存全局实例
     * @var null
     */
    private static $_instance = null;
    public $testNum = 10000;

    /**
     * @explain 私有构造函数，防止外界实例化对象
     * Singleton constructor.
     */
    private function __construct() {}

    /**
     * @explain 私有克隆函数，防止外办克隆对象
     */
    private function __clone() {}

    /**
     * @explain 静态方法，单例统一访问入口
     * @return  Singleton|null
     */
    static public function getInstance() {
        if (empty(self::$_instance)) {
            self::$_instance = new self();
        }
        return self::$_instance;
    }
}








