<?php

function showSearchedMovies($movieName)
{
    global $movies, $result;
    foreach ($movies as $key => $movie) {
        if ($movie['name'] != $movieName) {
            unset($movies[$key]);
        }
    }
    $movies = array_values($movies);
    $result = sizeof($movies) > 0
        ? 'Search Result...'
        : 'No Result Found...So, Wanna add it to your collection😇';
}

function addMovie($movieName)
{
    $jsonData = jsonDataArray();
    $jsonData[] = ['name' => $movieName];
    return $jsonData;
}
