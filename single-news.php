<?php
/*
Template Name: single-news
*/
?>
<?php get_header(); ?>
<main id="mainWrap">
<div id="main-visual">
    <div class="topTtlInner">
        <div class="topImg">
            <picture class="">
                    <source media="(max-width: 767px)" srcset="<?php echo get_template_directory_uri(); ?>/images/business/production/production-top-sp.jpg 1x,<?php echo get_template_directory_uri(); ?>/images/business/production/production-top-sp.jpg 2x">
                    <source media="(max-width: 920px)" srcset="<?php echo get_template_directory_uri(); ?>/images/business/production/production-top-pc.jpg 1x,<?php echo get_template_directory_uri(); ?>/images/business/production/production-top-pc.jpg 2x">
                    <img src="<?php echo get_template_directory_uri(); ?>/images/business/production/production-top-sp.jpg" srcset="<?php echo get_template_directory_uri(); ?>/images/business/production/production-top-pc.jpg 1x,<?php echo get_template_directory_uri(); ?>/images/business/production/production-top-pc.jpg 2x" alt="トップ背景画像">
                </picture>
        </div>
        <div class="ttlWrap">
            <span class="enTtl">News</span>
            <h1 class="jpTtl">お知らせ</h1>
        </div>
    </div>
</div>
<div id="panNavi">
    <ul class="list">
        <li>
            <a href="<?php echo esc_url( home_url( '/') ); ?>">TOP</a>
        </li>
        <li>
            <a href="/news/">お知らせ一覧</a>
        </li>
        <li>
            <span>○○○○○○○○</span>
        </li>
    </ul>
</div>

<div id="singleNewsWrap">
  <?php if (have_posts()): ?>
    <?php while (have_posts()) : the_post(); ?>
       <h1><?php the_title(); ?></h1>
        <time><?php the_date(); ?></time>
    <?php the_content(); ?>
    <?php endwhile; ?>
    <?php wp_reset_postdata(); ?>
    <?php else: ?>
    <!-- 投稿が無い場合の処理 -->
    <?php endif; ?>
</div>

</main>
<?php get_footer(); ?>
