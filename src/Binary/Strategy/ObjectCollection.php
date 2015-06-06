<?php
/**
 * Created by PhpStorm.
 * User: m1x0n
 * Date: 6/6/15
 * Time: 8:45 AM
 */

namespace Binary\Strategy;


class ObjectCollection {

    private $elements;

    private $comparator;

    public function __construct(array $elements = array())
    {
        $this->elements = $elements;
    }

    public function sort()
    {
        if (!$this->comparator) {
            throw new \LogicException("Comparator is not set");
        }
        $callback = array($this->comparator, 'compare');
        uasort($this->elements, $callback);
        return $this->elements;
    }

    public function setComparator(ComparatorInterface $comparator)
    {
        $this->comparator = $comparator;
    }
}