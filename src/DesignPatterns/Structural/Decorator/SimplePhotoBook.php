<?php 

namespace Application\DesignPatterns\Structural\Decorator;

class SimplePhotoBook implements BookInterface 
{

    private $title;

    private $description;

    private $price;

    public function __construct(string $title, string $description, int $price)
    {
        $this->title = $title;
        $this->description = $description;
        $this->price = $price;
    }

    public function getTitle()
    {
        return $this->title;
    }

    public function getDescription()
    {
        return $this->description;
    }

    public function getPrice()
    {
        return $this->price;
    }
}