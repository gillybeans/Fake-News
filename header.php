<?php

require __DIR__ . '/data.php';
require __DIR__ . '/functions.php';

if (isset($_GET['author'])) {
    $authorId = $_GET['author'];
    $posts = filteredAuthor($posts, $authorId);
}

usort($posts, 'sortPostsByPublished');

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <link href="https://fonts.googleapis.com/css2?family=Montserrat&display=swap" rel="stylesheet">
    <title>Fake News</title>
</head>
<body>
    <header>
        <h1><a href="index.php">Fake News</a></h1>
        <form action="" method="get" class="menu">
        <?php foreach ($authors AS $i => $author) :
        $name = $author['name'];
        ?>
        <button class="authorbutton" type='submit' name='author' value='<?php echo $i; ?>'>
        <?php echo "$name"; ?>
        </button>
        <?php endforeach; ?>
        </form>
    </header>
</body>
</html>