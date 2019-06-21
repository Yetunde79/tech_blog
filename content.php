<div class="blog-post">
    <h2 class="blog-post-title"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
    <p class="blog-post-meta"> by  <?php the_author(); ?> - <?php the_date();  ?></p>

    <?php the_excerpt() ?>

</div>