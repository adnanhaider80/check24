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
			<div style="max-width: 300px; margin: 0 auto;">
			<form action="<?php echo BASE_URL; ?>is_login" method="post">
				<div class="form-control">
					<label for="user_name">User Name * :</label>
					<input type="text" required name="user_name">
				</div>
				<div class="form-control">
					<label for="user_pwd">Password:</label>
					<input type="password" name="user_pwd">
				</div>
				<input type="submit" value="Submit">
			</form>
			</div>
		</div>
	</main>
	
</body>
</html>
