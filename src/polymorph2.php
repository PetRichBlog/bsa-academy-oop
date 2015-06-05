<?php

class Overload {
    public function action()
    {
        switch(func_num_args()) {
            case 0:
                return __METHOD__;
                break;
            case 1:
                return $this->_actionOne(func_get_arg(0));
                break;
            case 2:
                return $this->_actionTwo(func_get_arg(0), func_get_arg(1));
                break;
        }
    }

    private function _actionOne($a)
    {
        return __METHOD__;
    }

    private function _actionTwo($a, $b)
    {
        return __METHOD__;
    }
}

$test = new Overload();
echo $test->action() . PHP_EOL;
echo $test->action(1) . PHP_EOL;
echo $test->action(1, 2) . PHP_EOL;