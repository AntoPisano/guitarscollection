<html>
<head>
    <link rel="stylesheet" type="text/css" href="collection.css">
</head>
<body>
<?php
$db = new PDO('mysql:host=db;dbname=guitarApp', 'root', 'password');
$db->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_ASSOC);
$sql = "INSERT INTO `guitars` (`img`, `model`, `year`, `color`, `artist`, `type`) VALUES (?, ?, ?, ?, ?, ?)";

$query = $db->prepare($sql);
$img = $_POST['img'];
$model = $_POST['model'];
$year = $_POST['year'];
$color = $_POST['color'];
$artist = $_POST['artist'];
$type = $_POST['type'];
$result = $query->execute([$img, $model, $year, $color, $artist, $type]);

if ($result) {
    echo '<h1 class="title">WELL DONE!<br>the piglet is proud of you...</h1>';
    echo '<a class="button" href="collection.php">BACK TO THE COLLECTION!!</a>';
} else{
    echo '<h1 class="title">ENTER MORE DETAILS!!</h1>';
}
?>

</body>
</html>