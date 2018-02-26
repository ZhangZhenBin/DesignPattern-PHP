<?php
/**
 * Created by PhpStorm.
 * User: zhang
 * Date: 18/1/22
 * Time: 下午2:51
 */

namespace create\Builder;

/**
 *    Builder 模式强调的是一步步创建对象,并通过相同的创建过程可以获得不同的结果对象,一般
 * 来说 Builder 模式中对象不是直接返回的。而在 AbstractFactory模式中对象是直接返回的,
 * AbstractFactory 模式强调的是为创建多个相互依赖的对象提供一个 同一的接口。
 */

/**
 * @explain 构建者模式又叫生成器设计模式
 * @good    Builder模式的应用场景，Builder模式可以将一个类的构建和表示进行分离
 * Interface Builder
 * @package create\Builder
 */
interface Builder
{
    public function buildPartA();
    public function buildPartB();
    public function buildPartC();
    public function getProduct();
}