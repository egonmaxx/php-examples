<?php 

namespace Application\DesignPatterns\Structural\Decorator;

class ExtendedPhotoBook extends BookDecorator
{
    public function getTitle()
    {
        return $this->decoratedBook->getTitle().' +10p';
    }

    public function getDescription()
    {
        return $this->decoratedBook->getDescription().' extended with plus 10 pages';
    }

    public function getPrice()
    {
        return $this->decoratedBook->getPrice()+25;
    }
}