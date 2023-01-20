<?php
/*

https://stackoverflow.com/questions/445235/generating-random-results-by-weight-in-php

https://www.youtube.com/watch?v=_tN2ev3hO14

*/

function getRandomWeightedElement(array $weightedValues) 
{
    $rand = mt_rand(1, (int) array_sum($weightedValues)); 
    
    foreach ($weightedValues as $key => $value) 
    {
      $rand -= $value; 
      if ($rand <= 0) {
        return $key;
      }
    }
}




$data = [
    'toyota' => 100000,
    'mercedes' => 300000,
    'BMW' => 50000,
    'Hundai' => 10000,
    'caro' => 300,
];


$counters = [
    'toyota' => 0,
    'mercedes' => 0,
    'BMW' => 0,
    'Hundai' => 0,
    'caro' => 0,
];
for($i = 1; $i <= 1000; $i++)
{
    $car = getRandomWeightedElement($data);
    $counters[$car] += 1;
}

print_r($counters);

















// function randomBiased()
// {
//     $x = rand(0, 100);

//     if($x <= 10)
//     {
//         return rand(1,5);
//     }
//     else
//     {
//         return rand(6,10);
//     }
// }

// $counter = 0;
// for($i = 1; $i <= 1000; $i++)
// {
//     if(randomBiased() > 5)
//     {
//         $counter++;
//     }
// }

// echo "above 5 " . $counter . "\n";
// echo "below 5 " . (1000 - $counter) . "\n";

// echo randomBiased() . "\n";
// echo randomBiased() . "\n";
// echo randomBiased() . "\n";
// echo randomBiased() . "\n";
// echo randomBiased() . "\n";
// echo randomBiased() . "\n";
// echo randomBiased() . "\n";
// echo randomBiased() . "\n";
// echo randomBiased() . "\n";
// echo randomBiased() . "\n";
// echo randomBiased() . "\n";
// echo randomBiased() . "\n";
// echo randomBiased() . "\n";
// echo randomBiased() . "\n";
// echo randomBiased() . "\n";
// echo randomBiased() . "\n";
// echo randomBiased() . "\n";
// echo randomBiased() . "\n";
// echo randomBiased() . "\n";
// echo randomBiased() . "\n";
// echo randomBiased() . "\n";
// echo randomBiased() . "\n";
// echo randomBiased() . "\n";
// echo randomBiased() . "\n";
// echo randomBiased() . "\n";
// echo randomBiased() . "\n";
// echo randomBiased() . "\n";
// echo randomBiased() . "\n";

// echo rand(1,100) . "\n"; // mersenne twister
// echo mt_rand(1,100) . "\n"; // mersenne twister
// echo mt_rand(1,100) . "\n";
// echo mt_rand(1,100) . "\n";
// echo mt_rand(1,100) . "\n";