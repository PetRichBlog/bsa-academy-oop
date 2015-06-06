<?php

namespace Binary\Strategy;

class IntComparator implements ComparatorInterface {

    public function compare($a, $b)
    {
        return $a - $b;
    }
}