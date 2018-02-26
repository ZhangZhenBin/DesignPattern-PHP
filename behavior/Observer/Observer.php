<?php
/**
 * Created by PhpStorm.
 * User: zhang
 * Date: 18/1/26
 * Time: 下午10:52
 */

namespace behavior\Observer;

/**
 * @explain 观察者模式
 * Class Observer
 * @package behavior\Observer
 */
abstract class Observer
{
    abstract public function update();
    abstract public function printInfo();
}

/**
 * Observer 模式应该可以说是应用最多、影响最广的模式之一,
 * 因为 Observer 的一个实 例 Model/View/Control(MVC)结构在系统开发架构设计中有着很重要的地位和意义,
 * MVC 实现了业务逻辑和表示层的解耦。个人也认为 Observer 模式是软件开发过程中必须要掌握 和使用的模式之一。
 * 在 MFC 中,Doc/View(文档视图结构)提供了实现 MVC 的框架结构 (有一个从设计模式(Observer 模式)的角度分析分析
 * Doc/View 的文章正在进一步的撰写 当中,遗憾的是时间:)。在 Java 阵容中,
 * Struts 则提供和 MFC 中 Doc/View 结构类似的实 现 MVC 的框架。
 */

/**
 * MVC 只是 Observer 模式的一个实例。Observer 模式要解决的问题为:建立一个 一(Subject)对多(Observer)的依赖关系,
 * 并且做到当“一”变化的时候,依赖这个“一” 的多也能够同步改变。最常见的一个例子就是:对同一组数据进行统计分析时候,
 * 我们希望 能够提供多种形式的表示(例如以表格进行统计显示、柱状图统计显示、百分比统计显示等)。
 * 这些表示都依赖于同一组数据,我们当然需要当数据改变的时候,所有的统计的显示都能够 同时改变。Observer 模式就是解决了这一个问题。
 */

/**
 * 在 Observer 模式的实现中,Subject 维护一个 list 作为存储其所有观察者的容器。每当
 * 调用 Notify 操作就遍历 list 中的 Observer 对象,并广播通知改变状态(调用 Observer 的 Update 操作)。
 * 目标的状态 state 可以由 Subject 自己改变(示例),
 * 也可以由 Observer 的某个操作引 起 state 的改变(可调用 Subject 的 SetState 操作)。
 * Notify 操作可以由 Subject 目标主动广播 (示例),也可以由 Observer 观察者来调用(因为 Observer 维护一个指向 Subject 的指针)。
 * 运行示例程序,可以看到当 Subject 处于状态“old”时候,依赖于它的两个观察者都显 示“old”,
 * 当目标状态改变为“new”的时候,依赖于它的两个观察者也都改变为“new”。
 *
 */