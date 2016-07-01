<?php
function addnewmovies($title, $rating, $photo, $description, $lengthofmovie){
		$db=new mysqli ("localhost","root","","fresh_tomatos");
	$addrow="insert into movies(title, rating, photo, description, lengthofmovie) values('".$db->escape_string($_POST['title']) . "'," . $_POST['rating'] . ",'" . $db->escape_string($_POST['photo']) . "','" . $db->escape_string($_POST['description']) . "'," . $_POST['length'] .")";
	$db->query($addrow);
	$db->commit();
	echo ($addrow);
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
		$c=$db->query($x);
		$am=[];
		while($row=$b->fetch_assoc()){
			array_push($am, $row);
		}
		return $am;
}
function display(){
		$a="select * from movies";
	$db=new mysqli ("localhost","root","","fresh_tomatos");
		$b=$db->query($a);
		$pm=[];
		while($row=$b->fetch_assoc()){
			array_push($pm, $row);
		}
		return $pm;
		
}

?>