<?php



$x = 1.0000000000000000000002;
$y = 1.0000000000000000000001;

$delta = 0.0000000001;

$z = abs($x - $y);

if($z <= $delta)
{
    echo "Yes";
}
else
{
    echo "No";
}

echo "\n";


















// $x = "100,100,100";
// $y = -1101651.1050e12;

// $x = str_replace(',','', $x);

// echo is_numeric($x);

// echo "\n";






// $numbers = [5, '5', '05', 12.3, '16.7', 'five', 0xDECAFBAD, '0x11111', 10e200];

// foreach ($numbers as $maybeNumber) 
// {
//     $isItNumeric = is_numeric($maybeNumber);
//     $actualType = gettype($maybeNumber);

//     print "Is the $actualType $maybeNumber numeric? ";
    
//     if (is_numeric($maybeNumber)) 
//     {
//         print "yes";
//     } 
//     else 
//     {
//         print "no";
//     }
//     print "\n";
// }





















// $x = "1.12345678910111213141516";
// $y = "1.12345678910111213141516";

// echo bcmul($x, $y,4); // 1.26215515697738074198746702216179658578427782560000
// echo "\n";





// $x = "1.12345678910111213141516";
// $y = "1.12345678910111213141516";

// echo bcmul($x, $y,50); // 1.26215515697738074198746702216179658578427782560000
// echo "\n";




// $x = 1.12345678910111213141516;
// $y = 1.12345678910111213141516;

// echo $x + $y; // 2.2469135782022
// echo "\n";





// $x = intval(6.999999999999999);

// echo $x;
// echo "\n";




// $x = 10;

// echo "10" . "10";
// echo "\n";






// $x = 10;

// echo "10" + "10";
// echo "\n";



// $x = 10;

// echo "10" + $x;
// echo "\n";





// $x = 10;

// echo "10asfsad" . $x;
// echo "\n";







// $x = 10;

// echo "asfsad" . $x;
// echo "\n";