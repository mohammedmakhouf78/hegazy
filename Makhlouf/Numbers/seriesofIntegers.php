<?php

//iterators
//generators


function xRange($start, $end)
{
    echo "start of function \n";
    for($i = $start; $i <= $end; $i++)
    {
        echo "before yield \n";
        yield "ali" => $i;
        echo "after yield \n";
    }
    echo "out of function \n";
}

foreach(xRange(5, 15) as $key => $value)
{
    echo $key . " => ". $value . "\n";
}



























// class Collection extends \ArrayIterator
// {

// }


// $collection = new Collection([
//     "ahmed",
//     'ali',
//     'hosam',
//     'sharaf',
//     'amin'
// ]);


// foreach($collection as $key => $value)
// {
//     echo $key . " => " . $value . "\n"; 
// }

































// class Collection implements Iterator
// {
//     private $index = 0;
//     private $arr = [
//         "ahmed",
//         'ali',
//         'hosam',
//         'sharaf',
//         'amin'
//     ];

//     public function valid(): bool
//     {
//         return isset( $this->arr[ $this->index ] );
//     }

//     public function current(): mixed
//     {
//         return $this->arr[ $this->index ];
//     }

//     public function key(): mixed
//     {
//         return $this->index;
//     }

//     public function next(): void
//     {
//         $this->index++;
//     }

//     public function rewind(): void
//     {
//         $this->index = 0;
//     }
// }


// $collection = new Collection();

// foreach($collection as $key => $item)
// {
//     echo $key . " => " . $item . "\n";
// }

// foreach($collection as $key => $item)
// {
//     echo $key . " => " . $item . "\n";
// }








































// Object Iteration
// class Collection
// {
//     public $x1 = 10;
//     public $x2 = 15.60;
//     public $x3 = "ali";
//     public $x4 = true;
//     public $x5 = "why";

//     protected $y = 120;
//     private $z = 330;

//     public function sayHello()
//     {
//         foreach($this as $key => $item)
//         {
//             echo $key . " => " . $item . "\n";
//         }
//     }
// }

// $collection = new Collection();

// foreach($collection as $item)
// {
//     echo $item . "\n";
// }
// echo "\n";
// echo "\n";
// echo "\n";
// $collection->sayHello();










































// function printBetween($start, $end)
// {
//     $numbers = range($start, $end);

//     foreach($numbers as $number)
//     {
//         printf("the number is %s and %s \n", $number, $number + 3);
//     }
// }

// printBetween(5,20);