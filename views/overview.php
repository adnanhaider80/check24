<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Home Page</title>
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
			<section class="articles_list">
				<?php foreach($articles as $article) { ?>
					<a href="article/<?php echo $article->getId(); ?>" >
						<article class="single_article">
					
						<div>
							<span class="top_info">11/06/02, 8:40h - <?php echo $article->getTitle(); ?></span>
							<p><?php echo $article->getText(); ?></p>
							<div class="bottom_information">
								<span>Author: some name</span>
								<span>Kommer : 2</span>
							</div>
						</div>
				
						<img width="200" height="100" src="<?php echo $article->getPicture(); ?>" alt="">
						</article>
					</a>
				
				<?php } ?>

				

				<div class="pagination">
					<a href="#">1</a>
					<a href="#">2</a>
					<a href="#">3</a>
				</div>

			</section>
		</div>
	</main>
	
</body>
</html>
