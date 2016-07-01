<?php
	require("database.php");
	$title = $_POST["title"];
	$rating = $_POST["rating"];
	$photo = $_POST["photo"];
	$description = $_POST["description"];
	$lengthOfMovie = $_POST["length"];
	addMovie($title, $rating, $photo, $description, $lengthOfMovie);
	header("Location:index.php");