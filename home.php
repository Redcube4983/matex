<?php
/*
Template Name: home
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
            <h1 class="jpTtl">お知らせ一覧</h1>
        </div>
    </div>
</div>
<div id="panNavi">
    <ul class="list">
        <li>
            <a href="<?php echo esc_url( home_url( '/') ); ?>">TOP</a>
        </li>
        <li>
            <span>お知らせ一覧</span>
        </li>
    </ul>
</div>

<section id="news">
<h2>News</h2>
<ul>
    <?php if (have_posts()): ?>
    <?php while (have_posts()) : the_post(); ?>
    <li class="news-inner"><time class="news-time"><?php echo get_the_date('Y/m/d'); ?></time><p class="news-text"><a class="news-link" href="<?php the_permalink(); ?>"><?php echo get_the_title(); ?></a></p></li>
    <?php endwhile; ?>
    <?php wp_reset_postdata(); ?>
    <?php else: ?>
    <!-- 投稿が無い場合の処理 -->
    <?php endif; ?>
</ul>
</section>
</main>
<?php get_footer(); ?>