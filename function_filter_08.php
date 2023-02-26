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
?>


<ul>
    <!-- looping through the arrays -->
    <?php foreach($books as $book) : ?>
        <li> 
            <a href="<?= $book['purchaseUrl'] ?>">
                <?= $book['name']; ?> (<?= $book['releaseYear'] ?>)
            </a>
        </li>    
    <?php endforeach; ?>
</ul>

<?php echo '<br>' ?>

<ul>
    <!-- filtering through the arrays to get the books for Andy Weir -->
    <?php foreach($books as $book) : ?>
        <?php if ($book['author'] = 'Andy Weir') : ?> <!-- single = is assigning while == is condition then === is for equality -->
            <li>
                <a href="<?= $book['purchaseUrl'] ?>">
                    <?= $book['name']; ?> (<?= $book['releaseYear'] ?>)
                   - By <?= $book['author'] ?>
                </a>
            </li>   
        <?php endif; ?>     
    <?php endforeach; ?>
</ul>

<?php echo '<br>' ?>

<ul>
    <!-- filtering through the arrays to get the books for Andy Weir by hard coding the name-->
    <?php foreach($books as $book) : ?>
        <?php if ($book['author'] === 'Andy Weir') : ?> <!-- single = is assigning while == is condition then === is for equality -->
            <li>
                <a href="<?= $book['purchaseUrl'] ?>">
                    <?= $book['name']; ?> (<?= $book['releaseYear'] ?>)
                   - By <?= $book['author'] ?>
                </a>
            </li>   
        <?php endif; ?>     
    <?php endforeach; ?>
</ul>


</body>
</html>