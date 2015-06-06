<?php


namespace Binary\AbstractFactory\Books;


class OReillyPHPBook extends AbstractPHPBook {
    private $author;
    private $title;

    function __construct()
    {
        $this->author = 'Rasmus Lerdorf and Kevin Tatroe';
        $this->title = 'Programming PHP';
    }

    public function getAuthor() {
        return $this->author;
    }

    public function getTitle() {
        return $this->title;
    }
}