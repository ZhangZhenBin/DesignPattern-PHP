<?php
/**
 * Created by PhpStorm.
 * User: zhang
 * Date: 18/1/26
 * Time: 下午11:19
 */

namespace behavior\Memento;


class Originator
{
    private $state;
    private $memento;
    function __construct()
    {
        $this->state   = '';
        $this->memento = 0;
    }

    function __construct1($state)
    {
        $this->state   = $state;
        $this->memento = 0;
    }

    function createMemento()
    {
        return new Memento($this->state);
    }

    /**
     * @return string
     */
    public function getState()
    {
        return $this->state;
    }

    /**
     * @param string $state
     */
    public function setState($state)
    {
        $this->state = $state;
    }

    public function printState()
    {
        echo "《".$this->state."》";
    }

    /**
     * @param int $memento
     */
    public function setMemento($memento)
    {
        $this->memento = $memento;
    }

    public function restoreToMemento($memento)
    {
        $this->state = $memento->getState();
    }
}


