<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Asso|Array</title>
</head>
<body>
    <h2>Asso|Array</h2>
    <?php
    
    $books = [

        "Java documentation",
        "CSS documentation",
        "HTML documentation",
        "PHP documentation",
        "Python documentation",
    ];

    // here is for asso-Arrays it has keys and values
    $cars = [

        [
            'name' => 'Benz',
            'model' => 'GLK',
            'email' => 'example@gmail.com',
            'url' => 'https://www.google.com'

        ],

        [
            'name' => 'Lexus',
            'model' => 'Rx350',
            'email' => 'example@gmail.com',
            'url' => 'https://www.google.com'
        ]
        ];
    ?>

    <p>
        <?= $books[2]  ?>
    </p>

    <ol>
        <?php foreach($books as $book)
            // echo "<li>. $book . </li>"
            echo "<li>. $book  ab </li>"
            // echo "<li> {$book}ab </li>"
        ?>
    </ol>

    <h3>looping for Asso Arrays</h3>

    <ul>
        <?php foreach ($cars as $car) : ?>

            <li>
                <!-- <a href="#">
                    <?= $car['name']; ?>
                </a> -->

                <!-- adding url to asso-arrays -->
                <a href="<?= $car['url'] ?>">
                    <?= $car['name']; ?>
                </a>


            </li>

        <?php endforeach; ?>

    </ul>
</body>
</html>