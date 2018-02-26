<?php
/**
 * Created by PhpStorm.
 * User: zhang
 * Date: 18/1/22
 * Time: 下午11:31
 */

namespace structure\Bridge;


class ManPeople extends AbstractPeople
{
    public function run()
    {
        // TODO: Implement run() method.
        echo "《男人》＝》";
        if(!empty($this->car)){
            $this->car->run();
        }
    }
}