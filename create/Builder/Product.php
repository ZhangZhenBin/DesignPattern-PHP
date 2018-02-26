<?php
/**
 * Created by PhpStorm.
 * User: zhang
 * Date: 18/1/22
 * Time: 下午2:33
 */

namespace create\Builder;

/**
 * @explain 最终产品
 * Class Product
 * @package create\Builder
 */
class Product
{
    private $products = array();

    /**
     * @explain 添加具体产品
     * @param   $name
     * @param   $num
     */
    public function addProducePart($name,$num) {
        if(array_key_exists($name,$this->products)){
            $this->products[$name] += $num;
        }else{
            $this->products[$name] = $num;
        }
    }

    /**
     * @explain 给顾客查看产品
     */
    public function showToClient()
    {
        foreach ($this->products as $key => $v) {
            echo '《Produce'.$key , '=' , $v ,'》';
        }
        echo '<br/>';
    }
}