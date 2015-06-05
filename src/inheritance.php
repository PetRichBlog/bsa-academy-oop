<?php

class Super {
    protected $storage;
    public function store(array $items) {
        $this->storage = $items;
        return $this;
    }
}

class SuperPuper extends Super {
    public function reorder() {
        sort($this->storage);
        return $this;
    }

    public function getStorage() { return $this->storage; }
}

$superPuper = (new SuperPuper())->store(array(3, 2, 1))->reorder();
var_dump($superPuper->getStorage());
