<?php
/**
 * Created by PhpStorm.
 * User: zhang
 * Date: 18/1/23
 * Time: 上午12:08
 */

namespace structure\AdapterClass;

/**
 * @explain 笔记本电脑只有USB接口
 * Class Adaptee
 * @package create\AdapterClass
 */
class Adaptee
{
    public function USB() {
        echo '《USB》';
    }
}