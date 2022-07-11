<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Document</title>
	<link rel="stylesheet" href="./../public/assets/style.css">
</head>
<body>

	<div class="container above_nav_info">
		<a href="/"><img width="80" height="38" src="https://via.placeholder.com/150" alt=""></a>
		<h4>Check24 Blog</h4>
	</div>

	<?php require 'navbar.php'; ?>

	<main>
		<div class="container">
			<div style="background-color: #f1f1f1;border: solid 1px #ddd; padding: 20px; border-radius: 10px;">
				<form action="">
					<div class="form-control">
						<label for="user_name">Title :</label>
						<input type="text" required name="user_name">
					</div>
					<div class="form-control">
						<label for="user_url">Link:</label>
						<input type="text" required name="user_url">
					</div>
					<div class="form-control">
						<label for="user_comment">Text *:</label>
						<div id="editor"></div>
					</div>
					<input type="submit" value="Submit">
				</form>
			</div>
		</div>
	</main>
	
</body>
</html>
