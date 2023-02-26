<?php

//Echo - Output stringd, numbers, Html ....
echo 'Hello World';

echo 123;

echo '<h1>Hello world</h1>';

// print - similar to echo, but a bit slower
print 'cakahal johnson';

// print_r Gives a bit more info. which can used to print arrays
print_r('Hello world');
print_r([1,2,3]);

// var_dump - Even more info like data-type and length
var_dump('Hello world');
var_dump([1, 2, 3]);

// Escaping characters with a backslash
echo 'Is your name 0\'really?';
echo "Is your name 0\<h1> really?";


/* multi-line comments */

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP|OutPut</title>
</head>
<body>

<h1> Hello <?php echo 'cakahal'; ?> </h1>
<?php
$name = 'Cakahal Johnson'; //Strings can be single or double quotes
$age = 40; // Integer
$hasKIds = true;  // Boolean
$cashonHand = 10.5; //float

var_dump($cashonHand);

// adding variables to strings
echo "$name is $age years old";

// or more better to do this
echo "${name} is ${age} years old";


// Concatenate Strings

echo '<h3>' . $name . ' is ' . $age . ' years old</h3>';

// Aritmetic Operators

echo 5 + 5;
echo 10 - 6;
echo 5 * 10;
echo 10 / 2;
echo 12 % 3;

// Constants - Connot be changed
define('HOST', 'localhost');
define('USER', 'root');

var_dump(HOST);

// printf()


?>

    
</body>
</html>

