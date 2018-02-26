<?php
/**
 * Created by PhpStorm.
 * User: zhang
 * Date: 18/1/22
 * Time: 下午3:34
 */

namespace create\Builder;

/**
 * @explain 客户端选择产品套餐
 * Class Client
 * @package create\Builder
 */
class Client
{
    public function buy($type){
        $builder  = new ConcreteBuilder();  //产品套餐搭配部分
        $director = new Director($builder); //产品进行搭配
        if($type==1){
            $product=$director->constructType01();//客户选择产品01套餐
            $product->showToClient();
        }
        else if($type==2){
            $product=$director->constructType02();        //客户选择产品01套餐
            $product->showToClient();
        }
        return null;
    }
}