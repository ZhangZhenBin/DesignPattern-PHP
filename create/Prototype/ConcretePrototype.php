<?php
/**
 * Created by PhpStorm.
 * User: zhang
 * Date: 18/1/22
 * Time: 下午9:46
 */

namespace create\Prototype;

/**
 * Builder 模式重在复杂对象的一步步创建(并不直接返回对象),设计模式精解-GoF 23 种设计模式解析附C++实现源码。
 * AbstractFactory 模式重在产生多个相互依赖类的对象。
 * Prototype 模式重在从自身复制自己创建新类。
 */

/**
 * @explain 克隆设计模式
 * @good
 * @bad
 * Class ConcretePrototype
 * @package create\Prototype
 */
class ConcretePrototype extends Prototype
{
    public $name='name';

    /**
     * @explain 浅克隆
     * @return $this
     */
    public function deepClones()
    {
        // TODO: Implement myClone() method.
        $tempClass = new self();
        $tempClass->name = $this->name;
        return $tempClass;
    }

    /**
     * @explain 浅克隆
     * @return $this
     */
    public function shallowClone()
    {
        // TODO: Implement shallowClone() method.
        return $this;
    }

    /**
     * @explain name展示
     */
    public function showName(){
        echo '《'.$this->name.'》';
    }
}