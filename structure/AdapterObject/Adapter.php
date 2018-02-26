<?php
/**
 * Created by PhpStorm.
 * User: zhang
 * Date: 18/1/23
 * Time: 上午12:09
 */

namespace structure\AdapterObject;

/**
 * 类适配器采用“多继承”的实现方式，带来了不良的高耦合，所以一般不推荐使用。
 * 对象适配器采用“对象组合”的方式，更符合松耦合精神。
 * @explain 创造一个适配器来适配电脑USB和屏幕HDMI接口
 * Class Adapter
 * @package create\AdapterClass
 */
class Adapter implements Target
{
    private $adaptee;
    public function __construct($adaptee) {
        $this->adaptee = $adaptee;
    }
    public function HDMI()
    {
        // TODO: Implement HDMI() method.
        $this->adaptee->USB();
    }
}