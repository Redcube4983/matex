<?php
/*
Template Name: salesjob
*/
?>
<?php get_header(); ?>
<main id="mainWrap">
<div id="topTtlWrap">
    <div class="topTtlInner">
        <div class="topImg">
            <picture class="">
                    <source media="(max-width: 767px)" srcset="<?php echo get_template_directory_uri(); ?>/images/recruit/work/salesJob/salesJob-top-sp.jpg 1x,<?php echo get_template_directory_uri(); ?>/images/recruit/work/salesJob/salesJob-top-sp.jpg 2x">
                    <source media="(max-width: 920px)" srcset="<?php echo get_template_directory_uri(); ?>/images/recruit/work/salesJob/salesJob-top-pc.jpg 1x,<?php echo get_template_directory_uri(); ?>/images/recruit/work/salesJob/salesJob-top-pc.jpg 2x">
                    <img src="<?php echo get_template_directory_uri(); ?>/images/recruit/work/salesJob/salesJob-top-sp.jpg" srcset="<?php echo get_template_directory_uri(); ?>/images/recruit/work/salesJob/salesJob-top-pc.jpg 1x,<?php echo get_template_directory_uri(); ?>/images/recruit/work/salesJob/salesJob-top-pc.jpg 2x" alt="トップ背景画像">
                </picture>
        </div>
        <div class="ttlWrap">
            <span class="enTtl">Sales Job</span>
            <h1 class="jpTtl">営業職</h1>
        </div>
    </div>
</div>
<div id="panNavi">
    <ul class="list">
        <li>
            <a href="<?php echo esc_url( home_url( '/') ); ?>">TOP</a>
        </li>
        <li>
            <a href="/recruit/">採用情報</a>
        </li>
        <li>
            <a href="/work/">仕事を知る</a>
        </li>
        <li>
            <span>営業職</span>
        </li>
    </ul>
</div>
<section id="workSub">
    <div class="jobLeadWrap">
        <span>先輩社員インタビュー</span>
        <h4>お客様にいただく「ありがとう」<br class="sp">の一言が最高のヤリガイ</h4>
    </div>
    <div class="profileWrap">
        <div class="img">
            <img src="<?php echo get_template_directory_uri(); ?>/images/recruit/work/salesJob/salesJobImg01.jpg" alt="">
        </div>
    </div>
</section>


</main>
<?php get_footer(); ?>








