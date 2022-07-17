<?php

class Cart
{
    private $items = [];

    public function add($item)
    {
        $this->items[] = $item;
    }

    public function remove($item)
    {
        
    }

    public function getTotal($discount = 0)
    {
        
    }

    public function getProducts()
    {
        
    }

}