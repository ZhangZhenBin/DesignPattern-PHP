<?php
/**
 * Created by PhpStorm.
 * User: zhang
 * Date: 18/1/22
 * Time: 下午10:55
 */

namespace structure\Bridge;


class BigCar extends AbstractCar
{
    public  function run()
    {
        // TODO: Implement run() method.
        echo "《大车》＝》";
        if(!empty($this->road)){
            $this->road->run();
        }
    }
}