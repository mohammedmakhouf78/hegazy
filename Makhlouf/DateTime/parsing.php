<?php

$start = new DateTime('August 1, 2014');
$end = new DateTime('September 1, 2014');

$interval = new DateInterval('P1D');

$range1 = new DatePeriod($start, $interval, $end);

foreach($range1 as $item)
{
    echo $item->format("Y-m-d") . "\n" ;
}












// https://www.php.net/manual/en/dateinterval.construct.php



// list($name1, $name2) = ['ahmed' , "mohammed", "ali"];

// echo $name1 . "\n";
// echo $name2 . "\n";

// $now = new DateTime("7/8/1996", new DateTimeZone("Africa/Cairo"));

// $now->modify('next monday + 5 days');

// print_r($now->format(DateTime::RFC850));









// $now = new DateTime("now");

// $now->add(new DateInterval("P3Y"));

// print_r($now);












// $now = new DateTime("now");

// $now->sub(new DateInterval("P3Y"));

// print_r($now);


























// date_default_timezone_set('Africa/Cairo');
// echo strtotime("1/1/1970 UTC Africa/Cairo") . "\n";
// echo strtotime("march 10") . "\n";
// echo strtotime("last monday") . "\n";

// echo date("Y-m-d H:i", strtotime("march 10")) . "\n";
// echo date("Y-m-d H:i", strtotime("last monday")) . "\n";
// echo date("Y-m-d H:i", strtotime("yesterday")) . "\n";
// echo date("Y-m-d H:i", strtotime("tomorrow")) . "\n";
// echo date("Y-m-d H:i", strtotime("today")) . "\n";
// echo date("Y-m-d H:i", strtotime("now")) . "\n";
// echo date("Y-m-d H:i", strtotime("now + 3 months")) . "\n";
// echo date("Y-m-d H:i", strtotime("last month")) . "\n";
// echo date("Y-m-d H:i", strtotime("last minute")) . "\n";
// echo date("Y-m-d H:i", strtotime("last month - 2 months")) . "\n";
// echo date("Y-m-d H:i", strtotime("last year + 5 years")) . "\n";

// $age = "7/8/1996";

// $ageTimestamp = new DateTime("last year + 5 years");
// $nowTimestamp = new DateTime();

// $x = $ageTimestamp->diff($nowTimestamp);

// print_r($x) . "\n";

// echo gmmktime(0,0,0,1,1,1970) . "\n";