<?php

interface StorageInterface
{
    public function count();
    public function create($item);
    public function read($id);
    public function readAll();
    public function update($id, $values);
    public function delete($id);
}