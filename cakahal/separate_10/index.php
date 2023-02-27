/*
the functions can start at top workspace before the HTML TAG

or as a separate file which is call the index.php while index.template.php or index.html.php or index.view.php holds the HTML section

*/

<?php
    $books = [
        [
            'name' => 'Do Androids Dream of Electric Sheep',
            'author' => 'Philip K. Dick',
            'releaseYear' => 1968,
            'purchaseUrl' => "https://www.google.com"
        ],

        [
            'name' => 'Project Hail Mary',
            'author' => 'Andy Weir',
            'releaseYear' => 2021,
            'purchaseUrl' => "https://www.cnn.com"
        ],

        [
            'name' => 'The Martian',
            'author' => 'Andy Weir',
            'releaseYear' => 2011,
            'purchaseUrl' => "https://www.bbc.com"
        ],


    ];

    // final refactor using array_filter
$filteredBooks7 = array_filter($books, function ($book){
    // return $book['releaseYear'] >= 2000;
    // return $book['releaseYear'] < 2000;
    return $book['releaseYear'] >= 1950 && $book['releaseYear'] <= 2020;
    // return $book['author'] === 'Andy Weir';


});

// here we have to load this page as public access by using include or required
require "index.view.php";