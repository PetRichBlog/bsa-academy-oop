<?php
/**
 * Created by PhpStorm.
 * User: m1x0n
 * Date: 6/6/15
 * Time: 7:34 AM
 */

namespace Binary\FactoryMethod\Computers;


class OptiPlex extends Desktop {
    function __construct()
    {
        $this->name = 'OptiPlex';
    }

    public function getName()
    {
        return $this->name;
    }
}