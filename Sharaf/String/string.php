<?php


/*********************** */
/* Task 1 */
/*********************** */
$name = "mohammedmakhlouf78";
$strle = intval(strlen($name) / 2);
// echo substr($name, $strle);
echo "\n";
//get from the middle to the end

/*********************** */
/* Task 1 */
/*********************** */



/*********************** */
/* Task 2 */
/*********************** */
$name = "mohammedmakhlouf78";
$strle = strlen($name) / 2;
// echo substr($name, 0, -$strle);
echo "\n";
//get from the start to the middle

/*********************** */
/* Task 2 */
/*********************** */





/*********************** */
/* Task 3 */
/*********************** */
$name = "mohammedmakhlouf78";
// echo substr($name, -5);
// echo "\n";
//get the last 5 letters

/*********************** */
/* Task 3 */
/*********************** */



/*********************** */
/* Task 4 */
/*********************** */
$dsec = "hello my name is mohammed and i love cats and my email is alimakhlouf@gmail.com";
$substr = substr($dsec, -20);
$strpos = strpos($substr, '@');
// if (strpos($substr, '@') === false) {
//     echo "No exist @ \n";
// } else {
//     echo "Yes exist @ \n";
// }
// echo "\n";
// get the last 20 letters of the string and check if they are a valid email
/*********************** */
/* Task 4 */
/*********************** */



/*********************** */
/* Task 5 */
/*********************** */

$name = "mohame";
$strle = strlen($name) / 2;
// echo substr($name, -$strle - 1, 3);
// echo "\n";
// get 3 letters from the middle

/*********************** */
/* Task 5 */
/*********************** */



/*********************** */
/* Task 7 */
/*********************** */
//using that string ellipsis(...) it from the middle

$str = "mohaemd emad";

$strlen = intval(strlen($str) / 2);
$ellipsis = substr_replace($str, "...", $strlen);
// echo $ellipsis;
// echo "\n";
/*********************** */
/* Task 7 */
/*********************** */




/*********************** */
/* Task 8 */
/*********************** */

//using that string count how many (a) and how many (o) and how many (m)
$str = "my name is mohammed sharaf iam a good person and i like to eat chikens grill";

// echo substr_count($str, "a");
// echo "\n";
// echo substr_count($str, "o");
// echo "\n";
// echo substr_count($str, "m");
// echo "\n";

/*********************** */
/* Task 8 */
/*********************** */




/*********************** */
/* Task 9 */
/*********************** */
//using that string reverse the string letters (using loops)
$str = "my name is mohammed sharaf iam a good person and i like to eat chikens grill";

// echo strrev($str);
// echo "\n";
/*********************** */
/* Task 9 */
/*********************** */



/*********************** */
/* Task 10 */
/*********************** */
//using that string reverse the string words
$str = "my name is mohammed sharaf iam a good person and i like to eat chikens grill";

$arrayStrring = explode(' ', $str);
$reverseArray = array_reverse($arrayStrring);
// print_r(implode(" ", $reverseArray));
// echo "\n";

/*********************** */
/* Task 10 */
/*********************** */




/*********************** */
/* Task 11 */
/*********************** */
// 1
// 11
// 21
// 1211
// 111221
// 312211
// 13112221
// 1113213211

// $num = 111221;



function getScript($num)
{
    // echo "mohamed sharaf";
    $numLength = strlen($num); // 1 2 3 4 5 6
    // echo $numLength . "\n";
    $contere = 1;
    // echo $contere . "\n";
    $result = "";
    for ($i = 0; $i < $numLength; $i++) { // 0 1 2 3 4 5
        // echo $i . "\n";
        // echo $num[$i] . "\n";
        if (($i < $numLength - 1) && $num[$i] == $num[$i + 1]) {

            $contere++;
            // echo $contere . "\n";
        } else {
            $result .= $contere . $num[$i];
            $contere = 1;
            // echo $result . "\n";
            // return $result;
        }
    }
    return $result;
    // echo "kfdkgdklfjgdfgjkfdjgk";
    // echo $contere . "\n";
    // echo $result . "\n";
}

function runline($row, $num = "1")
{
    for ($i = 0; $i <  $row; $i++) {
        echo $num . "\n";
        $num = getScript($num);
    }
}
// runline(5);

// function square($num)
// {
//     return $num * $num;
// }
// echo square(4);   // outputs '16'.
function getNum($num)
{
    $unmLength = strlen($num); //12345678
    $counter = 1;
    $result = "";
    for ($i = 0; $i < $unmLength; $i++) {

        if (($i < $unmLength - 1) &&  $num[$i] == $num[$i + 1]) {
            $counter++;
        } else {
            $result .= $counter . $num[$i];
            $counter = 1;
        }
    }
    return $result;
}

function getRowLine($row, $num = "1")
{
    for ($i = 0; $i < $row; $i++) {
        echo $num . "\n";
        $num =  getNum($num);
    }
}

getRowLine(10, "5");




//Warning:
// Trying to access array offset on value of type int in

// print_r($num[$i]) . "\n";

// Uninitialized string offset 6 in

// $contere++;

/*********************** */
/* Task 11 */
/*********************** */





/*********************** */
/* Task 12 */
/*********************** */
// write a function that take a string and returns a string where first letter is capitalized and 2 is not and 3 is capitalized and 4 is not and so on

//input mohamed 
//output MoHaMmEd




/*********************** */
/* Task 12 */
/*********************** */
