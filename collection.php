<?php require('database.php'); ?>
<html>
<head>
    <title>Collection</title>
    <link rel="stylesheet" type="text/css" href="collection.css">
</head>
<body>
<header>
    <nav>
        <img class="guitar" src = "https://w0286994blog.files.wordpress.com/2016/04/scute.jpg?w=676" alt="Guitarlogo"></li>
        <h1 class="title">THE GUITAR COLLECTION!!!!!</h1>
    </nav>
</header>
<button type="button" onclick="alert('Hello world!')">the pig wants more rock<br>ADD GUITAR!</button>



<div class="collection">
    <?php
    if (!empty($result)) {
        foreach ($result as $guitar) {
            echo '<div><img class="images" src="' . $guitar['img'] . '" alt="' . $guitar['model'] . '"/>
        Model: ' . $guitar['model'] . '<br>Year: ' . $guitar['year'] . '<br>Type: ' . $guitar['type'] . '<br>' .
                'Color: ' . $guitar['color'] . '<br>Played by: ' . $guitar['artist'] . '</div>';
        }
    } else {
        echo '<h1>Database connection error try again later</h1>';
    }
    ?>
</div>


</body>
</html>






