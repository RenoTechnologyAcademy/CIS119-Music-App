<h1>CIS119 Music Album Database App</h1>

<h2>Music Album Search Results</h2>

<?php

// The MySQL service named in the docker-compose.yml.
$host = 'db';

// Database use name
$user = 'MYSQL_USER';

//database user password
$pass = 'MYSQL_PASSWORD';

// connect to the database
$conn = new mysqli($host, $user, $pass, 'music');

// extract the search terms from the request
$searchTerms = $_POST["terms"];

// create query to delete record from database
$sql = "SELECT * FROM album WHERE name LIKE '%$searchTerms%'";

// execute the query
$result = $conn->query($sql);

// extract the records into an array
$albums = [];
if ($result) {
    while($data = $result->fetch_object()) {
        $albums[] = $data;
    }
}

if (count($albums) > 0) {
    echo "
        <table>
            <tr>
                <th>Album name</th>
                <th>Artist</th>
                <th>Year Released</th>
                <th>Genre</th>
            </tr>
    ";

    foreach($albums as $album) {
        echo "<tr>";
        echo "<td>$album->name</td>";
        echo "<td>$album->artist</td>";
        echo "<td>$album->year_released</td>";
        echo "<td>$album->genre</td>";
        echo "</tr>";
    }

    echo "</table>";
} else {
    echo "No albums matching search terms were found.";
}

?>

<br/>
<a href="/">Go home</a>
