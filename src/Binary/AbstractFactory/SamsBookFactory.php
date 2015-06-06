<?php

namespace Binary\AbstractFactory;

use Binary\AbstractFactory\Books\SamsMySQLBook;
use Binary\AbstractFactory\Books\SamsPHPBook;

class SamsBookFactory extends AbstractBookFactory {
    private $context = "Sams";
    public function makePHPBook() {
        return new SamsPHPBook;
    }
    public function makeMySQLBook() {
        return new SamsMySQLBook;
    }
}