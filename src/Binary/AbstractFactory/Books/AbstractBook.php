<?php

namespace Binary\AbstractFactory\Books;

abstract class AbstractBook {
    abstract public function getAuthor();
    abstract public function getTitle();
}