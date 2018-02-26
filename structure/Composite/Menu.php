<?php
/**
 * Created by PhpStorm.
 * User: zhang
 * Date: 18/1/24
 * Time: 下午10:27
 */

namespace structure\Composite;


class Menu extends Component
{
    protected $items =array();
    protected $name  =null;

    function __construct($name)
    {
        $this->name=$name;
    }

    public function add($component)
    {
        $this->items[] = $component;
    }

    public function remove($component)
    {
        $key=array_search($component,$this->items);
        if($key!==false)
        {
            unset($this->items[$key]);
        }
    }

    public function getChild($key)
    {
        if(array_key_exists($key,$this->items)){
            return $this->items[$key];
        }
        return null;
    }

    public function operation()
    {
        echo  "《".$this->name."》->";
        foreach($this->items as $item)
        {
            $item->operation();
        }
    }


}