<?php

class Mem
{
    protected $buffer = [];

    public function __construct($firstItem = 0)
    {
        $this->buffer[] = $firstItem;
    }

    public function all()
    {
        return $this->buffer;
    }

    public function clear()
    {
        unset($this->buffer);
    }

    public function insert($item = 0)
    {
        $this->buffer[] = $item;
    }

    public function remove($index)
    {
        unset($this->buffer[$index]);
    }
}