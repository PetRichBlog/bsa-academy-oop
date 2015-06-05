<?php

interface Pagination {
    const RECORDS_PER_CHUNK = 10;
    public function getChunk($offset, $limit = Pagination::RECORDS_PER_CHUNK);
}

class DataStorage implements Pagination {

    private $data = [
        ['name' => 'John', 'age' => 20],
        ['name' => 'Jill', 'age' => 28],
        ['name' => 'Jane', 'age' => 22],
        ['name' => 'James', 'age' => 21],
        ['name' => 'Jason', 'age' => 18],
        ['name' => 'Juli', 'age' => 24],
    ];

    public function getChunk($offset, $limit = Pagination::RECORDS_PER_CHUNK)
    {
        return array_slice($this->data, $offset ,$limit);
    }
}

var_dump((new DataStorage())->getChunk(0, 2));