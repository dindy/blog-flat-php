<?php
$connection = new PDO("mysql:host=localhost;dbname=blog_db", 'root', '');

$result = $connection->query('SELECT id, title FROM posts');

$posts = [];
while ($row = $result->fetch(PDO::FETCH_ASSOC)) {
    $posts[] = $row;
}

$connection = null;

// include the HTML presentation code
require 'templates/list.php';