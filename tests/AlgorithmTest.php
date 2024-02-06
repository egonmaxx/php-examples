<?php 

use PHPUnit\Framework\TestCase;
use Application\Algorithms\Algorithms;

final class AlgorithmTest extends TestCase
{
    public function testSum()
    {
        $algorithmOne = new Algorithms();

        $result = $algorithmOne->sumOfTwoInteger(2,2);
        $this->assertEquals(12,$result);
        $result = $algorithmOne->sumOfTwoInteger(2,3);
        $this->assertEquals(5,$result);
    }

    public function testAbs()
    {
        $algorithmOne = new Algorithms();

        $result = $algorithmOne->absuloteDifference(53);
        $this->assertEquals(6,$result);
        $result = $algorithmOne->absuloteDifference(30);
        $this->assertEquals(21,$result);
        $result = $algorithmOne->absuloteDifference(51);
        $this->assertEquals(0,$result);
    }

    public function testCheckInteger()
    {
        $algorithm = new Algorithms();

        $result = $algorithm->checkInteger(100);
        $this->assertEquals(true,$result);
        $result = $algorithm->checkInteger(90);
        $this->assertEquals(true,$result);
        $result = $algorithm->checkInteger(89);
        $this->assertEquals(false,$result);
    }

    public function testStringModifierIf()
    {
        $algorithm = new Algorithms();
        $this->assertEquals('if else',$algorithm->stringModifierIf('if else'));
        $this->assertEquals('if else',$algorithm->stringModifierIf('else'));
        $this->assertEquals('if',$algorithm->stringModifierIf('if'));
    }

    public function testStringModifierRemoveCharByPosition()
    {
        $algorithm = new Algorithms();
        $this->assertEquals('Pthon',$algorithm->stringModifierRemoveCharByPosition("Python", 1));
        $this->assertEquals('ython',$algorithm->stringModifierRemoveCharByPosition("Python", 0));
        $this->assertEquals('Pythn',$algorithm->stringModifierRemoveCharByPosition("Python", 4));
    }

    public function testExchangeFirstAndLastCharsInString()
    {
        $algorith = new Algorithms();
        $this->assertEquals('dbca',$algorith->exchangeFirstAndLastCharsInString('abcd'));
        $this->assertEquals('a',$algorith->exchangeFirstAndLastCharsInString('a'));
        $this->assertEquals('yx',$algorith->exchangeFirstAndLastCharsInString('xy'));
    }

    public function testCopyPartOfString()
    {
        $algorithm = new Algorithms();
        $this->assertEquals('C C C C ',$algorithm->copyPartOfString('C Sharp'));
        $this->assertEquals('JSJSJSJS',$algorithm->copyPartOfString('JS'));
        $this->assertEquals('a',$algorithm->copyPartOfString('a'));
    }
}