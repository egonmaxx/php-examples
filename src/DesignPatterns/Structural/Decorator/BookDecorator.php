<?php 
namespace Application\DesignPatterns\Structural\Decorator;
use Application\DesignPatterns\Structural\Decorator\BookInterface;

abstract class BookDecorator implements BookInterface
{
    protected $decoratedBook;

    public function __construct(BookInterface $decoratedBook)
    {
        $this->decoratedBook = $decoratedBook;
    }
}