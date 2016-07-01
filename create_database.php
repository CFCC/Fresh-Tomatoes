<?php
	$sql = file_get_contents('create_database.sql');
	$db = new mysqli('localhost', 'root', '');
	if ($db->connect_errno) echo "Failed to connect to MySQL: (" . $db->connect_errno . ") " . $db->connect_error;
	if (!$db->multi_query($sql))  echo "Multi query failed: (" . $db->errno . ") " . $db->error;
	$db->commit();
	$db->close();
	header('Location: index.php');