<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="shortcut icon" href="favicon.png">
    <title>Article Details</title>
</head>

<body>

    <section>
        <h1>Article:</h1>
        <ul>
            <li><?php echo $product->getTitle(); ?></li>
            <li><?php echo $product->getText(); ?></li>
            <li><?php echo $product->getPicture(); ?></li>
        </ul>
        <a href="<?php echo $routes->get('homepage')->getPath(); ?>">Back to homepage</a>
    <section>

</body>

</html>