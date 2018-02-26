<?php
/**
 * Created by PhpStorm.
 * User: zhang
 * Date: 18/2/8
 * Time: 上午11:28
 */

namespace behavior\Command;

/**
 * @explain 命令模式
 * Class Command
 * @package behavior\Command
 */
abstract class Command
{
    abstract public function excute();
}


/**
 * Command 模式通过将请求封装到一个对象(Command)中,
 * 并将请求的接受者存放到具体的 ConcreteCommand 类中(Receiver)中,
 * 从而实现调用操作的对象和操作的具体实现 者之间的解耦。
 */

/**
 * Command 模式的思想非常简单,但是 Command 模式也十分常见,并且威力不小。
 * 实际上,Command 模式关键就是提供一个抽象的 Command 类,并将执行操作封装到 Command 类接口中,
 * Command 类中一般就是只是一些接口的集合,并不包含任何的数据属性(当然 在示例代码中,
 * 我们的 Command 类有一个处理操作的 Receiver 类的引用,但是其作用也仅 仅就是为了实现这个 Command 的 Excute 接口)。
 * 这种方式在是纯正的面向对象设计者最为 鄙视的设计方式,就像 OO 设计新手做系统设计的时候,仅仅将 Class 作为一个关键字,
 * 将 C 种的全局函数找一个类封装起来就以为是完成了面向对象的设计。
 * 但是世界上的事情不是绝对的,上面提到的方式在 OO 设计种绝大部分的时候可能是一 个不成熟的体现,
 * 但是在 Command 模式中却是起到了很好的效果。主要体现在:
 * 1)Command 模式将调用操作的对象和知道如何实现该操作的对象解耦。
 * 在上面 Command 的结构图中,Invoker 对象根本就不知道具体的是那个对象在处理 Excute 操作(当然要知道是 Command 类别的对象,也仅此而已)。
 * 2)在 Command 要增加新的处理操作对象很容易,我们可以通过创建新的继承自 Command 的子类来实现这一点。
 * 3) Command 模式可以和 Memento 模式结合起来,支持取消的操作。
 */