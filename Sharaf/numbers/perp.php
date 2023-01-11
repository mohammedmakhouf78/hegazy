<?php



$numbers = [
    4,
    '5',
    '05',
    12.6,
    '5,67',
    'five',
    0xDECAFBAD,
    '10e300',
];


foreach ($numbers as $number) {
    $isItNumbers = is_numeric($number);
    $actuallyType = gettype($number);

    echo " Is the $isItNumbers =  $actuallyType numeric ?";

    if (is_numeric($number)) {
        echo "Yes the Numeric";
    } else {
        echo "NO the Numeric";
    }

    echo "\n";
}