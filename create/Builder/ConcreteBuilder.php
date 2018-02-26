<?php
/**
 * Created by PhpStorm.
 * User: zhang
 * Date: 18/1/22
 * Time: 下午2:55
 */

namespace create\Builder;


class ConcreteBuilder implements Builder
{
    private $product;
    function __construct()
    {
        $this->product = new Product();
    }

    public function buildPartA()
    {
        // TODO: Implement buildPartA() method.
        $this->product->addProducePart('PartA',1);
    }

    public function buildPartB()
    {
        // TODO: Implement buildPartB() method.
        $this->product->addProducePart('PartB',1);
    }

    public function buildPartC()
    {
        // TODO: Implement buildPartC() method.
        $this->product->addProducePart('PartC',1);
    }

    public function getProduct()
    {
        return $this->product;
    }
}