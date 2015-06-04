<?php
namespace Binary;

class Counter {
    public static $count = 0;

    public static function increment()
    {
        ++self::$count;
    }

    public static function decrement()
    {
        --self::$count;
    }

    public static function reset()
    {
        self::$count = 0;
    }
}