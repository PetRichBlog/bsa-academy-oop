<?php
/**
 * Created by PhpStorm.
 * User: m1x0n
 * Date: 6/6/15
 * Time: 8:25 AM
 */

namespace Binary\Builder;


class HTMLPage {
    private $page = null;
    private $page_title = null;
    private $page_heading = null;
    private $page_text = null;

    public function showPage() {
        return $this->page;
    }

    public function setTitle($title_in) {
        $this->page_title = $title_in;
    }

    public function setHeading($heading_in) {
        $this->page_heading = $heading_in;
    }

    public function setText($text_in) {
        $this->page_text .= $text_in;
    }

    public function formatPage() {
        $this->page  = '<html>';
        $this->page .= '<head><title>'.$this->page_title.'</title></head>';
        $this->page .= '<body>';
        $this->page .= '<h1>'.$this->page_heading.'</h1>';
        $this->page .= $this->page_text;
        $this->page .= '</body>';
        $this->page .= '</html>';
    }
}