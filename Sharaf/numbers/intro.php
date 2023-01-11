<?php

$numbers = [5, '5', '05', 12.3, '16.7'];
// var_dump($numbers);

$numbers_2 = ['five', 'one', '0x11111', 0xDECAFBAD];
// var_dump($numbers_2);

$numbersOfforeach = [5, '5', '05', 12.3, '16.7', 'five', 0xDECAFBAD, '0x11111', 10e200];

foreach ($numbersOfforeach as $number) {

    if (is_numeric($number)) {
        echo var_export($number, true) . "  Is Numeric ", PHP_EOL;
    } else {
        echo var_export($number, true) . "  Is Not Numeric ", PHP_EOL;
    }
}