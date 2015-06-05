<?php

namespace Binary;

class Singleton
{
    public static function getInstance()
    {
        static $instance = null;

        if (null === $instance) {
            $instance = new static();
        }

        return $instance;
    }

    /**
     * prevent instance via 'new'
     */
    protected function __construct() {}

    /**
     * prevent the instance from being cloned
     *
     * @return void
     */
    private function __clone() {}

    /**
     * prevent from being unserialized
     *
     * @return void
     */
    private function __wakeup() {}
}
