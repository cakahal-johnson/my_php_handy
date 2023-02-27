<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cakahal||Function</title>
</head>
<body>


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