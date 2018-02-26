<?php
/**
 * Created by PhpStorm.
 * User: zhang
 * Date: 18/1/23
 * Time: 上午12:08
 */

namespace structure\AdapterObject;
/**
 * （1）想要使用一个已经存在的类，但是它却不符合现有的接口规范，导致无法直接去访问，这时创建一个适配器就能间接去访问这个类中的方法。
 * （2）我们有一个类，想将其设计为可重用的类（可被多处访问），我们可以创建适配器来将这个类来适配其他没有提供合适接口的类。
 */

/**
 * @explain 笔记本电脑只有USB接口
 * Class Adaptee
 * @package create\AdapterClass
 */
class Adaptee
{
    public function USB() {
        echo '《USB》';
    }
}