<html>
	<head>
		<link href='https://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css'>
		<link rel="icon" href="favicon.png"/>
		<link rel="stylesheet" href="style.css"/>

		<title>Fresh Tomatoes</title>
	</head>
	<body>
		<h1>Fresh Tomatoes</h1>
		<h6><em>A reliable source for movie information!</em></h6>
		<table class="movie-table">
			<tr>
				<?php
					require("database.php");
					$movies = selectAllMovies();
					for ($i = 0; $i < count($movies); $i++) { ?>
						<td>
							<h2><?php echo $movies[$i]['title']; ?></h2>
							<img src="<?php echo $movies[$i]['photo']; ?>"/>
							<strong>Rated <?php echo $movies[$i]['rating']; ?> stars </strong>
							<em><?php echo $movies[$i]['lengthofmovie']; ?> min. long</em>
							<p><?php echo $movies[$i]['description']; ?></p>
						</td>
					<?php } ?>
			</tr>
		</table>
		<form method="POST" action="submit_form.php">
			<div>
				<table>
					<thead>
						<tr>
							<th colspan="2">Add New Movie</th>
						</tr>
					</thead>
					<tbody>
						<tr>
							<td><label for="title">Title </label></td>
							<td><input id="title" name="title"/></td>
						</tr>
						<tr>
							<td><label for="rating">Rating </label></td>
							<td><input id="rating" name="rating" type="number" min="1" max="10"/></td>
						</tr>
						<tr>
							<td><label for="photo">Image URL </label></td>
							<td><input id="photo" name="photo"/></td>
						</tr>
						<tr>
							<td><label for="length">Length </label></td>
							<td><input id="length" name="length" type="number" min="1"/></td>
						</tr>
						<tr>
							<td><label for="description">Description </label></td>
							<td><textarea id="description" name="description"></textarea></td>
						</tr>
						<tr>
							<td colspan="2">
								<button type="submit">Add Movie</button>
							</td>
						</tr>
					</tbody>
				</table>
			</div>
		</form>
		<div class="scrolling-placeholder"></div>
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.0.0/jquery.min.js"></script>
		<script src="animations.js"></script>
	</body>
</html>