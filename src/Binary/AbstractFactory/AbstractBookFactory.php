<?php

namespace Binary\AbstractFactory;


abstract class AbstractBookFactory {
    abstract public function makePHPBook();
    abstract public function makeMySQLBook();
}