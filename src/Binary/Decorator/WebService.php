<?php
/**
 * Created by PhpStorm.
 * User: m1x0n
 * Date: 6/6/15
 * Time: 8:05 AM
 */

namespace Binary\Decorator;


class Webservice implements RendererInterface
{
    /**
     * @var mixed
     */
    protected $data;
    /**
     * @param mixed $data
     */
    public function __construct($data)
    {
        $this->data = $data;
    }
    /**
     * @return string
     */
    public function renderData()
    {
        return $this->data;
    }
}