<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Document</title>
	<link rel="stylesheet" href="./../public/assets/style.css">
	<link rel="stylesheet" href="./../public/assets/simditor.css">
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
				<form action="<?php echo BASE_URL; ?>article/save" method="post">
					<div class="form-control">
						<label for="user_name">Title :</label>
						<input type="text" required name="title">
					</div>
					<div class="form-control">
						<label for="user_url">Link:</label>
						<input type="url" required name="picture">
					</div>
					<div class="form-control">
						<label for="user_comment">Text *:</label>
						<textarea name="text" required id="editor" placeholder="" autofocus></textarea>
					</div>
					<input type="submit" value="Submit">
				</form>
			</div>
		</div>
	</main>
	
	<script type="text/javascript" src="./../public/assets/js/jquery.min.js"></script>
	<script type="text/javascript" src="./../public/assets/js/module.js"></script>
	<script type="text/javascript" src="./../public/assets/js/hotkeys.js"></script>
	<script type="text/javascript" src="./../public/assets/js/uploader.js"></script>
	<script type="text/javascript" src="./../public/assets/js/simditor.js"></script>
	<script>

    var editor = new Simditor({
  		textarea: $('#editor')
  		//optional options
	});


    editor.on('valuechanged', function() {
    	console.log(editor.getValue());
    })
	</script>

</body>
</html>
