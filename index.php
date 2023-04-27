<?php
/*
Template Name:index
*/
?>
<?php get_header(); ?>
<main>
  <?php if (have_posts()): ?>
    <?php while (have_posts()) : the_post(); ?>
       <h1><?php the_title(); ?></h1>
        <time><?php the_date(); ?></time>
    <?php the_content(); ?>
    <?php endwhile; ?>
    <?php else: ?>
    <!-- 投稿が無い場合の処理 -->
    <?php endif; ?>
</main>
<?php get_footer(); ?>