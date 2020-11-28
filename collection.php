<?php require('database.php'); ?>
<html>
<head>
    <title>Collection</title>
    <link rel="stylesheet" type="text/css" href="normalize.css">
    <link rel="stylesheet" type="text/css" href="collection.css">
</head>
<body>
<header>
        <img class="guitar" src = "https://www.bbop.eu/files/posts/77/images/vince_gill_bbop-9-large.jpg?1511798725" alt="Guitarlogo"></li>
        <h1 class="title">THE GUITAR COLLECTION!!</h1>
</header>
<a href="http://localhost:1234/collection/guitarscollection/form.php" class="button">ADD GUITAR!</a>
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






