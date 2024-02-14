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
        $algorithm = new Algorithms();
        $this->assertEquals('dbca',$algorithm->exchangeFirstAndLastCharsInString('abcd'));
        $this->assertEquals('a',$algorithm->exchangeFirstAndLastCharsInString('a'));
        $this->assertEquals('yx',$algorithm->exchangeFirstAndLastCharsInString('xy'));
    }

    public function testCopyPartOfString()
    {
        $algorithm = new Algorithms();
        $this->assertEquals('C C C C ',$algorithm->copyPartOfString('C Sharp'));
        $this->assertEquals('JSJSJSJS',$algorithm->copyPartOfString('JS'));
        $this->assertEquals('a',$algorithm->copyPartOfString('a'));
    }

    public function testFramingStringWithItsLastChar()
    {
        $algorithm = new Algorithms();
        $this->assertEquals('dRedd',$algorithm->addFramingStringWithItsLastChar('Red'));
        $this->assertEquals('nGreenn',$algorithm->addFramingStringWithItsLastChar('Green'));
        $this->assertEquals('111',$algorithm->addFramingStringWithItsLastChar('1'));
    }

    public function testCheckNumberIfMultipleOfThreeOrSeven()
    {
        $algorithm = new Algorithms();
        $this->assertEquals(true,$algorithm->checkNumberIfMultipleOfThreeOrSeven(3));
        $this->assertEquals(true,$algorithm->checkNumberIfMultipleOfThreeOrSeven(14));
        $this->assertEquals(true,$algorithm->checkNumberIfMultipleOfThreeOrSeven(12));
        $this->assertEquals(false,$algorithm->checkNumberIfMultipleOfThreeOrSeven(37));
    }
    
    public function testframingStringWithItsFirstThreeChars()
    {
        $algorithm = new Algorithms();
        $this->assertEquals('PytPythonPyt',$algorithm->framingStringWithItsFirstThreeChars('Python'));
        $this->assertEquals('JSJSJS',$algorithm->framingStringWithItsFirstThreeChars('JS'));
        $this->assertEquals('CodCodeCod',$algorithm->framingStringWithItsFirstThreeChars('Code'));
    }

    public function testCheckStringIsStartedWithCSharp()
    {
        $algorithm = new Algorithms();
        $this->assertEquals(false,$algorithm->checkStringIsStartedWithCSharp('PHP'));
        $this->assertEquals(true,$algorithm->checkStringIsStartedWithCSharp('C#'));
        $this->assertEquals(false,$algorithm->checkStringIsStartedWithCSharp('C++'));
    }

    public function testcheckTemperatures()
    {
        $algorithm = new Algorithms();
        $this->assertEquals(true,$algorithm->checkTemperatures(120,-1));
        $this->assertEquals(true,$algorithm->checkTemperatures(-1,120));
        $this->assertEquals(false,$algorithm->checkTemperatures(2,120));
    }
}