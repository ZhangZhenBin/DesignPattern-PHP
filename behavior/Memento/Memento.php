<?php
/**
 * Created by PhpStorm.
 * User: zhang
 * Date: 18/1/26
 * Time: 下午11:18
 */

namespace behavior\Memento;

/**
 * @explain 备忘录模式
 * Class Memento
 * @package behavior\Memento
 */
class Memento
{
    private $state;
    function __construct($state)
    {
        $this->state = $state;
    }

    /**
     * @param mixed $state
     */
    public function setState($state)
    {
        $this->state = $state;
    }

    /**
     * @return mixed
     */
    public function getState()
    {
        return $this->state;
    }
}

/**
 * 没有人想犯错误,但是没有人能够不犯错误。犯了错误一般只能改过,却很难改正(恢 复)。
 * 世界上没有后悔药,但是我们在进行软件系统的设计时候是要给用户后悔的权利(实 际上可能也是用户要求的权利:),
 * 我们对一些关键性的操作肯定需要提供诸如撤销(Undo)的操作。那这个后悔药就是 Memento 模式提供的。
 */

/**
 * Memento 模式的关键就是要在不破坏封装行的前提下,捕获并保存一个类的内部 状态,这样就可以利用该保存的状态实施恢复操作。
 * 为了达到这个目标,可以在后面的实现 中看到我们采取了一定语言支持的技术
 */

/**
 * 在 Command 模式中,Memento 模式经常被用来维护可以撤销(Undo)操作的状态。这一点将在 Command 模式具体说明。
 */