<?php

include "StorageInterface.php";

class Mem implements StorageInterface
{
    private $type;
    // private $prototype;
    protected $buffer = [];

    public function __construct($item = 0)
    {
        // $this->prototype = $item;
        $this->type = gettype($item);
        $this->buffer[] = $item;
    }

    public function readAll()
    {
        return $this->buffer;
    }

    public function clear()
    {
        unset($this->buffer);
    }

    public function create($item = 0)
    {
        $this->buffer[] = $item;
    }

    public function delete($index)
    {
        unset($this->buffer[$index]);
    }

    public function count()
    {
        return count($this->buffer);
    }

    public function read($id)
    {
        // return $this->prototype->search($id, $this->buffer);
        return $this->buffer[$id];
    }

    public function update($id, $values)
    {
        $this->buffer[$id] = $values;
    }
}