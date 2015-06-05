<?php

function combine($a, $b) {
    if (is_numeric($a) && is_numeric($b)) {
        return $a + $b;
    }

    if (is_string($a) && is_string($b))  {
        return "$a$b";
    }

    if (is_array($a) && is_array($b)) {
        return array_merge($a, $b);
    }

    if (is_bool($a) && is_bool($b)) {
        return $a & $b;
    }

    return false;
}

echo combine(2, 2) . PHP_EOL;
echo combine('abc', 'def') . PHP_EOL;
var_dump(combine(array(1, 2, 3), array(4, 5, 6)));
var_dump(combine(true, true));