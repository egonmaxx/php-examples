<?php 

namespace Application\DesignPatterns\Structural\Decorator;

class HardCoverPhotoBook extends BookDecorator
{

    public function getTitle()
    {
        return $this->decoratedBook->getTitle().' + hc';
    }
    public function getDescription()
    {
        return $this->decoratedBook->getDescription().' with hard cover.';
    }

    public function getPrice()
    {
        return $this->decoratedBook->getPrice()+10;
    }
}