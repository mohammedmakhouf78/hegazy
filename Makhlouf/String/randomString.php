<?php

// declare(strict_types = 1);

$x = "hiL7"; // 4
$x = "szdbpadO"; // 8

echo str_rand(50, "mohammed_sharaf");
echo "\n";

function str_rand(int $lengh ,$chars = "0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ")
{
    $charsLength = strlen($chars) - 1;

    $answer = "";

    for($i = 1; $i <= $lengh; $i++)
    {
        $answer .= $chars[rand(0, $charsLength)];
    }
    return $answer;
}