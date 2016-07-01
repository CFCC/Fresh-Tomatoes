<?php
function addMovie($title, $rating, $photo, $description, $lengthofmovie) {
	$db = new mysqli ("localhost", "root", "", "fresh_tomatos");
	$addRowSQL = "INSERT INTO movies(title, rating, photo, description, lengthofmovie) VALUES('" . $db->escape_string($title) . "'," . $rating . ",'" . $db->escape_string($photo) . "','" . $db->escape_string($description) . "'," . $lengthofmovie . ")";
	$db->query($addRowSQL);
	$db->commit();
	$db->close();
}

function removeMovie($title) {
	$removeRowSQL = "DELETE FROM movies WHERE title=$title";
	$db = new mysqli ("localhost", "root", "", "fresh_tomatos");
	$db->query($removeRowSQL);
	$db->commit();
	$db->close();
}

function editMovie($title, $rating, $photo, $description, $lengthofmovie) {
	$editRowSQL = "UPDATE movies WHERE title=$title SET rating=$rating, photo=$photo, description=$description, length=$lengthofmovie";
	$db = new mysqli ("localhost", "root", "", "fresh_tomatos");
	$db->query($editRowSQL);
	$db->commit();
	$db->close();
}

function getMovie($title) {
	$selectRowsSQL = "SELECT * FROM movies WHERE title=$title";
	$db = new mysqli ("localhost", "root", "", "fresh_tomatos");
	$mysqli_result = $db->query($selectRowsSQL);
	$rows = [];
	while ($row = $mysqli_result->fetch_assoc()) {
		array_push($rows, $row);
	}
	$db->close();
	return $rows;
}

function selectAllMovies() {
	$selectRowsSQL = "SELECT * FROM movies";
	$db = new mysqli ("localhost", "root", "", "fresh_tomatos");
	$mysqli_result = $db->query($selectRowsSQL);
	$rows = [];
	while ($row = $mysqli_result->fetch_assoc()) {
		array_push($rows, $row);
	}
	$db->close();
	return $rows;

}