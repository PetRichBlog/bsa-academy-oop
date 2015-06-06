<?php
/**
 * Created by PhpStorm.
 * User: m1x0n
 * Date: 6/6/15
 * Time: 8:47 AM
 */

namespace Binary\Strategy;

interface ComparatorInterface
{
    public function compare($a, $b);
}