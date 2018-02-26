<?php
/**
 * Created by PhpStorm.
 * User: zhang
 * Date: 18/1/24
 * Time: 下午10:45
 */

namespace structure\Composite;


class Item extends Component
{
    protected $name;
    protected $url;

    function __construct($name,$url)
    {
        $this->name = $name;
        $this->url  = $url;
    }

    public function operation()
    {
        echo '《'.$this->name.':'.$this->url.'》';
    }

}