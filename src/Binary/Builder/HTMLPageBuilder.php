<?php
/**
 * Created by PhpStorm.
 * User: m1x0n
 * Date: 6/6/15
 * Time: 8:26 AM
 */

namespace Binary\Builder;

class HTMLPageBuilder extends AbstractPageBuilder {
    private $page = null;
    public function __construct() {
        $this->page = new HTMLPage();
    }
    public function setTitle($title_in) {
        $this->page->setTitle($title_in);
    }
    public function setHeading($heading_in) {
        $this->page->setHeading($heading_in);
    }
    public function setText($text_in) {
        $this->page->setText($text_in);
    }
    public function formatPage() {
        $this->page->formatPage();
    }
    public function getPage() {
        return $this->page;
    }
}