<?php

require __DIR__ . '/header.php';

//Sort the dates of the articles in descending order.
usort($posts, 'sortDates');

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
            <img class="articleimage" src="<?php echo $image; ?>" alt="image">
            <p class="text"><?php echo $text; ?> <a href="#">READ MORE</a> </p>
            <button class="likeBtn <?php echo $likes; ?>"><i class="fa fa-thumbs-up" aria-hidden="true"></i>  <span><?php echo $likes; ?></span> likes</button>
        </div>
    </article>

    <?php endforeach; ?>

</section>
<footer>
        <p>Fake News ; if it's on the internet then it must be true. @ Gilda A <br> If most of the news we watch is fake, imagine how bad <i>history</i> is. <br> </p>
</footer>
    </body>
    </html>