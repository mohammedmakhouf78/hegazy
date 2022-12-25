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
echo "\n";
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
echo "\n";
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
echo "\n";
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
echo "\n";
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
print_r(implode(" ", $reverseArray));
echo "\n";

/*********************** */
/* Task 10 */
/*********************** */