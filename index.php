<?php

require __DIR__ . '/functions.php';
require __DIR__ . '/data.php';


?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Fake News</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <?php foreach ($posts AS $post) :
        $title = $post['title'];
        $text = $post['conetent'];

        ?>

        <div class="contatiner">
            <header></header>
            <main>
                <section>

                </section>
            </main>
        </div>
</body>


</html>