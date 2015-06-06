<?php
/**
 * Created by PhpStorm.
 * User: m1x0n
 * Date: 6/6/15
 * Time: 8:01 AM
 */

namespace Binary\Decorator;


class RenderInJson extends Decorator {
    public function renderData()
    {
        $output = $this->wrapped->renderData();
        return json_encode($output);
    }
}