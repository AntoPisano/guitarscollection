<?php
$db = new PDO('mysql:host=db;dbname=guitarApp','root', 'password');
$db->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_ASSOC);
$sql = 'SELECT `id`, `img`, `model`, `year`, `color`, `artist`, `type` FROM `guitars`;';

$query = $db->query($sql);
$result = $query-> fetchAll();

?>