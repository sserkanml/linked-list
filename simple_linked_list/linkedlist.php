<?php

require_once "items.php";


class LinkedList
{
    protected $items=array();
    public $first;
    public $last=null;

    public function append($key, $value)
    {
        $item=new Item($value, $key);
        $this->items[]=$item;

        if ($this->last) {
            $this->last->next = $item;
        }
        $this->last = $item;

        if ($this->first === null) {
            $this->first = $item;
        }
        return $this;
    }

    public function prepend($key, $value)
    {
        $item = new Item($key, $value);
        array_unshift($this->items, $item);

        if ($this->first) {
            $item->next = $this->first;
        }
        $this->first = $item;

        if ($this->last === null) {
            $this->last = $item;
        }
        return $this;
    }
}
