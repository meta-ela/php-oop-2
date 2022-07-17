<?php
require_once __DIR__ . "/Products.php";

class Games extends Products
{
    private $material;
    private $color;

    public function __construct($_name, $_price, $_material, $_color)
    {
        parent::__construct($_name, $_price);

        $this->setMaterial($_material);
        $this->setColor($_color);
    }

    /**
     * Get the value of material
     */ 
    public function getMaterial()
    {
        return $this->material;
    }

    /**
     * Set the value of material
     *
     * @return  self
     */ 
    public function setMaterial($material)
    {
        $this->material = $material;

        return $this;
    }

    /**
     * Get the value of color
     */ 
    public function getColor()
    {
        return $this->color;
    }

    /**
     * Set the value of color
     *
     * @return  self
     */ 
    public function setColor($color)
    {
        $this->color = $color;

        return $this;
    }
}