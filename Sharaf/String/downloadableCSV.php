<?php


// $x = $_REQUEST['type'];

// $file = fopen('../../Makhlouf/String/sales.txt', 'r');
// header('Content-Type: application/csv');
// header("Content-Disposiion: attachment; filename=msh.csv");

// echo file_get_contents('../../Makhlouf/String/sales.txt');



$param = $_REQUEST['type'];

$file = fopen('./sales.csv', 'r');

header('Content-Type: application/csv');
header("Content-Disposition: attachment; filename=x.$param ");

echo file_get_contents('./sales.csv');