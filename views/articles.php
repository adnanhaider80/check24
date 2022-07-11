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
			<article class="single_article">
				<div>
					<span class="top_info">11/06/02, 8:40h</span>
					<h1><?php echo $product->getTitle(); ?></h1>
					<img width="1160" height="350" src="<?php echo $product->getPicture(); ?>" alt="">
					<p><?php echo $product->getText(); ?></p>
					<div class="bottom_information">
						<span>Author: some name <!-- pull author name instead of ID--></span>
						<span>Kommer : 2<!--count number of comments for this article--></span>
					</div>

					<h3>Comments</h3>
					<hr>

					<ul>
						<li>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Facilis optio sequi ab magnam quas alias dignissimos. Suscipit aspernatur, cumque facere. <span>x</span></li>
						<li>Lorem, ipsum dolor sit amet consectetur adipisicing, elit. Dignissimos, quae. <span>x</span></li>
					</ul>

					<form action="">
						<div class="form-control">
							<label for="user_name">Name * :</label>
							<input type="text" required name="user_name">
						</div>
						<div class="form-control">
							<label for="user_email">Mail:</label>
							<input type="email" name="user_email">
						</div>
						<div class="form-control">
							<label for="user_url">URL:</label>
							<input type="text" name="user_url">
						</div>
						<div class="form-control">
							<label for="user_comment">Comment *:</label>
							<textarea name="user_comment" required id="" cols="30" rows="10"></textarea>
						</div>
						<input type="submit" value="Submit">
					</form>
				</div>
			</article>
		</div>
	</main>
	
</body>
</html>
