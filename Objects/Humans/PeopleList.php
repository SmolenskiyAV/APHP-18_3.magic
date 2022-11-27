<?php

namespace Objects\Humans;

class PeopleList implements \Iterator
{

    protected $storage = [];

    public function set($key, $val)
    {
        $this->storage[$key] = $val;
    }

    public function current()
    {
        return current($this->storage);
    }

    public function next()
    {
        next($this->storage);
    }

    public function key()
    {
        return key($this->storage);
    }

    public function valid()
    {
        return null !== key($this->storage);
    }

    public function rewind()
    {
        reset($this->storage);
    }
}