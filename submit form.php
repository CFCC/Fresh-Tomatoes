<?php
require ("database.php");
$title=$_POST["title"];
$rating=$_POST["rating"];
$photo=$_POST["photo"];
$description=$_POST["description"];
$lengthofmovie=$_POST["length"];
addnewmovies($title, $rating, $photo, $description, $lengthofmovie);
header("Location:index.php")

?>