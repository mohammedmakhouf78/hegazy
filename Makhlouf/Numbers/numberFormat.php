<?php

$number = 6515611234.56;

$x = new NumberFormatter('ar-EG', NumberFormatter::SPELLOUT);

echo $x->format($number) . "\n";



// $number = 6515611234.56;

// $x = new NumberFormatter('ar-EG', NumberFormatter::SPELLOUT);

// echo $x->format($number) . "\n";




// $number = 6515611234.56;

// $x = new NumberFormatter('ar-EG', NumberFormatter::CURRENCY);

// echo $x->formatCurrency($number, 'EGP') . "\n";



// $number = 6515611234.56;

// $x = new NumberFormatter('en-US', NumberFormatter::SPELLOUT);

// echo $x->format($number) . "\n";