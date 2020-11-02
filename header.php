<?php

require __DIR__ . '/data.php';
require __DIR__ . '/functions.php';

//prints author posts by given id.
if (isset($_GET['author'])) {
    $authorId = $_GET['author'];
    $posts = filterByAuthor($posts, $authorId);
};

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <link href="https://fonts.googleapis.com/css2?family=Montserrat&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <title>Fake News</title>
</head>
<body>
    <header>
        <h1><a href="/"><img src="/img/FakeNewsLogo.svg" height="60" alt="FakeNews"></a></h1>
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