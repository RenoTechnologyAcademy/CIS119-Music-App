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

<h2>Add Album</h2>

<div class="container">
    <div class="row">
        <div class="col"></div>
        <div class="col-9">
            <form action="add-album.php" method="post">
                <!-- Album name -->
                <div class="mb-3">
                    <label for="name" class="form-label">Album name: </label>
                    <input type="text" class="form-control" id="name" name="name" />
                </div>

                <!-- Album artist -->
                <div class="mb-3">
                    <label for="artist" class="form-label">Album artist: </label>
                    <input type="text" class="form-control" id="artist" name="artist" />
                </div>

                <!-- Release year -->
                <div class="mb-3">
                    <label for="release_year" class="form-label">Year released: </label>
                    <input type="number" class="form-control" id="release_year" name="release_year" />
                </div>

                <!-- Album genre -->
                <div class="mb-3">
                    <label for="genre" class="form-label">Album genre: </label>
                    <input type="text" class="form-control" id="genre" name="genre" />
                </div>

                <!-- Submit button -->
                <label for="submit"></label>
                <input type="submit" name="submit" value="Add album" />
            </form>
        </div>
    <div class="col"></div>
</div>

</body>
