<?php

namespace Binary\AbstractFactory\Books;


class SamsPHPBook extends AbstractPHPBook {
    private $author;
    private $title;
    function __construct() {
        $this->author = 'George Schlossnagle';
        $this->title = 'Advanced PHP Programming';
    }
    public function getAuthor() {
        return $this->author;
    }
    public function getTitle() {
        return $this->title;
    }
}