<?php

echo base_convert("110111100", 2, 16) . "\n";

echo chr(bindec("01000101")) . "\n";

$hex = 0x10abc;
$bin = 0b111;
$oct = 020;
$E = 0b01000101;

echo sprintf("hello my name is %s %d %b \n" , "ali" ,$hex, $hex);
echo sprintf("hello %d \n" , $bin);
echo sprintf("hello %d \n" , $oct);
echo sprintf("hello %c \n" , $E);