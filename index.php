<html>
	<head>
<style>
body{background src:}
</style>
	</head>
	<body>
		<table>
			<tr>
				<?php
				require ("database.php");
				$d=display();
				for($a=0; $a<count($d); $a++){
				?>
				<td>
					<h2>
					<?php echo $d[$a]['title']; ?>
					</h2>
					<strong>
					<?php echo $d[$a]['rating']; ?>
					</strong>
					<img src="<?php echo $d[$a]['photo']; ?>"/>
					<em>
					<?php echo $d[$a]['lengthofmovie']; ?>
					</em>
					<p>
					<?php echo $d[$a]['description']; ?>
					</p>
				</td>					
				<?php
				}
				?>	
			</tr>
		</table>
<form method="post" action="submit form.php"> 
<input name="title"/>
<label>
Title
<label>
<input name="rating"/>
<label>
Rating
</label>
<input name="photo"/>
<label>
Image
</label>
<input name="description"/>
<label>
Disctripion
</label>
<input name="length"/>
<label>
Length
</label>
<input type="submit" />
</form>
	</body>
</html>