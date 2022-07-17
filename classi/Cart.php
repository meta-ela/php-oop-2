<?php

class Cart
{
    private $products = [];

    public function add($products)
    {
        $this->products[] = $products;
    }

    public function remove($product)
    {
        
    }

    public function getTotal($discount = 0)
    {
        $total = 0;

        foreach ($this->products as $product) {
            $total += $product->getPrice(); 
        }
    }

    public function getProducts()
    {
        return $this->products;
    }

}