<?php

/*
String function

*/

$name = "cakahals Johnson sam";

//  getting the lenght of a string
// echo strlen($name);

// finding the position of the first occurence of a substring in a string
// echo strpos($name, 'a');

// finding the position of the last occurence of a substring in a string
// echo strrpos($name, 's');

// Reverse a string
// echo strrev($name);

// convert all characters to lowercase
// echo strtolower($name);

// convert all characters to uppercase
// echo strtoupper($name);

// String Replacing
// echo str_replace('sam', 'james', $name);

// return portion of a string specified by the offset and length
// echo substr($name, 0, 8);
// with this we get from the index to last character
// echo substr($name, 8);

//Starts with returns a boolean
// if (str_starts_with($name, 'ca')){
//     echo 'YES';
// }

// End with
// if (str_ends_with($name, 's')){
//     echo 'YES';
// }


// Html Entities
$name2 = '<h1>Hello World</h1>';
echo $name2 . '<br>';

//no no no avoid such mistake in input forms
$name3 = '<script>alert(1)</script>';
// echo $name3;
// echo htmlentities($name3);

// formatted strings - useful when you have outside data
// different specifiers for different data types
// for string data
// printf('%s is a %s', 'cakahal', 'nice guy');
// for int or return data
// printf('10 * 3 = %d', 10 * 3);
// for float data types
// printf('10 * 3 = %f', 10 - 3);

// isTrue = true

// sprintf('isTrue=%s', isTrue ? "True" : "False");

// function _bool($b){
//     return $b ? 'True' : 'False';

// }
// echo _bool($var)






?>







