<?php
    $moviesJson = file_get_contents('data/movies.json');
    $movies = json_decode($moviesJson, true);

    $title = 'Movie Mania';
    $totalTask = count($movies);
?>

<!DOCTYPE html>
<html>
<head>
    <link href="css/main.css" rel="stylesheet"/>
    <title><?php echo $title; ?></title>
</head>
<body>
    <div id="movies-group">
            <header id="page-banner">
                <p>Movies for everyone</p>
            </header>

            <div id="movie-list">
                <h2 class="title">Movies to watch</h2>
                <ul>
                    <?php foreach($movies as $movie) { ?>
                        <li>
                            <span class="name"><?php echo $movie['name']; ?></span>
                            <span class="delete">delete</span>
                        </li>
                    <?php } ?>
                </ul>
            </div>  
    </div>
</body>    
</html>
