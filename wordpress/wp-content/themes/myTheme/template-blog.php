<?php
/**
 * Template Name: Blog
 */

 get_header();
?>
 <h1>Blog</h1>
<?php if(have_posts()): ?>
    <p>Y a des posts</p>
    <?php while(have_posts()): the_post();?>
    <?php endwhile ?>
<?php else: ?>
    <p>Pas d'articles.</p>
<?php endif; ?>
