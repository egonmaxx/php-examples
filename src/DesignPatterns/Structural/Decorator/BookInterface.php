<?php 
namespace Application\DesignPatterns\Structural\Decorator;

interface BookInterface
{
    public function getTitle();
    public function getDescription();
    public function getPrice();
}