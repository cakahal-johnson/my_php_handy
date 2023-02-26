<?php

/*

Array Functions
*/

$students = ['cakahal', 'johnson', 'james', 'sam'];

//getting array length
// echo count($students);

// search array: checking for returns boolean 1 true and null is false
// echo in_array('sam', $students);

//Add to an Array
$students[] = 'vitalis'; // adds as single
// var_dump($students)
array_push($students, 'Doe', 'Ken'); //apends to the last
array_unshift($students, 'teecee', 'joy'); // adds to the beginning

// Removing from an Array
//array_pop($students); // Removes last item
//array_shift($students); // removes the first item

//Removing a specific elements
//unset($students[1]);

// Split into chunks of 4
$huz = array_chunk($students, 4);

print_r($huz);

//concatenate arrays
$num1 = [1,2,3,4,5];
$num2 = [6,7,8,9,0];

$num3 = array_merge($num1, $num2);

print_r($num3);
// without array_merge
// $num4 = [...$num1, ...$num2];
// print_r($num4);

//combine arrays  (keys & values)
$a = ['green', 'red', 'yellow'];
$b = ['james', 'johnson', 'joy'];

$c = array_combine($a, $b);
print_r($c);

// getting the array keys
$keys = array_keys($c);
print_r($keys);

// getting the values 
$var = array_values($c);
print_r($var);

// flip keys with values
$flipped = array_flip($c);
print_r($flipped);

// creating array of number with range()

$numbers = range(1, 20);

$newNumbers = array_map(function ($number){
    return "My Number is -  ${number}";   
}, $numbers);

print_r($newNumbers);

// filler array
// $lessThan10 = array_filter($numbers, fn($number) => $number < 10);

// print_r($lessThan10);

//Array Reduce
//This "carry" holds the return value of the previous iteration
$sum = array_reduce($numbers, fn($carry, $number) => $carry + $number);
print_r($sum);

//Assignment use array filter to get the odd numbers and even numbers in the range of 1 to 99 using arrow function 

// print_r($students);


?>