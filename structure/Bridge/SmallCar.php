<?php
/**
 * Created by PhpStorm.
 * User: zhang
 * Date: 18/1/22
 * Time: 下午10:53
 */

namespace structure\Bridge;


class SmallCar extends AbstractCar
{
    public  function run()
    {
        // TODO: Implement run() method.
        echo "《小车》＝》";
        if(!empty($this->road)){
            $this->road->run();
        }
    }
}