<?php

/* Loops & iterations */

// for Loop
/* For Loop Syntax
for(initialize; condition; increment) {
    code here to be executed
}

*/

for ($x = 0; $x <= 10; $x++){
    echo "Number: $x <br>";
}
// for ($x = 0; $x <= 100; $x++){
//     echo " $x <br>";
// }

// while loop
/* 
while loop syntax 
initial var;
while(condition){
    code to be executed
}
*/

$v = 1;

while($v <= 5){
    echo "number: $v <br>";
    $v++;
}


//  Do while Loop 
/*
Syntax:
do{
    code to be executed
    incretment++
}while (condition);

do..while loop will alwasys execute the block of code once, even if the condition is false

*/

// do{
//     echo "Number: $b <br>";
//     $b++;
// }while ($b <= 5);

// forEach Loop
/*
Foreach Syntax:
foreach($array as $value){
    code to be executed
}

this is for looping through an Array
*/

$posts = ['Post one', 'Post Two', 'Post three'];
foreach($posts as $index => $post){
    echo "${index} - ${post} <br>";
}

//  Using the keys within the loop for an associative array
$students = [
    'first_name' => 'Cakahal',
    'last_name' => 'Johnson',
    'email' => 'example@gmail.com',
];

// getting the keys
foreach($students as $key => $val){
    echo "${key} - ${val} <br>";
}



?>