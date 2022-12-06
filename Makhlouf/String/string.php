<?php





//substring

$name = "mohammedmakhlouf78";

echo substr($name, 5, -3);

echo "\n";
echo "\n";
echo "\n";






















// strpos

$email = '@aligmail.com';

if(strpos($email, '@') === false)
{
    echo "the email is Wrong \n";
}
else
{
    echo "The email is Ok \n";
}
echo "\n";
// strpos



















//strpos

//now doc
$name = "ahmed";

$x = <<<'__END__'
    hello ahmed
    $name
__END__;

echo $x;
//now doc

echo "\n";