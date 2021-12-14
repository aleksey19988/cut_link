<?php

function tokenGenerator(int $min = 5, int $max = 10):string
{
    $alphabet = range('a', 'z');
    $length = rand($min, $max);
    $result = '';
    for ($i = 0; $i < $length; $i++) {
        $result .= $alphabet[rand(0, (count($alphabet) - 1))];
    }
    return $result;
}