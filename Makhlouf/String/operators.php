<?php

// 1
// 11
// 21
// 1211
// 111221
// 312211
// 13112221
// 1113213211

lookAndSay(10, "7");

function lookAndSay($rows, $script = "1")
{
    for($i = 1; $i <= $rows; $i++)
    {
        echo $script;
        echo "\n";
        $script = getScript($script);
    }
}

function getScript($script)
{
    $scriptLength = strlen($script);
    $counter = 1;
    $result = "";
    for($i = 0; $i < $scriptLength; $i++)
    {
        if( ($i < $scriptLength - 1) && $script[$i] == $script[$i + 1])
        {
            $counter++;
        }
        else
        {
            $result .= $counter . $script[$i];
            $counter = 1;
        }
    }
    return $result;
}