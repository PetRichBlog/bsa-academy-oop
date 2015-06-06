<?php


namespace Binary\AbstractFactory\Books;


class SamsMySQLBook extends AbstractMySQLBook {
    private $author;
    private $title;
    function __construct() {
        $this->author = 'Paul Dubois';
        $this->title = 'MySQL, 3rd Edition';
    }
    public function getAuthor() {
        return $this->author;
    }
    public function getTitle() {
        return $this->title;
    }
}