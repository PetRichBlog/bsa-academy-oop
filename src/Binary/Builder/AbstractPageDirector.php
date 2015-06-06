<?php
/**
 * Created by PhpStorm.
 * User: m1x0n
 * Date: 6/6/15
 * Time: 8:24 AM
 */

namespace Binary\Builder;


abstract class AbstractPageDirector {
    abstract public function __construct(AbstractPageBuilder $builder_in);
    abstract public function buildPage();
    abstract public function getPage();
}