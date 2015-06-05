<?php

namespace Binary;

class Logger extends Singleton {
    public function log($msg) {
        echo "[" . (new \DateTime())->format('Y-m-d H:i:s') . "] {$msg}" . PHP_EOL;
    }
}