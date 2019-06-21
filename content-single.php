<div >
        <h2 class="blog-post-title"><?php the_title(); ?></h2>
        <p class="blog-post-meta"> by  <?php the_author(); ?> - <?php the_date();  ?></p>
        <?php the_content(); ?>
</div><!-- /.blog-post -->

<?php if ( has_post_thumbnail() ) {
      the_post_thumbnail();
} ?>