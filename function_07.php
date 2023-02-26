<?php

/*
============ Function ==============
syntax, local scope and global

*/

//Syntax
function reg()
{
    echo 'User has been registered!';
}

// Running or calling up a function
reg();

// Adding Parameters to a function
function reg2($username)
{
    echo "User ${username} has been registered!";
}

// passing in the argument
reg('Cakahl Johnson');

// we can also return in a function
function adding($num1, $num2)
{
    return $num1 + $num2;
}

$sum = adding(255, 699);
echo $sum;

// Adding defualt values
function subtract($num3 = 102, $num4 = 556)
{
    return $num3 - $num4;
}

echo subtract();

// Assigning anonymous function to variables often used for closures and callback functions
$add = function($num5, $num6)
{
    return $num5 + $num6;
};

echo $add(899, 546);

// Array Function
$multiply = fn($num7, $num8) => $num7 * $num8;

echo $multiply(225, 47);

?>