<?php
/**
 * Created by PhpStorm.
 * User: zhang
 * Date: 18/1/23
 * Time: 上午12:07
 */

namespace structure\AdapterClass;

/**
 * @explain  买了一个屏幕想连接电脑，结果屏幕连接电脑的线只有HDMI接口
 * Interface Target
 * @package create\AdapterClass
 */
interface Target
{
    public function HDMI();
}