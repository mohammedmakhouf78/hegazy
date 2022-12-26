<?php

$name = "wow";

$person = new Person();

echo "ahmed {$name} makhlouf";
echo "\n";

class Person
{
    public $wow = "ali";

    public function getName()
    {
        return $this->name;
    }
}