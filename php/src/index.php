<?php
//These are the defined authentication environment in the db service

// The MySQL service named in the docker-compose.yml.
$host = 'db';

// Database use name
$user = 'MYSQL_USER';

//database user password
$pass = 'MYSQL_PASSWORD';

// connect to the database
$conn = new mysqli($host, $user, $pass, 'music');

// create the query to get all albums from the music DB
$sql = 'SELECT * FROM album';

// execute the query
$result = $conn->query($sql);

// extract the records into an array
$albums = [];
if ($result) {
    while($data = $result->fetch_object()) {
        $albums[] = $data;
    }
}

foreach($albums as $album) {
    echo "<br>";
    echo $album->name . " " . $album->artist . " " . $album->year_released . " " . $album->genre;
    echo "<br>";
}
?>