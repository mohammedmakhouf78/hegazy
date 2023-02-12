<?php

$fruits1 = [
    10,
    'x'  =>  'red',
    'apple',
    'sharaf',
    'xx' => null,
];



echo array_search("asdfsadf", $fruits1) . "\n";
echo in_array("asdfdsaf", $fruits1) . "\n";















// $fruits1 = [
//     10,
//     'x'  =>  'red',
//     'apple',
//     'sharaf',
//     'xx' => null
// ];

// $fruits1 = array_flip($fruits1);


// print_r($fruits1);

// echo array_key_exists("sharaf", $fruits1) . "\n"; // o of 1



















// $fruits1 = ['banana','x'  =>  'red' , 'apple', 'sharaf', 'xx' => null];


// echo isset($fruits1['xx']) . "\n";
// echo array_key_exists('xx', $fruits1) . "\n";





























// echo "<h1>" . implode("<h1> <h1>",['ahmed','ali','ebrahim','adfdsa']) . "<h1>" . "\n";

























// $fruits1 = ['banana','x'  =>  'red' , 'apple', 'sharaf'];
// $fruits2 = ['wow', 'red', 'x' => 'ahmed'];


// $x = array_merge($fruits1, $fruits2);

// print_r($x);


















// $fruits = ['ali', 'mohammed', 'ahmed', 'ebrahim'];

// print_r($fruits);

// $result = array_splice($fruits, 1,2);

// print_r($result);














// $fruits = ['ali', 'mohammed', 'ahmed', 'ebrahim'];

// print_r($fruits);

// array_shift($fruits);
// array_shift($fruits);

// print_r($fruits);











// $fruits = ['ali', 'mohammed', 'ahmed', 'ebrahim'];

// print_r($fruits);

// unset($fruits[2]);

// print_r($fruits);























// $a = array("2", "4", "6", "a");
// echo "product(a) = " . array_product($a) . "\n";



















// $fruits = [
//     'names' => [
//         'ahmed',
//         'ali',
//         'ebrahim'
//     ],
//     'ages' => [
//         '20',
//         '15',
//         '30'
//     ]
// ];

// foreach($fruits as $key => $value)
// {
//     foreach($value as $item)
//     {
//         echo $item . "\n";
//     }
// }






















// $fruits ['white'][] = "sharaf";
// $fruits ['white'][] = "betengan";

// print_r($fruits);


















// $fruits = [ 
//     1 => "apple" ,
//     'ahmed',
//     "x" => "ali",
//     "ebrahim"
// ];

// print_r($fruits);











// $fruits = [ 
//     "first" => "apple" ,
//     'second' => 'ahmed'
// ];

// ["first" => $x1,"second" => $x2] = $fruits;


// echo $x1 . "\n";
// echo $x2 . "\n";






// $fruits = [ 
//     "first" => "apple" ,
//     'second' => 'ahmed'
// ];

// print_r($fruits);

// $fruits ["second"]= "banana";

// print_r($fruits);



// $fruits = [ "x" => "apple" ];

// print_r($fruits);

// $fruits []= "banana";

// print_r($fruits);