<?php


$date = checkdate(2,29,2023);

echo $date . "\n";



















// $first = new DateTime("1965-05-10 7:32:56pm", new DateTimeZone("America/New_York"));

// $second = new DateTime("1962-11-20 4:29:11am", new DateTimeZone("America/New_York"));


// $first = new DateTime("@" . $first->getTimestamp());

// $second = new DateTime("@" . $second->getTimestamp());

// $diff= $second->diff($first);

// print_r($diff);














// $date1 = new DateTime("last month");
// $date2 = new DateTime();

// $diff = $date1->diff($date2);

// print_r($diff) . "\n";






















// date_default_timezone_set('Africa/Cairo');

// echo gmmktime(0,0,0,1,1,1970) . "\n";
// date_default_timezone_set('Australia/Adelaide');

// $dateTimestamp = mktime(2,0,0,1,1,1971);

// echo date(DateTime::ATOM, $dateTimestamp) . "\n";

// print_r(getdate($date));


















// date_default_timezone_set('Australia/Adelaide');

// echo date('r') . "\n";

// date_default_timezone_set('Africa/Cairo');

// echo date('r') . "\n";

// $date = new DateTime();

// echo $date->format("r") . "\n";

// print_r(getdate(1675399506 - (365 * 24 * 60 * 60)));
// print_r(localtime(1675399506 - (365 * 24 * 60 * 60), true));