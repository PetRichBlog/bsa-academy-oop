<?php

namespace Binary\AbstractFactory;

use Binary\AbstractFactory\Books\OReillyMySQLBook;
use Binary\AbstractFactory\Books\OReillyPHPBook;

class OReilyBookFactory extends AbstractBookFactory {
    private $context = "OReilly";

    public function makePHPBook() {
        return new OReillyPHPBook;
    }
    public function makeMySQLBook() {
        return new OReillyMySQLBook;
    }
}