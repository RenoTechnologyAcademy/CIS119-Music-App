<?php

// The MySQL service named in the docker-compose.yml.
$host = 'db';

// Database use name
$user = 'MYSQL_USER';

//database user password
$pass = 'MYSQL_PASSWORD';

// connect to the database
$conn = new mysqli($host, $user, $pass, 'music');

// extract the album id from the URL parameter
$albumId = $_GET["id"];

// create query to delete record from database
$sql = "DELETE FROM album WHERE id = $albumId";

// execute the query
$result = $conn->query($sql);

header("Location: /");
die();

?>
