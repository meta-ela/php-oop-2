<?php
require_once __DIR__ . "/Products.php";


class Aliments extends Products
{
    private $ingredients;
    private $expire;

    public function __construct($_name, $_price, $_ingredients, $_expire)
    {
        parent::__construct($_name, $_price);

        $this->setIngredients($_ingredients);
        $this->setExpire($_expire);
    }

    /**
     * Get the value of ingredients
     */ 
    public function getIngredients()
    {
        return $this->ingredients;
    }

    /**
     * Set the value of ingredients
     *
     * @return  self
     */ 
    public function setIngredients($ingredients)
    {
        $this->ingredients = $ingredients;

        return $this;
    }

    /**
     * Get the value of expire
     */ 
    public function getExpire()
    {
        return $this->expire;
    }

    /**
     * Set the value of expire
     *
     * @return  self
     */ 
    public function setExpire($expire)
    {
        $this->expire = $expire;

        return $this;
    }
}