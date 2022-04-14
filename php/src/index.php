<head>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</head>

<body>

<nav class="navbar navbar-dark bg-dark">
  <div class="container-fluid">
    <a class="navbar-brand mb-0 h1" href="/">Music Collection</a>
  </div>
</nav>

<h2>Find Album</h2>

<form action="find-album.php" method="post">
    <!-- Search terms -->
    <label for="name">Search terms: </label>
    <input type="text" id="terms" name="terms" />

    <!-- Submit button -->
    <label for="submit"></label>
    <input type="submit" name="submit" value="Search" />
</form>

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
    echo "<td><a href=\"edit-album-form.php?id=$album->id\">edit</a> <a href=\"delete-album.php?id=$album->id\">delete</a></td>";
    echo "</tr>";
}
?>

</table>

<button type="button" onclick="location.href='add-album-form.php';">Add album</button>

</body>
