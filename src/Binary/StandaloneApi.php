<?php

namespace Binary;

class StandaloneApi {
    final public function generateRandomHash()
    {
        return dechex(mt_rand(0, 256)) . dechex(mt_rand(0, 128));
    }
}