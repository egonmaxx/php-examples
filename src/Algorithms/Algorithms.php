<?php 

namespace Application\Algorithms;

class Algorithms
{        
    /**
     * sumOfTwoInteger
     * 1. Write a PHP program to compute the sum of the two given integer values. If the two values are the same, then returns triple their sum.
     * Sample Input
     * 1, 2
     * 3, 2
     * 2, 2
     * Sample Output:
     * 3
     * 5
     * 12
     *
     * @param  int $firstInteger
     * @param  int $escondInteger
     * @return int
     */
    public function sumOfTwoInteger(int $firstInteger, int $escondInteger): int
    {
        if ($firstInteger == $escondInteger) {
            return ($firstInteger+$escondInteger)*3;
        } else {
            return $firstInteger+$escondInteger;
        }
    }
    
    /**
     * absuloteDifference
     * 
     * 2. Write a PHP program to get the absolute difference between n and 51. If n is greater than 51 return triple the absolute difference.
     * Sample Input:
     * 53
     * 30
     * 51
     * Sample Output:
     * 6
     * 21
     * 0
     *
     * @param  int $number
     * @return int
     */
    public function absuloteDifference(int $number): int
    {
        if ($number>51) {
            return abs($number-51)*3;
        } else {
            return abs($number-51);
        }
    }
    
    /**
     * checkInteger
     * 4. Write a PHP program to check a given integer and return true if it is within 10 of 100 or 200.
     * Sample Input:
     * 103
     * 90
     * 89
     * Sample Output:
     * bool(true)
     * bool(true)
     * bool(false)
     *
     * @param  mixed $integer
     * @return bool
     */
    public function checkInteger(int $integer): bool
    {
        if (abs(100-$integer) <= 10 | abs(200-$integer) <= 10)
        {
            return true;
        }

        return false;
    }
    
    /**
     * stringModifier
     * 5. Write a PHP program to create a new string where 'if' is added to the front of a given string. If the string already begins with 'if', return the string unchanged.
     * Sample Input:
     * "if else"
     * "else"
     * "if"
     * Sample Output:
     * if else
     * if else
     * if
     * @param  string $string
     * @return string
     */
    public function stringModifierIf(string $string): string
    {
        if (strpos($string,'if') === 0)
        {
            return $string;
        } else {
            return 'if '.$string;
        }
        
    }
    
    /**
     * stringModifierPython
     * 6. Write a PHP program to remove the character in a given position of a given string. The given position will be in the range 0..string length -1 inclusive.
     * Sample Input:
     * "Python", 1
     * "Python", 0
     * "Python", 4
     * Sample Output:
     * Pthon
     * ython
     * Pythn
     * @param  string $string
     * @param  int $postition
     * @return string
     */
    public function stringModifierRemoveCharByPosition(string $string, int $position): string
    {
        $char = substr($string,$position);
        $explode = explode($char[0],$string,2);

        return implode($explode);
        //alternate solution return substr($s, 0, $n) . substr($s, $n + 1, strlen($s) - $n);
    }
    
    /**
     * exchangeFirstAndLastCharsInString
     * 
     * 7. Write a PHP program to exchange the first and last characters in a given string and return the new string.
     * Sample Input:
     * "abcd"
     * "a"
     * "xy"
     * Sample output:
     * dbca
     * a
     * yx
     *
     * @param  mixed $string
     * @return string
     */
    public function exchangeFirstAndLastCharsInString(string $string): string
    {

        $length = strlen($string);
        if ( $length > 2) {
            $stringArray = str_split($string);
            $firstChar = $stringArray[0];
            $stringArray[0] = $stringArray[count($stringArray)-1];
            $stringArray[count($stringArray)-1] = $firstChar;
            $reversedString = implode($stringArray);
        } else {
            $reversedString = strrev($string);
        }

        return $reversedString;
    }
    
    /**
     * copyPartOfString
     * 
     * 8. Write a PHP program to create a new string which is 4 copies of the 2 front characters of a given string. If the given string length is less than 2 return the original string.
     * Sample Input:
     * "C Sharp"
     * "JS"
     * "a"
     * Sample Output:
     * C C C C
     * JSJSJSJS
     * a
     *
     * @param  string $string
     * @return string
     */
    public function copyPartOfString(string $string):string
    {
        if (strlen($string) > 1) {
            $string = substr($string,0,2);
            $string = $string.$string.$string.$string;
        }
        return $string;
    }
    
    /**
     * addFramingStringWithItsLastChar
     * 9. Write a PHP program to create a new string with the last char added at the front and back of a given string of length 1 or more.
     * Sample Input:
     * "Red"
     * "Green"
     * "1"
     * Sample Output:
     * dRedd
     * nGreenn
     * 111
     *
     * @param  string $string
     * @return string
     */
    public function addFramingStringWithItsLastChar(string $string):string
    {
        $lastChar = substr($string,-1);
        return $lastChar.$string.$lastChar;
    }
    
    /**
     * checkNumberIfMultipleOfThreeOrSeven
     * 
     * 10. Write a PHP program to check if a given positive number is a multiple of 3 or a multiple of 7.
     * Sample Input
     * 3
     * 14
     * 12
     * 37
     * Sample Output:
     * bool(true)
     * bool(true)
     * bool(true)
     * bool(false)
     *
     * @param  mixed $integer
     * @return int
     */
    public function checkNumberIfMultipleOfThreeOrSeven(int $integer):int
    {
        if ((($integer % 3) === 0) || (($integer % 7) === 0)) {
            return true;
        }

        return false;
    }
    
    /**
     * framingStringWithItsFirstThreeChars
     * 
     * 11. Write a PHP program to create a new string taking the first 3 characters of a given string and return the string with the 3 characters added at both the front and back. If the given string length is less than 3, use whatever characters are there.
     * Sample Input:
     * "Python"
     * "JS"
     * "Code"
     * Sample Output:
     * PytPythonPyt
     * JSJSJS
     * CodCodeCod
     *
     * @param  string $string
     * @return string
     */
    public function framingStringWithItsFirstThreeChars(string $string):string
    {
        if (strlen($string) >= 3) {
            $firstThreeChar = substr($string,0,3);
            return $firstThreeChar.$string.$firstThreeChar;
        } 
        
        return $string.$string.$string;
    }
    
    /**
     * checkStringIsStartedWithCSharp
     * 
     * 12. Write a PHP program to check if a given string starts with 'C#' or not.
     * Sample Input:
     * "PHP"
     * "C#"
     * "C++"
     * Sample Output:
     * bool(true)
     * bool(true)
     * bool(false)
     *
     * @param  mixed $string
     * @return bool
     */
    public function checkStringIsStartedWithCSharp(string $string): bool
    {
        if (substr($string,0,2) === 'C#') {
            return true;
        }
        return false;
    }
    
    /**
     * checkTemperatures
     *
     * 13. Write a PHP program to check if one given temperatures is less than 0 and the other is greater than 100.
     * Sample Input:
     * 120, -1
     * -1, 120
     * 2, 120
     * Sample Output:
     * bool(true)
     * bool(true)
     * bool(false)
     * @param  int $temperatureFirst
     * @param  int $temperatureSecond
     * @return bool
     */
    public function checkTemperatures(int $temperatureFirst, int $temperatureSecond):bool
    {
        if ($temperatureFirst > $temperatureSecond && $temperatureFirst > 100 && $temperatureSecond < 0)
        {
            return true;
        } else if ($temperatureFirst < $temperatureSecond && $temperatureFirst < 0 && $temperatureSecond > 100) {
            return true;
        }
        return false;
    }
}