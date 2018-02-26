<?php
/**
 * Created by PhpStorm.
 * User: zhang
 * Date: 18/1/26
 * Time: 下午10:55
 */

namespace behavior\Observer;


class ConcreteObserverB extends Observer
{
    private $subject;
    function __construct($subject)
    {
        $this->subject = $subject;
        $this->subject->attach($this);
    }

    /**
     * @return mixed
     */
    public function getSubject()
    {
        return $this->subject;
    }

    public function printInfo()
    {
        // TODO: Implement printInfo() method.
        echo "《ConcreteObserverB observer》".$this->subject->getState();
    }

    public function update()
    {
        // TODO: Implement update() method.
        $this->subject->getState();
        $this->printInfo();
    }

    function __destruct()
    {
        // TODO: Implement __destruct() method.
        $this->subject->detach($this);
    }
}