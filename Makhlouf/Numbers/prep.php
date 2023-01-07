<?php


/**
 * 2.1 Checking Whether a Variable Contains a Valid Number
 */
$numbers = [5, '5', '05', 12.3, '16.7', 'five', 0xDECAFBAD, '10e200'];

foreach ($numbers as $maybeNumber) 
{
    $isItNumeric = is_numeric($maybeNumber);
    $actualType = gettype($maybeNumber);
    
    print "Is the $actualType $maybeNumber numeric? ";

    if (is_numeric($maybeNumber)) 
    {
        print "yes";
    } 
    else 
    {
        print "no";
    }

    print "\n";
}