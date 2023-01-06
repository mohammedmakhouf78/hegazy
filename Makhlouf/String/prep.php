<?php

$sales = [
    ['Northeast','2005-01-01','2005-02-01',12.54],
    ['Northwest','2005-01-01','2005-02-01',546.33],
    ['Southeast','2005-01-01','2005-02-01',93.26],
    ['Southwest','2005-01-01','2005-02-01',945.21],
];


header("Content-Type: application/csv");
header('Content-Disposition: attachment; filename="sales222.csv"');

$output = fopen('php://output','w') or die("Can't open php://output");
$total = 0;

fputcsv($output, array('Region','Start Date','End Date','Amount'));

foreach($sales as $sale)
{
    fputcsv($output, $sale);
    $total += $sale[3];   
}

fputcsv($output,array('All Regions','--','--',$total));
fclose($output) or die("Can't close php://output");