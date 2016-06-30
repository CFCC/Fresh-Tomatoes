<?php
require ("database.php");
$title=$_POST["title"];
$rating=$_POST["rating"];
$photo=$_POST["photo"];
$descritption=$_POST["description"];
$length=$_POST["length"];
addnewmovies($title, $rating, $photo, $description, $lengthofmovie);
header("Location:index.html")

?>