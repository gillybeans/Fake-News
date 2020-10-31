<?php

require __DIR__ . '/data.php';
require __DIR__ . '/functions.php';

/*if (isset($_GET['author'])) {
    $authorId = $_GET['author'];
    $posts = filteredAuthor($posts, $authorId);
};*/


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
        <h1><img src="/img/FakeNewsLogo.svg" alt="Fake News"></h1>
        <form action="" method="get" class="menu">
        <?php foreach ($authors AS $i => $author) :
        $name = $author['name'];
        ?>
        <button class="authorbutton" type='submit' name='author' value='<?php echo $i; ?>'>
        <?php echo "$name"; ?>
        </button>
        <?php endforeach; ?>
        <section class="socials">
            <a href="#" class="fa fa-facebook"></a>
            <a href="#" class="fa fa-instagram"></a>
            <a href="#" class="fa fa-twitter"></a>
            <a href="#" class="fa fa-youtube"></a>
        </section>
        </form>
    </header>
</body>
</html>