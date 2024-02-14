<?php

use Application\DesignPatterns\Structural\Decorator\ExtendedPhotoBook;
use Application\DesignPatterns\Structural\Decorator\HardCoverPhotoBook;
use Application\DesignPatterns\Structural\Decorator\SimplePhotoBook;
use PHPUnit\Framework\TestCase;

class DecoratorPatternTest extends TestCase
{
    public function testSimplePhotoBook()
    {
        $simplePhotoBook = new SimplePhotoBook('PhotoBook','This is a photobook',5);
        $this->assertEquals('PhotoBook',$simplePhotoBook->getTitle());
        $this->assertEquals('This is a photobook',$simplePhotoBook->getDescription());
        $this->assertEquals(5,$simplePhotoBook->getPrice());
    }

    public function testHardCoverPhotoBook()
    {
        $simplePhotoBook = new SimplePhotoBook('PhotoBook','This is a photobook',5);
        $hardCoverPhotoBook = new HardCoverPhotoBook($simplePhotoBook);
        $this->assertEquals('PhotoBook + hc',$hardCoverPhotoBook->getTitle());
        $this->assertEquals('This is a photobook with hard cover.',$hardCoverPhotoBook->getDescription());
        $this->assertEquals(15,$hardCoverPhotoBook->getPrice());
    }

    public function testExtendedHardCoverPhotobook()
    {
        $simplePhotoBook = new SimplePhotoBook('PhotoBook','This is a photobook',5);
        $hardCoverPhotoBook = new HardCoverPhotoBook($simplePhotoBook);
        $extendedPhotoBook = new ExtendedPhotoBook($hardCoverPhotoBook);
        $this->assertEquals('PhotoBook + hc +10p',$extendedPhotoBook->getTitle());
        $this->assertEquals('This is a photobook with hard cover. extended with plus 10 pages',$extendedPhotoBook->getDescription());
        $this->assertEquals(40,$extendedPhotoBook->getPrice());
    }
}