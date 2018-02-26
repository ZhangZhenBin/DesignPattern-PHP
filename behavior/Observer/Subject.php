<?php
/**
 * Created by PhpStorm.
 * User: zhang
 * Date: 18/1/26
 * Time: 下午10:26
 */

namespace behavior\Observer;


abstract class Subject
{
    private $observers;
    function __construct()
    {
        $this->observers = array();
    }

    public function attach($observer)
    {
        $this->observers[] = $observer;
    }

    public function detach($observer)
    {
        if(!$observer)
        {
            for($i=0;$i<count($this->observers);$i++)
            {
                if($this->observers[$i]===$observer)
                {
                    array_splice($this->observers,$i,1);
                }
            }
        }
    }

    public function notify(){
        for($i=0;$i<count($this->observers);$i++)
        {
            $this->observers[$i]->update();
        }
    }
    abstract public function setState($state);
    abstract public function getState();
}