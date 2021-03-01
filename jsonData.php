<?php
function jsonDataArray()
{
    global $moviesCount;
    $moviesJson = file_get_contents('data/movies.json');
    $jsonDataArray = json_decode($moviesJson, true);
    $moviesCount = count($jsonDataArray);
    return $jsonDataArray;
}
