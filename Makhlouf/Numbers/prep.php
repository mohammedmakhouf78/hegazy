<?php



function printBetween(int|string $start,int|string $end)
{
    $numbers = myRange($start, $end);

    foreach($numbers as $key => $number)
    {
        printf("the number is %s => %s \n", $key, $number);
    }
}


printBetween(1, 1000000);

function myRange($start, $end)
{
    for($i = $start; $i <= $end; $i++)
    {
        yield "ahmed $i" => $i;
    }
}

























// class Collection extends ArrayIterator
// {

// }



// $collection = new Collection([
//     "ahmed",
//     "ali",
//     "omar",
//     'hassan',
//     "hussien"
// ]);


// foreach($collection as $key => $value)
// {
//     echo "key => $key    item => $value \n"; 
// }












































// class Collection implements Iterator
// {
//     public $index = 0;

//     private $data = [
//         "ahmed",
//         "ali",
//         "mohammed",
//         "yussof",
//         'samir'
//     ];
//     public $x2 = 15;
//     public $x3 = 50;
//     public $x4 = 3;
//     public $x5 = 7;

//     protected $y = 13;
//     private $z = 55;

//     public function __construct()
//     {
        
//     }

//     public function current(): mixed
//     {
//         return $this->data[ $this->index ];
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

//     public function valid(): bool
//     {
//         return isset( $this->data[ $this->index ] );
//     }

// }


// $collection = new Collection();

// foreach($collection as $key => $item)
// {
//     echo "key => $key    item => $item \n"; 
// }





































// function printBetween(int|string $start,int|string $end)
// {
//     $numbers = range($start, $end);

//     foreach($numbers as $number)
//     {
//         printf("the number is %s \n", $number);
//     }
// }


// // printBetween(' ', 't');

