<?php
/**
 * Created by PhpStorm.
 * User: m1x0n
 * Date: 6/6/15
 * Time: 8:27 AM
 */

namespace Binary\Builder;


class HTMLPageDirector extends AbstractPageDirector {
    private $builder = NULL;
    public function __construct(AbstractPageBuilder $builder_in) {
        $this->builder = $builder_in;
    }
    public function buildPage() {
        $this->builder->setTitle('Title');
        $this->builder->setHeading('Head');
        $this->builder->setText('One');
        $this->builder->setText('Two');
        $this->builder->setText('Three');
        $this->builder->formatPage();
    }
    public function getPage() {
        return $this->builder->getPage();
    }
}