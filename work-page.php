<?php
/*
Template Name: work
*/
?>
<?php get_header(); ?>
<main id="mainWrap">
<div id="topTtlWrap">
    <div class="topTtlInner">
        <div class="topImg">
            <picture class="">
                    <source media="(max-width: 767px)" srcset="<?php echo get_template_directory_uri(); ?>/images/recruit/work/work-top-sp.jpg 1x,<?php echo get_template_directory_uri(); ?>/images/recruit/work/work-top-sp.jpg 2x">
                    <source media="(max-width: 920px)" srcset="<?php echo get_template_directory_uri(); ?>/images/recruit/work/work-top-pc.jpg 1x,<?php echo get_template_directory_uri(); ?>/images/recruit/work/work-top-pc.jpg 2x">
                    <img src="<?php echo get_template_directory_uri(); ?>/images/recruit/work/work-top-sp.jpg" srcset="<?php echo get_template_directory_uri(); ?>/images/recruit/work/work-top-pc.jpg 1x,<?php echo get_template_directory_uri(); ?>/images/recruit/work/work-top-pc.jpg 2x" alt="トップ背景画像">
                </picture>
        </div>
        <div class="ttlWrap">
            <span class="enTtl">Work</span>
            <h1 class="jpTtl">仕事を知る</h1>
        </div>
    </div>
</div>
<div id="panNavi">
    <ul class="list">
        <li>
            <a href="<?php echo esc_url( home_url( '/') ); ?>">TOP</a>
        </li>
        <li>
            <a href="/recruit/">事業情報</a>
        </li>
        <li>
            <span>販売/納品体制</span>
        </li>
    </ul>
</div>
<section id="leadWrap">
        <div class="leadTtlWrap">
            <h2 class="jpTtl">“拠点主義”体制から<br class="sp">ジャストインタイムでデリバリー</h2>
        </div>
</section>
<section id="workInner">
    
</section>

</main>
<?php get_footer(); ?>








