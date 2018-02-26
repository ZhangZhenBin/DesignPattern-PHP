<?php
/**
 * Created by PhpStorm.
 * User: zhang
 * Date: 18/1/26
 * Time: 下午10:31
 */

namespace behavior\Observer;


class ConcreteSubject extends Subject
{
    private $state;

    public function setState($state)
    {
        // TODO: Implement setState() method.
        $this->state = $state;
    }

    public function getState()
    {
        // TODO: Implement getState() method.
        return $this->state;
    }
}