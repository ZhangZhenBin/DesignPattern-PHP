<?php
/**
 * Created by PhpStorm.
 * User: zhang
 * Date: 18/2/7
 * Time: 下午11:07
 */

namespace behavior\Mediator;

/**
 * @explain 中介者模式
 * Class Mediator
 * @package behavior\Mediator
 */
abstract class Mediator
{
    abstract function doActionFromAtoB();
    abstract function doActionFromBtoA();
}

/**
 * Mediator 模式是一种很有用并且很常用的模式,它通过将对象间的通信封装到一个类 中,将多对多的通信转化为一对多的通信,降低了系统的复杂性。
 * Mediator 还获得系统解耦 的特性,通过 Mediator,各个 Colleague 就不必维护各自通信的对象和通信协议,降低了系 统的耦合性,
 * Mediator 和各个 Colleague 就可以相互独立地修改了。
 * Mediator 模式还有一个很显著额特点就是将控制集中,集中的优点就是便于管理,也正 式符合了 OO 设计中的每个类的职责要单一和集中的原则。
 */