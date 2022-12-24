<?php

#------------------------------------------------------

/*********************** */
## Task 1 ##
/*********************** */
$name = "mohammedmakhlouf78";

//get from the middle to the end


## Answer ##
$lengthString = strlen($name);
$lengthMiddleString = intval($lengthString / 2);

$result =  substr($name, $lengthMiddleString, $lengthString);
echo $result;


echo '<br>';
echo '<br>';
echo '<br>';
#------------------------------------------------------



#------------------------------------------------------
/*********************** */
/* Task 2 */
/*********************** */
$name = "mohammedmakhlouf78";

//get from the start to the middle

## Answer ##
$lengthString = strlen($name);
$lengthMiddleString = intval($lengthString / 2);

$result =  substr($name, 0, $lengthMiddleString);
echo $result;


echo '<br>';
echo '<br>';
echo '<br>';
#------------------------------------------------------



#------------------------------------------------------
/*********************** */
/* Task 3 */
/*********************** */
$name = "mohammedmakhlouf78";

//get the last 5 letters

## Answer ##
$result =  substr($name, -5);
echo $result;


echo '<br>';
echo '<br>';
echo '<br>';
#------------------------------------------------------



#------------------------------------------------------
/*********************** */
/* Task 4 */
/*********************** */
$dsec = "hello my name is mohammed and i love cats and my email is alimakhlouf@gmail.com";

// get the last 20 letters of the string and check if they are a valid email
## Answer ##
$result =  substr($dsec, -20);
echo $result;


echo '<br>';
echo '<br>';
echo '<br>';
#------------------------------------------------------



#------------------------------------------------------
/*********************** */
/* Task 5 */
/*********************** */

$name = "mohammedmakhlouf78";

// get 3 letters from the middle

## Answer ##
## Answer ##
$lengthString = strlen($name);
$lengthMiddleString = intval($lengthString / 2);
$lengthIndexElementBeforeMiddleString = $lengthMiddleString - 1;

$result = substr($name, $lengthIndexElementBeforeMiddleString, 3);
echo $result;
