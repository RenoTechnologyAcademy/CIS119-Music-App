<?php

// The MySQL service named in the docker-compose.yml.
$host = 'db';

// Database use name
$user = 'MYSQL_USER';

//database user password
$pass = 'MYSQL_PASSWORD';

// connect to the database
$conn = new mysqli($host, $user, $pass, 'music');

// extract the form fields from the request into variables
$albumName = $_POST["name"];
$albumArtist = $_POST["artist"];
$yearReleased = $_POST["release_year"];
$albumGenre = $_POST["genre"];

// create query to insert record into database
$sql = "INSERT INTO album (name, artist, year_released, genre, date_added) VALUES ('$albumName', '$albumArtist', $yearReleased, '$albumGenre', CURRENT_DATE)";

// execute the query
$result = $conn->query($sql);

header("Location: /");
die();

?>
