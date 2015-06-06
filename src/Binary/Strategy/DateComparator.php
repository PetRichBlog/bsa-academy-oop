<?php
/**
 * Created by PhpStorm.
 * User: m1x0n
 * Date: 6/6/15
 * Time: 8:48 AM
 */

namespace Binary\Strategy;


class DateComparator implements ComparatorInterface {

    public function compare($a, $b)
    {
        return (new \DateTime($a)) > (new \DateTime($b));
    }
}