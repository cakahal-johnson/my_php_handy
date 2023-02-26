<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>james|array|php</title>
</head>
<body>
    <?php
// PHP Arrays
/*
where we need to store multiple values, you can use arrays hold "elements"
*/

// simple array of numbers
$numbers = [1, 2, 3, 4, 5];
echo $numbers;

// simple array of strings
$colors = ['red', 'blue', 'green'];

// outputting values from an array
echo $numbers[0];
echo $numbers[3] + $numbers[6];

// we can use print_r or var_dump to see the contents of an array
var_dump($numbers);

// assocaitive Arrays nallows us to use named keys to identify values

//normal syntax: using numbers as Key
$car = [
    1 => 'banz',
    2 => 'toyota',
    4 => 'lexus',
];

echo $car[4];

// Syntax using Strings as keys
$busStop = [
    'abakpa' => 'Enugu',
    'unn' => 'Nsk',
    'imt' => 'Enugu',
];

echo $busStop['abakpa'];
var_dump($busStop);

// Multi-dimensional arrays

//Multi-dimansional arrays are often used to share data in a table format.

$students = [
    $student1,
    [
        'frist_name' => 'Cakahal',
        'last_name' => 'johnson',
        'email' => 'example@gmail.com'
    ],
    [
        'frist_name' => 'james',
        'last_name' => 'Doe',
        'email' => 'example@gmail.com'
    ],

];

var_dump($students);

//Accessing values in a multi-dimensional array
echo $students[0]['email']; //first array gets the whole arrays index while the second gets the arrays content
echo $students[1][1]; //first array gets the whole arrays index while the second gets the arrays content

//Encode to JSON
var_dump(json_encode($students));

//Decode from JSON
$jsonobj = '{"first_name":"Cakahal", "last_name":"Johnson","email":"example@gmail.com"}';
var_dump(json_decode($jsonobj));

?>

<!-- 
    outputing with HTML
 -->
<p> <?= $car[1] ?> </p>

<!-- we can also do some loops -->
<ul>
    <?php foreach ($students as $student) : ?>
        <!-- <li><?= $student;  ?></li> -->
        <li><?php echo $student; ?></li>
    <?php endforeach; ?>
</ul>

<?php

    $Name = "Cakahal johson";
    $coding = false;

    if($coding){
        $message = "You're now a PHP Guru";
    }else{
        $message = "not yet a Guru";
    }

?>
<h1>
    <?php echo $message; ?>
</h1>

</body>
</html>