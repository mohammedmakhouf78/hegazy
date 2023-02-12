<?php


$fruits = [
    'names' => [
        'ahmed',
        'ali',
        'ebrahim'
    ],
    'ages' => [
        '20',
        '15',
        '30'
    ]
];

foreach($fruits as $key => $value)
{
    foreach($value as $item)
    {
        echo $item . "\n";
    }
}
