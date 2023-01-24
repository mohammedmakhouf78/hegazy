<?php

// cat ==> cats
// dog ==> dogs

// a i o u e
// category ==> categories
// play ==> plays





//man ==> men
//woman ==> women



function getPlural($word)
{
    $lastLetter = substr($word, -1);
    $beforLastLetter = substr($word, -2 , 1);
    $lastTwoLetters = substr($word, -2);

    $specialWords = [
        "wife" => "wives",
        "wolf" => "wolves",
        "roof" => "roofs",
        "belief" => "beliefs",
        "chef" => "chefs",
        "chief" => "chiefs",
        "man" => "men",
        "woman" => "women",
    ];

    $vowels = "aioue";
    $specialLastLetter = ["s", 'x', 'z'];
    $specialLastTwoLetters = ["ss","sh","ch"];
    if($lastLetter == "y" && strpos($vowels, $beforLastLetter) === false)
    {
        return substr_replace($word, "ies", -1);
    }
    else if($lastLetter == "y" && strpos($vowels, $beforLastLetter) !== false)
    {
        return $word . "s";
    }
    else if(in_array($lastLetter , $specialLastLetter) || in_array($lastTwoLetters , $specialLastTwoLetters))
    {
        return $word . "es";
    }
    else if($lastLetter == "o")
    {
        return $word . "es";
    }
    else if( in_array($word, array_keys($specialWords)) )
    {
        return $specialWords[$word];
    }
    else
    {
        return $word . "s";
    }

    // echo $lastLetter . "<br>";
    // echo $beforLastLetter . "<br>";
}

echo getPlural('cat') . "<br>";
echo getPlural('dog') . "<br>";
echo getPlural('category') . "<br>";
echo getPlural('play') . "<br>";
echo getPlural('bus') . "<br>";
echo getPlural('truss') . "<br>";
echo getPlural('marsh') . "<br>";
echo getPlural('lunch') . "<br>";
echo getPlural('tax') . "<br>";
echo getPlural('blitz') . "<br>";
echo getPlural('wife') . "<br>";
echo getPlural('wolf') . "<br>";
echo getPlural('belief') . "<br>";

echo getPlural('man') . "<br>";
echo getPlural('woman') . "<br>";