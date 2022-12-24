<?php


//using that string ellipsis(...) it from the middle

$str = "my name is mohammed sharaf iam a good person and i like to eat chikens grill";

$lengthStr = strlen($str);
$countMiddleString = intval($lengthStr / 2);

// string before the middle
$result = substr($str, 0, $countMiddleString);
echo $result;
echo '<br>';

// string after the middle
$result = substr($str, $countMiddleString);
echo $result;
echo '<br>';


echo '<br>';
echo '<br>';
echo '<br>';
#------------------------------------------------------
#------------------------------------------------------
#------------------------------------------------------

//using that string count how many (a) and how many (o) and how many (m)
$str = "my name is mohammed sharaf iam a good person and i like to eat chikens grill";



function search_count_chars($str, ...$chars)
{
    $lengthArry = count($chars) - 1;
    for ($x = 0; $x <= $lengthArry; $x++) {

        $count = 0;
        $countStr = strlen($str);

        for ($i = 0; $i < $countStr; $i++) {
            if (substr($str, $i, 1) == $chars[$x]) {
                $count = $count + 1;
            }
        }

        echo 'chars ' . $chars[$x] . ' Repeat ' . $count . ' times in the string' . '<br>';
    }
}
echo search_count_chars($str, 'a', 'o', 'm', 'z');

echo "------------------------------------------";
echo "<br>";


function exampleTwosearch_count_chars($str, ...$chars)
{
    $lengthArry = count($chars) - 1;
    for ($x = 0; $x <= $lengthArry; $x++) {
        $count = substr_count($str, $chars[$x]);
        echo 'chars ' . $chars[$x] . ' Repeat ' . $count . ' times in the string' . '<br>';
    }
}
echo exampleTwosearch_count_chars($str, 'a', 'o', 'm', 'z');


echo '<br>';
echo '<br>';
echo '<br>';
#------------------------------------------------------
#------------------------------------------------------
#------------------------------------------------------

//using that string reverse the string letters (using loops)
//llirg snekihc
$str = "my name is mohammed sharaf iam a good person and i like to eat chikens grill";




$lengthStr = strlen($str);
for ($i = ($lengthStr - 1); $i >= 0; $i--) {
    echo "$str[$i]";
}


echo '<br>';
echo '<br>';
echo '<br>';
#------------------------------------------------------
#------------------------------------------------------
#------------------------------------------------------


#------------------------------------------------------
#------------------------------------------------------
#------------------------------------------------------

//using that string reverse the string words
//grill chickens eat to like i and
$str = "my name is mohammed sharaf iam a good person and i like to eat chikens grill";

// echo strrev($str) . '<br>' . '<br>';

$result = implode(' ', array_reverse(explode(' ', $str)));
echo $result;

echo '<br>';
echo '<br>';


// $lengthStr = strlen($str);
// for ($i = ($lengthStr - 1); $i >= 0; $i--) {
//     echo "$str[$i]";
// }

// $array = str_split($str);
// print_r(explode(' ',$str));