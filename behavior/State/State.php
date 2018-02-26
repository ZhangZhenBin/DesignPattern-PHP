<?php
/**
 * Created by PhpStorm.
 * User: zhang
 * Date: 18/1/25
 * Time: 下午11:24
 */

namespace behavior\State;

/**
 * @explain 状态模式
 * Class State
 * @package behavior\State
 */
abstract class State
{
    abstract public function operationInterface($context);
    abstract public function operationChangeState($context);

    protected function changeState($context,$state)
    {
        $context->changeState($state);
        return true;
    }
}

/**
 * State 模式的应用也非常广泛,从最高层逻辑用户接口 GUI 到最底层的通讯协议
 * (例如 GoF 在《设计模式》中就利用 State 模式模拟实现一个 TCP 连接的类。)都有其用武之地。
 * State 模式和 Strategy 模式又很大程度上的相似:它们都有一个 Context 类,
 * 都是通过委 托(组合)给一个具有多个派生类的多态基类实现 Context 的算法逻辑。
 * 两者最大的差别就 是 State 模式中派生类持有指向 Context 对象的引用,并通过这个引用调用 Context 中的方法,
 * 但在 Strategy 模式中就没有这种情况。
 * 因此可以说一个 State 实例同样是 Strategy 模式的一 个实例,反之却不成立。
 * 实际上 State 模式和 Strategy 模式的区别还在于它们所关注的点不 尽相同:
 * State 模式主要是要适应对象对于状态改变时的不同处理策略的实现,而 Strategy 则主要是具体算法和实现接口的解耦(coupling),
 * Strategy 模式中并没有状态的概念(虽然 很多时候有可以被看作是状态的概念),并且更加不关心状态的改变了。
 * State 模式很好地实现了对象的状态逻辑和动作实现的分离,
 * 状态逻辑分布在 State 的派 生类中实现,而动作实现则可以放在 Context 类中实现(这也是为什么 State 派生类需要拥
 * 有一个指向 Context 的指针)。这使得两者的变化相互独立,改变 State 的状态逻辑可以很容 易复用 Context 的动作,
 * 也可以在不影响 State 派生类的前提下创建 Context 的子类来更改或 替换动作实现。
 * State 模式问题主要是逻辑分散化,状态逻辑分布到了很多的 State 的子类中,很难看到 整个的状态逻辑图,这也带来了代码的维护问题。
 */