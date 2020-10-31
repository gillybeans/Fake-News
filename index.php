<?php

require __DIR__ . '/header.php';

usort($posts, 'sortDates'); //Sort the dates of the articles in descending order.

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
            <h3 class="author">Written by: <?php echo $name; ?></h3>
            <h3 class="date">Published: <?php echo $date; ?></h3>
            <img src="<?php echo $image; ?>" alt="image">
            <p class="text"><?php echo $text; ?> <a href="#">READ MORE</a> </p>
            <button class="likeBtn <?php echo $likes; ?>"><i class="fa fa-thumbs-up" aria-hidden="true"></i>  <span><?php echo $likes; ?></span> likes</button>
        </div>
    </article>

    <?php endforeach; ?>

</section>