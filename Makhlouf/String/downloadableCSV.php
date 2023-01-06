<?php

$param = $_REQUEST['type'];

$file = fopen('./sales.csv', 'r');

header('Content-Type: application/csv');
header("Content-Disposition: attachment; filename=x.$param ");

echo file_get_contents('./sales.csv');