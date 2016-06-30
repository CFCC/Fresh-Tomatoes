<?php
function addnewmovies($title, $rating, $photo, $description, $lengthofmovie){
		$db=new mysqli ("localhost","root","","fresh_tomatos");
	$addrow="insert into movies(title, rating, photo, description, lengthofmovie)values(".$_POST['title'] . ',' . $_POST['rating'] . ',' . $_POST['photo'] . ',' . $_POST['description'] . ',' . $_POST['length'] .")";
	$db->query($addrow);
	$db->commit();
}
function removemovies($title){
		$remove="DELETE from movies where name=$title";
	$db=new mysqli ("localhost","root","","fresh_tomatos");
	$db->query($remove);
	$db->commit();
}
function editmovies($title, $rating, $photo, $description, $lengthofmovie){
		$edit="UPDATE from movies where name=$title set rating=$rating, photo=$photo, description=$description, length=$lengthofmovie";
	$db=new mysqli ("localhost","root","","fresh_tomatos");
	$db->query($addrow);
	$db->commit();
}
function getnewmovies($title){
		$x="select * from movies where name=$title";
	$db=new mysqli ("localhost","root","","fresh_tomatos");
	$db->query($x);
	$db->commit();
		$c=$db->query($x);
		return $b->fetch_assoc();
}
function display(){
		$a="select * from movies";
	$db=new mysqli ("localhost","root","","fresh_tomatos");
	$db->query($a);
	$db->commit();
		$b=$db->query($a);
		return $b-> fetch_assoc();
		
}

?>