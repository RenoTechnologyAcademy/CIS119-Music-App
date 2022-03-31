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

<h1>CIS119 Music Album Database App</h1>

<h2>Add Album</h2>

<form action="add-album.php" method="post">
    <!-- Album name -->
    <label for="name">Album name: </label>
    <input type="text" id="name" name="name" />

    <!-- Album artist -->
    <label for="artist">Album artist: </label>
    <input type="text" id="artist" name="artist" />

    <!-- Release year -->
    <label for="release_year">Year released: </label>
    <input type="number" id="release_year" name="release_year" />

    <!-- Album artist -->
    <label for="genre">Album genre: </label>
    <input type="text" id="genre" name="genre" />

    <!-- Submit button -->
    <label for="submit"></label>
    <input type="submit" name="sbumit" value="Add album" />
</form>
