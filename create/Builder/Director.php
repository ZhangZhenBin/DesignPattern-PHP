<?php
/**
 * Created by PhpStorm.
 * User: zhang
 * Date: 18/1/22
 * Time: 下午3:00
 */

namespace create\Builder;

/**
 * @explain 指导角色：搭配套餐
 * Class Director
 * @package create\Builder
 */
class Director
{
    private $builder;
    function __construct($builder)
    {
        $this->builder = $builder;
    }

    function constructType01(){
        $this->builder->buildPartA();
        $this->builder->buildPartC();
        $this->builder->buildPartB();
        $this->builder->buildPartA();
        return $this->builder->getProduct();
    }

    function constructType02(){
        $this->builder->buildPartC();
        $this->builder->buildPartC();
        $this->builder->buildPartB();
        $this->builder->buildPartA();
        return $this->builder->getProduct();
    }
}