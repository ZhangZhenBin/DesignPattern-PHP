<?php
/**
 * Created by PhpStorm.
 * User: zhang
 * Date: 18/1/21
 * Time: 下午11:14
 */

namespace create\SimpleFactory;

/**
 * @explain 产品种类02
 * Class    Product02
 * @package create\SimpleFactory
 */
class Product02 implements Product
{
    public function send()
    {
        // TODO: Implement send() method.
        echo '《Send Product02》';
    }
}