<?php

Class Test
{
    public $test;
    public function __construct()
    {
        $this->test = 'test';
    }

    // function that tests string is anagram
    public function isAnagram($str1, $str2)
    {
        $str1 = str_replace(' ', '', $str1);
        $str2 = str_replace(' ', '', $str2);
        $str1 = strtolower($str1);
        $str2 = strtolower($str2);
        if (count_chars($str1, 1) == count_chars($str2, 1)) {
            return true;
        } else {
            return false;
        }
    }
}

