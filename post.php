<article id="<?php the_ID(); ?>">
    <?php the_post_thumbnail();?>
    <h1><a href="<?php the_permalink()?>"><?php the_title();?></a></h1>
    <p><?php echo $post->post_excerpt ?></p>
</article>
<hr />