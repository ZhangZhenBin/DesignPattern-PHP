<?php
/**
 * Created by PhpStorm.
 * User: zhang
 * Date: 18/1/25
 * Time: 下午10:12
 */


/**
 * 问题：
 * 在面向对象系统的分析与设计过程中经常会遇到这样一种情况:
 * 对于某一个业务逻辑 (算法实现)在不同的对象中有不同的细节实现,但是逻辑(算法)的框架(或通用的应用 算法)是相同的。
 * Template 提供了这种情况的一个实现框架。
 * Template 模式是采用继承的方式实现这一点:将逻辑(算法)框架放在抽象基类中,并 定义好细节的接口,子类中实现细节。
 * 【注释1】:Strategy模式解决的是和Template模式类似的问题,
 * 但是Strategy模式是将逻辑 (算法)封装到一个类中,并采取组合(委托)的方式解决这个问题。
 *
 * Template 模式实际上就是利用面向对象中多态的概念实现算法实现细节和高层接口的松耦合。
 * 可以看到 Template 模式采取的是继承方式实现这一点的,由于继承是一种强约束 性的条件,
 * 因此也给 Template 模式带来一些许多不方便的地方(有关这一点将在讨论中展开)。
 */

/**
 * @explain 模版模式
 */

/**
 * Template 模式是很简单模式,但是也应用很广的模式。
 * 如上面的分析和实现中阐明的Template 是采用继承的方式实现算法的异构,
 * 其关键点就是将通用算法封装在抽象基类中,并将不同的算法细节放到子类中实现。
 * Template 模式获得一种反向控制结构效果,这也是面向对象系统的分析和设计中一个原则DIP(依赖倒置:Dependency Inversion Principles)。
 * 其含义就是父类调用子类的操作(高 层模块调用低层模块的操作),低层模块实现高层模块声明的接口。
 * 这样控制权在父类(高 层模块),低层模块反而要依赖高层模块。
 * 继承的强制性约束关系也让 Template 模式有不足的地方,我们可以看到对于 ConcreteClass 类中的实现的原语方法 Primitive1(),
 * 是不能被别的类复用。假设我们要创建 一个 AbstractClass 的变体 AnotherAbstractClass,并且两者只是通用算法不一样,
 * 其原语操 作想复用 AbstractClass 的子类的实现。
 * 但是这是不可能实现的,因为 ConcreteClass 继承自 AbstractClass,也就继承了 AbstractClass 的通用算法,
 * AnotherAbstractClass 是复用不了 ConcreteClass 的实现,因为后者不是继承自前者。
 * Template 模式暴露的问题也正是继承所固有的问题,Strategy 模式则通过组合(委托) 来达到和 Template 模式类似的效果,
 * 其代价就是空间和时间上的代价,关于 Strategy 模式的 详细讨论请参考 Strategy 模式解析。
 */