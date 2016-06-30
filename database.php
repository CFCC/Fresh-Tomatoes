<?php
function addnewmovies($title, $rating, $photo, $description, $lengthofmovie){
	$db=new mysqli ("localhost","root","","fresh_tomatos");
	$addrow="insert into movies(title, rating, photo, description, lengthofmovie)values(".$_POST['title'] . ',' . $_POST['rating'] . ',' . $_POST['photo'] . ',' . $_POST['description'] . ',' . $_POST['length'] .")";
	$db->query($addrow);
	$db->commit();
}
function removemovies($title){
	$db=new mysqli ("localhost","root","","fresh_tomatos");
	$db->query($addrow);
	$db->commit();
}
function editmovies($title, $rating, $photo, $description, $lengthofmovie){
	$db=new mysqli ("localhost","root","","fresh_tomatos");
	$db->query($addrow);
	$db->commit();
}
function getnewmovies($title){
	$db=new mysqli ("localhost","root","","fresh_tomatos");
	$db->query($addrow);
	$db->commit();
}

?>