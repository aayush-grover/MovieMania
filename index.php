<?php
    $moviesJson = file_get_contents('data/movies.json');
    $movies = json_decode($moviesJson, true);

    $title = 'Movie Mania';
    $moviesCount = count($movies);
?>

<!DOCTYPE html>
<html>
<head>
    <link href="css/main.css" rel="stylesheet"/>
    <title><?php echo $title; ?></title>
</head>
<body>
    <div id="movies-group">
            <header id="header">
                <h1 class="title"><?php echo $title; ?></h1>
                <p>Movies to watch</p>
                <form class="search-movie">
                    <input type="text" placeholder="Search Movies...">
                </form>
            </header>

            <div id="movie-list">
                <h2 class="title">Watchlist</h2>
                <ul>
                    <?php foreach($movies as $movie) { ?>
                        <li>
                            <span class="name"><?php echo $movie['name']; ?></span>
                            <span class="delete">delete</span>
                        </li>
                    <?php } ?>
                </ul>
            </div>

            <div id="add-movie">
                <form>
                    <input type="checkbox" id="hide">
                    <label for="hide">Hide the List</label>
                    <input type="text" placeholder="Add a movie">
                    <button>Add</button>
                </form>   
            </div>  
    </div>
</body>    
</html>
