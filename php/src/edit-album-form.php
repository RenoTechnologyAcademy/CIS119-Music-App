<head>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

    <style>
    form {
        overflow: hidden;
        width: 800px;
    }
    
    label {
        float: left;
        width: 150px;
        text-align: right;
        padding-right: 24px;
        margin-bottom: 0.5em;
    }
    
    input, select, textarea {
        float: left;
        width: 600px;
        font-size:16px; 
        border-width:2px; 
        border-color:#cccccc; 
        border-style:solid; 
        padding:4px; 
        margin-bottom: 0.5em;
    }
    
    button {
        float: left;
        width: 200px;
    }
    </style>
</head>

<body>

<nav class="navbar navbar-dark bg-dark">
  <div class="container-fluid">
    <a class="navbar-brand mb-0 h1" href="/">Music Collection</a>
  </div>
</nav>

<h2>Edit Album</h2>

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

// create the query to get all albums from the music DB
$sql = "SELECT * FROM album WHERE id = $albumId";

// execute the query
$result = $conn->query($sql);

// get the album record
$album = $result->fetch_object();

echo 
"<form action=\"edit-album.php\" method=\"post\">
    <input type=\"text\" id=\"id\" name=\"id\" value=\"$album->id\" hidden />

    <!-- Album name -->
    <label for=\"name\">Album name: </label>
    <input type=\"text\" id=\"name\" name=\"name\" value=\"$album->name\" />

    <!-- Album artist -->
    <label for=\"artist\">Album artist: </label>
    <input type=\"text\" id=\"artist\" name=\"artist\" value=\"$album->artist\" />

    <!-- Release year -->
    <label for=\"release_year\">Year released: </label>
    <input type=\"number\" id=\"release_year\" name=\"release_year\" value=\"$album->year_released\" />

    <!-- Album genre -->
    <label for=\"genre\">Album genre: </label>
    <input type=\"text\" id=\"genre\" name=\"genre\" value=\"$album->genre\" />

    <!-- Submit button -->
    <label for=\"submit\"></label>
    <input type=\"submit\" name=\"sbumit\" value=\"Save album\" />
</form>";
?>

</body>
