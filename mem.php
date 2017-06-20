<?php

include "persistence_interface.php";

class Mem implements PersistenceInterface
{
    protected $buffer = [];

    public function __construct($firstItem = 0)
    {
        $this->buffer[] = $firstItem;
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
        return $this->buffer[$id];
    }

    public function update($id, $values)
    {
        $this->buffer[$id] = $values;
    }
}