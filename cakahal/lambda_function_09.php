<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cakahal||Function</title>
</head>
<body>
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

    // here is where we use the Filter Function
    function filterByAuthor2($books, $author){ // we added author as an args
        $filteredBooks = [];

        foreach ($books as $book){
            if ($book['author'] === $author){ // here we change the author variable as well
                $filteredBooks[] = $book; // here we apend the function to our loop variable
            }
        }

        return $filteredBooks; // here we assign the function the our filterbook var
    }

    // here is where we use the Filter Function where by we want to filter by release year
    function filterByAuthor3($books, $year){ // we added author as an args
        $filteredBooks = [];

        foreach ($books as $book){
            if ($book['releaseYear'] === $year){ // here we change the author variable as well
                $filteredBooks[] = $book; // here we apend the function to our loop variable
            }
        }

        return $filteredBooks; // here we assign the function the our filterbook var
    }

    // here is where we use the Filter Function where by we want to filter by release year and assign the variable in the function A..K..A LAMBDA FUNCTION OR ANONY MOUS OR NAMING FUNCTION

   $filterByAuthor4 = function ($books, $year){ // we added author as an args
        $filteredBooks = [];

        foreach ($books as $book){
            if ($book['releaseYear'] === $year){ // here we change the author variable as well
                $filteredBooks[] = $book; // here we apend the function to our loop variable
            }
        }

        return $filteredBooks; // here we assign the function the our filterbook var
    };

    $filteredBooksY = filterByAuthor3($books, 1968 ); 


    // here is where we use the Filter Function where by we want to filter by release year and assign the variable in the function A..K..A GENERIC FUNCTION OR ANONY MOUS OR NAMING FUNCTION

 function filter ($items, $key, $value){ // we added author as an args
        $filtereditems = [];

        foreach ($items as $item){
            if ($item[$key] === $value){ // here we change the author variable as well
                $filteredBooks[] = $item; // here we apend the function to our loop variable
            }
        }

        return $filteredBooks; // here we assign the function the our filterbook var
    };

    $filteredBooks5 = filter($books, 'author', 'Andy Weir' ); // here you can just change the agrs


    // here is where we use the Filter Function where by we want to filter by release year and assign the variable in the function A..K..A GENERIC refactor FUNCTION OR ANONY MOUS OR NAMING FUNCTION

function filter6($items, $fn){
    $filtereditems = [];

    foreach($items as $item){
        if ($fn($item)){
            $filtereditems[] = $item;
        }
    }
    return $filtereditems;
}

$filteredBooks6 = filter6($books, function ($book){
    return $book['releaseYear'] >= 2000;
});


// final refactor using array_filter
$filteredBooks7 = array_filter($books, function ($book){
    return $book['releaseYear'] >= 2000;
    // return $book['releaseYear'] < 2000;
    // return $book['releaseYear'] >= 1950 && $book['releaseYear'] <= 2020;
    // return $book['author'] === 'Andy Weir';
    

});

?>


<ul>
    <!-- filtering through the arrays to get the books for Andy Weir hard coded in evn FUNCTIONS in above php session -->
    <?php foreach(filterByAuthor2($books, 'Philip K. Dick' ) as $book) : ?> <!-- referencing a variables-->
            <li>
                <a href="<?= $book['purchaseUrl'] ?>">
                    <?= $book['name']; ?> (<?= $book['releaseYear'] ?>)
                   - By <?= $book['author'] ?>
                </a>
            </li>   
    <?php endforeach; ?>
</ul>

<?php echo '<br>' ?>

<ul>
    <!-- filtering through the arrays to get the books for released year hard coded in loops session -->
    <?php foreach(filterByAuthor3($books, 2021 ) as $book) : ?>
            <li>
                <a href="<?= $book['purchaseUrl'] ?>">
                    <?= $book['name']; ?> (<?= $book['releaseYear'] ?>)
                   - By <?= $book['author'] ?>
                </a>
            </li>   
    <?php endforeach; ?>
</ul>

<?php echo '<br>' ?>

<ul>
    <!-- filtering through the arrays to get the books for released year hard coded in LAMBDA FUNCTIONS in above php session -->
    <?php foreach($filteredBooksY as $book) : ?>
            <li>
                <a href="<?= $book['purchaseUrl'] ?>">
                    <?= $book['name']; ?> (<?= $book['releaseYear'] ?>)
                   - By <?= $book['author'] ?>
                </a>
            </li>   
    <?php endforeach; ?>
</ul>

<?php echo '<br>' ?>

<ul>
    <!-- filtering through the arrays to get the books for released year hard coded in GENRIC FUNCTIONS in above php session -->
    <?php foreach($filteredBooks5 as $book) : ?>
            <li>
                <a href="<?= $book['purchaseUrl'] ?>">
                    <?= $book['name']; ?> (<?= $book['releaseYear'] ?>)
                   - By <?= $book['author'] ?>
                </a>
            </li>   
    <?php endforeach; ?>
</ul>


<?php echo '<br>' ?>

<ul>
    <!-- filtering through the arrays to get the books for released year hard coded in Anonymous FUNCTIONS in above php session -->
    <?php foreach($filteredBooks6 as $book) : ?>
            <li>
                <a href="<?= $book['purchaseUrl'] ?>">
                    <?= $book['name']; ?> (<?= $book['releaseYear'] ?>)
                   - By <?= $book['author'] ?>
                </a>
            </li>   
    <?php endforeach; ?>
</ul>

<?php echo '<br>' ?>

<ul>
    <!-- filtering through the arrays to get the books for released year hard coded in final refactor FUNCTIONS in above php session -->
    <?php foreach($filteredBooks7 as $book) : ?>
            <li>
                <a href="<?= $book['purchaseUrl'] ?>">
                    <?= $book['name']; ?> (<?= $book['releaseYear'] ?>)
                   - By <?= $book['author'] ?>
                </a>
            </li>   
    <?php endforeach; ?>
</ul>


</body>
</html>