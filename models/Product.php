<?php

class Product
{
    private $id;
    private $name;
    private $price;
    private $description;
    private $rating;
    private $inStock;
    private $imagePath;

    public function __construct($id, $name, $price, $description, $rating, $inStock, $imagePath)
    {
        $this->id = $id;
        $this->name = $name;
        $this->price = $price;
        $this->description = $description;
        $this->rating = $rating;
        $this->inStock = $inStock;
        $this->imagePath = $imagePath;
    }

    public function getId()
    {
        return $this->id;
    }

    public function getName()
    {
        return $this->name;
    }

    public function getPrice()
    {
        return $this->price;
    }

    public function getDescription()
    {
        return $this->description;
    }

    public function getRating()
    {
        return $this->rating;
    }

    public function getInStock()
    {
        return $this->inStock;
    }

    public function getImagePath()
    {
        return $this->imagePath;
    }
}
