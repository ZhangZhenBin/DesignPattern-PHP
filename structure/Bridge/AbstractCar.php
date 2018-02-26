<?php
/**
 * Created by PhpStorm.
 * User: zhang
 * Date: 18/1/22
 * Time: 下午10:47
 */

namespace structure\Bridge;


/**
 * @explain 抽象汽车
 * Class AbstractCar
 * @package structure\Bridge
 */
abstract class AbstractCar
{
    protected $road;
    function __construct($road)
    {
        $this->road=$road;
    }
    public abstract function run();
}