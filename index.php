<?php

require __DIR__ . '/functions.php';
require __DIR__ . '/data.php';
require __DIR__ . '/header.php';

?>

<section class="container">
    
    <?php foreach ($posts AS $post) :
    $title = $post['title'];
    $text = $post['content'];
    $date = $post['published'];
    $image = $post['img'];
    $likes = $post['likes'];
    
    $name = $authors[$post['authorId']]['name'];

    ?>

    <article>
        <div class="article-post">
            <h2><?php echo $title; ?></h2>
            <h3 class="date">Published: <?php echo $date; ?></h3>
            <h3 class="author">Written by: <?php echo $name; ?></h3>
            <img src="<?php echo $image; ?>" alt="image">
            <p class="text"><?php echo $text; ?></p>
            <button class="likebutton <?php echo $likes; ?>"> likes</button>
        </div>
    </article>

    <?php endforeach; ?>

</section>