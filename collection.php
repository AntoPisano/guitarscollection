<?php require('database.php'); ?>
<html>
<head>
    <title>Collection</title>
    <link rel="stylesheet" type="text/css" href="collection.css">
    <link rel="stylesheet" type="text/css" href="normalize.css">
</head>
<body>
<header>
        <img class="guitar" src = "https://w0286994blog.files.wordpress.com/2016/04/scute.jpg?w=676" alt="Guitarlogo"></li>
        <h1 class="title">THE GUITAR COLLECTION!!!!!</h1>
</header>
<a href="http://localhost:1234/collection/guitarscollection/form.php" class="button">the pig wants more rock<br>ADD GUITAR!</a>
<div class="collection">
    <?php
    if (!empty($result)) {
        foreach ($result as $guitar) {
            echo '<div><img class="images" src="' . $guitar['img'] . '" alt="' . $guitar['model'] . '"/>
        Model: ' . $guitar['model'] . '<div>Year: ' . $guitar['year'] .'</div>' . 'Type: ' . $guitar['type'] . '<div>' .
                'Color: ' . $guitar['color'] .'</div>' . '<div>Played by: ' . $guitar['artist'] .'</div>' . '</div>';
        }
    } else {
        echo '<h1>Database connection error try again later</h1>';
    }
    ?>
</div>


</body>
</html>






