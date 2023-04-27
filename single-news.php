<?php
/*
Template Name: single
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
            <span class="enTtl">Production</span>
            <h1 class="jpTtl">生産体制</h1>
        </div>
    </div>
</div>
<div id="panNavi">
    <ul class="list">
        <li>
            <a href="<?php echo esc_url( home_url( '/') ); ?>">TOP</a>
        </li>
        <li>
            <a href="/business/">事業情報</a>
        </li>
        <li>
            <span>生産体制</span>
        </li>
    </ul>
</div>

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

