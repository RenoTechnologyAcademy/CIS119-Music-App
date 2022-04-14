<?php

// The MySQL service named in the docker-compose.yml.
$host = 'db';

// Database use name
$user = 'MYSQL_USER';

//database user password
$pass = 'MYSQL_PASSWORD';

// connect to the database
$conn = new mysqli($host, $user, $pass, 'music');

// extract the album info from the request
$albumId = $_POST["id"];
$albumName = $_POST["name"];
$albumArtist = $_POST["artist"];
$yearReleased = $_POST["release_year"];
$albumGenre = $_POST["genre"];

// create query to update the record in the database
$sql = "UPDATE album SET name = '$albumName', artist = '$albumArtist', year_released = $yearReleased, genre = '$albumGenre' WHERE id = $albumId";

// execute the query
$result = $conn->query($sql);

header("Location: /");
die();

?>
