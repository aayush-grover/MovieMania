<?php
require_once 'jsonData.php';
require 'function.php';

$movies = jsonDataArray();
$title = 'Movie Mania';
$result = 'Watchlist';

//To show searched Movie
if (isset($_POST['search'])) {
    $searchedMovie = $_POST['searchedMovie'];
    showSearchedMovies($searchedMovie);
}

//to delete movie from watchlist
if (isset($_GET['delete'])) {
    $key = $_GET['delete'];
    unset($movies[$key]);
    $movies = array_values($movies);
}

//add movie to your collection
if (isset($_POST['add'])) {
    $movie = $_POST['addMovie'];
    $movies = addMovie($movie);
}

?>

<!DOCTYPE html>
<html>

<head>
    <link href="css/main.css" rel="stylesheet" />
    <title><?php echo $title; ?></title>
</head>

<body>
    <div id="movies-group">
        <header id="header">
            <h1 class="title"><?php echo $title; ?></h1>
            <p>Movies to watch</p>
            <form method="post" class="search-movie">
                <input type="text" name="searchedMovie" placeholder="Search Movies..." autocomplete="off">
                <input type="submit" name="search" class="search" value="Search">
            </form>
        </header>

        <div id="movie-list">
            <h2 class="title"><?php echo $result; ?></h2>
            <button class="showAll" onClick="location.href='?'">Show All</button>
            <ul>
                <!-- loop over movies to create dom for every movie -->
                <?php foreach ($movies as $key => $movie) { ?>
                    <li name="name<?php echo $key; ?>">
                        <span class="name"><?php echo $movie['name']; ?></span>
                        <a href="?delete=<?php echo $key; ?>" name="delete" class="delete">Delete</a>
                    </li>
                <?php } ?>
            </ul>
        </div>

        <div id="add-movie">
            <form method="post">
                <input name="addMovie" type="text" placeholder="Add a movie" autocomplete="off">
                <input type="submit" name="add" class="add" value="Add">
            </form>
        </div>
    </div>
</body>

</html>