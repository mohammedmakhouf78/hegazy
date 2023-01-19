<?php

$ads = array('ford' => 12234,
'att' => 33424,
'ibm' => 16823);

function rand_weighted($numbers)
{
    $total = 0;
    $distributions = [];
    foreach($numbers as $key => $weight)
    {
        $total += $weight;
        $distributions[$key] = $total;
    }

    $rand = rand(0, $total - 1);

    foreach($distributions as $key => $weight)
    {
        if($rand < $weight)
        {
            return $key;
        }
    }
}

echo rand_weighted($ads) . "\n";
echo rand_weighted($ads) . "\n";
echo rand_weighted($ads) . "\n";
echo rand_weighted($ads) . "\n";