<?php
/**
 * Created by PhpStorm.
 * User: zhang
 * Date: 18/1/23
 * Time: 上午12:09
 */

namespace structure\AdapterClass;
/**
 * （1）想要使用一个已经存在的类，但是它却不符合现有的接口规范，导致无法直接去访问，这时创建一个适配器就能间接去访问这个类中的方法。
 * （2）我们有一个类，想将其设计为可重用的类（可被多处访问），我们可以创建适配器来将这个类来适配其他没有提供合适接口的类。
 */

/**
 * 类适配器采用“多继承”的实现方式，带来了不良的高耦合，所以一般不推荐使用。
 * 对象适配器采用“对象组合”的方式，更符合松耦合精神。
 * @explain 创造一个适配器来适配电脑USB和屏幕HDMI接口
 * Class Adapter
 * @package create\AdapterClass
 */
class Adapter extends Adaptee implements Target
{
    public function HDMI()
    {
        // TODO: Implement HDMI() method.
        $this->USB();
    }
}