<?php
/**
 * Created by PhpStorm.
 * User: zhang
 * Date: 18/2/12
 * Time: 下午10:27
 */

namespace behavior\Interpreter;

/**
 * @explain 解析器模式
 * Class Interpreter
 * @package behavior\Interpreter
 */
class Interpreter
{

}


/**
 * 一些应用提供了内建(Build-In)的脚本或者宏语言来让用户可以定义他们能够在系统 中进行的操作。
 * Interpreter 模式的目的就是使用一个解释器为用户提供一个一门定义语言的 语法表示的解释器,然后通过这个解释器来解释语言中的句子。
 */

/**
 * Interpreter 模式的示例代码很简单,只是为了说明模式的组织和使用,实际的解释Interpret 逻辑没有实际提供。
 */

/**
 * XML 格式的数据解析是一个在应用开发中很常见并且有时候是很难处理的事情,虽然 目前很多的开发平台、语言都提供了对 XML 格式数据的解析,
 * 但是例如到了移动终端设备 上,由于处理速度、计算能力、存储容量的原因解析 XML 格式的数据却是很复杂的一件事 情,
 * 最近也提出了很多的移动设备的 XML 格式解析器,但是总体上在项目开发时候还是需 要自己去设计和实现这一个过程(笔者就有过这个方面的痛苦经历)。
 * Interpreter 模式则提供了一种很好的组织和设计这种解析器的架构。
 * Interpreter 模式中使用类来表示文法规则,因此可以很容易实现文法的扩展。另外对于 终结符我们可以使用 Flyweight 模式来实现终结符的共享。
 */