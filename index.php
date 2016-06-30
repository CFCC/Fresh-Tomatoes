
<?php

require ("database.php");
$d=display();
for($q=1; $q<count($d); $q++){
	echo $d['title'];
	echo $d['rating'];
	echo $d['photo'];
	echo $d['description'];
	echo $d['lengthofmovie'];
}

?>