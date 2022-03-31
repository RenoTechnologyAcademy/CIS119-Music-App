<h1>CIS119 Music Album Database App</h1>

<h2>Album List</h2>

<table>
    <tr>
        <th>Album name</th>
        <th>Artist</th>
        <th>Year Released</th>
        <th>Genre</th>
        <th></th>
    </tr>

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
    //echo $album->name . " " . $album->artist . " " . $album->year_released . " " . $album->genre;
    //echo "<br>";
    echo "<tr>";
    echo "<td>$album->name</td>";
    echo "<td>$album->artist</td>";
    echo "<td>$album->year_released</td>";
    echo "<td>$album->genre</td>";
    echo "<td><a href=\"delete-album.php?id=$album->id\">delete</a></td>";
    echo "</tr>";
}
?>

</table>

<button type="button" onclick="location.href='add-album-form.php';">Add album</button>
