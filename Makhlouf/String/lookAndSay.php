<?php
// 1
// 11
// 21
// 1211
// 111221
// 312211
// 13112221
// 1113213211
// 31131211131221
// 13211311123113112211
// 11131221133112132113212221

function lookAndSay($n)
{
    $script = "1";
    for($i = 1; $i <= $n; $i++)
    {
        echo $script;
        $script = getAnswer($script);
        echo "\n";
    }
}

function lookAndSay2($n, $script = "1")
{
    if( $n <= 1 ) return;

    echo $script;
    $script = getAnswer($script);
    echo "\n";

    lookAndSay2($n - 1, $script);
}

function getAnswer($str)
{
    $seciton = "";
    $secitonChar = "";
    $secitonCount = 1;
    $answer = '';
    for($i = 0; $i < strlen($str); $i++)
    {
        if( ($i + 1 < strlen($str) ) && $str[$i] == $str[$i + 1] )
        {
            $seciton .= $str[$i];
            $secitonChar = $str[$i];
            $secitonCount++;
        }
        else
        {
            
            // echo "**************";
            $answer .= $secitonCount . ($secitonChar == "" ? $str[$i] : $secitonChar);
            $seciton = "";
            $secitonCount = 1;
            $secitonChar = "";
        }
    }
    return $answer;
}

echo lookAndSay2(11);

echo "\n";