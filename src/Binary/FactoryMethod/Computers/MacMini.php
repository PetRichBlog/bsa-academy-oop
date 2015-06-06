<?php
/**
 * Created by PhpStorm.
 * User: m1x0n
 * Date: 6/6/15
 * Time: 7:33 AM
 */

namespace Binary\FactoryMethod\Computers;


class MacMini extends Desktop {
    function __construct()
    {
        $this->name = 'Mac Mini';
    }

    public function getName()
    {
        return $this->name;
    }
}