<?php
/**
 * Created by PhpStorm.
 * User: zhang
 * Date: 18/1/23
 * Time: 下午10:34
 */

namespace structure\Decorator;

/**
 * 动态地给一个对象添加一些额外的职责
 */
/**
 * @explain 装饰模式
 * Class Decorator
 * @package create\Decorator
 */
class Decorator implements Component
{
    protected $component;

    function __construct($component)
    {
        $this->component=$component;
    }

    public function operation()
    {
        // TODO: Implement operation() method.
        $this->component->operation();
    }
}

/**
 * Decorator 模式和 Proxy 模式的相似的地方在于它们都拥有一个指向其他对象的引用(指 针),
 * 即通过组合的方式来为对象提供更多操作(或者 Decorator 模式)间接性(Proxy 模式)。
 * 但是他们的区别是,Proxy 模式会提供使用其作为代理的对象一样接口,使用代理类将其操 作都委托给 Proxy 直接进行。
 * 这里可以简单理解为组合和委托之间的微妙的区别了。
 * Decorator 模式除了采用组合的方式取得了比采用继承方式更好的效果,Decorator 模式 还给设计带来一种“即用即付”的方式来添加职责。
 * 在 OO 设计和分析经常有这样一种情况: 为了多态,通过父类指针指向其具体子类,
 * 但是这就带来另外一个问题,当具体子类要添加 新的职责,就必须向其父类添加一个这个职责的抽象接口,
 * 否则是通过父类指针是调用不到 这个方法了。
 * 这样处于高层的父类就承载了太多的特征(方法),并且继承自这个父类的所 有子类都不可避免继承了父类的这些接口,
 * 但是可能这并不是这个具体子类所需要的。
 * 而在 Decorator 模式提供了一种较好的解决方法,当需要添加一个操作的时候就可以通过 Decorator 模式来解决,你可以一步步添加新的职责。
 */