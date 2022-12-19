<?php

$email = "@aligmail.com";

if(strpos($email, "@") === false)
{
    echo "there is an error \n";
    die;
}
echo "success\n";

echo "\n";