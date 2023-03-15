<?php
/*
Template Name: profile
*/
?>
<?php get_header(); ?>
<main id="mainWrap">
<div id="topTtlWrap">
    <div class="topTtlInner">
        <div class="topImg">
            <picture class="">
                    <source media="(max-width: 767px)" srcset="<?php echo get_template_directory_uri(); ?>/images/profile/profile-top-sp.jpg 1x,<?php echo get_template_directory_uri(); ?>/images/profile/profile-top-sp.jpg 2x">
                    <source media="(max-width: 920px)" srcset="<?php echo get_template_directory_uri(); ?>/images/profile/profile-top-pc.jpg 1x,<?php echo get_template_directory_uri(); ?>/images/profile/profile-top-pc.jpg 2x">
                    <img src="<?php echo get_template_directory_uri(); ?>/images/profile/profile-top-sp.jpg" srcset="<?php echo get_template_directory_uri(); ?>/images/profile/profile-top-pc.jpg 1x,<?php echo get_template_directory_uri(); ?>/images/profile/profile-top-pc.jpg 2x" alt="トップ背景画像">
                </picture>
        </div>
        <div class="ttlWrap">
            <span class="enTtl">Company profile</span>
            <h1 class="jpTtl">会社概要</h1>
        </div>
    </div>
</div>
<div id="panNavi">
    <ul class="list">
        <li>
            <a href="<?php echo esc_url( home_url( '/') ); ?>">TOP</a>
        </li>
        <li>
            <span>会社概要</span>
        </li>
    </ul>
</div>
    
</main>
<?php get_footer(); ?>