<?php
/**
 * Created by PhpStorm.
 * User: zhang
 * Date: 18/1/22
 * Time: 下午11:34
 */

namespace structure\Bridge;


class WomanPeople extends AbstractPeople
{
    public  function run()
    {
        // TODO: Implement run() method.
        echo "《女人》＝》";
        if(!empty($this->car)){
            $this->car->run();
        }
    }
}