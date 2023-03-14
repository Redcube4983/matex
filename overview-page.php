<?php
/*
Template Name: overview
*/
?>
<?php get_header(); ?>

<body>
<div id="topTtlWrap">
    <div class="topTtlInner">
        <div class="topImg">
            <picture class="">
                    <source media="(max-width: 767px)" srcset="<?php echo get_template_directory_uri(); ?>/images/message/message-top-sp.jpg 1x,<?php echo get_template_directory_uri(); ?>/images/message/message-top-sp.jpg 2x">
                    <source media="(max-width: 920px)" srcset="<?php echo get_template_directory_uri(); ?>/images/message/message-top-pc.jpg 1x,<?php echo get_template_directory_uri(); ?>/images/message/message-top-pc.jpg 2x">
                    <img src="<?php echo get_template_directory_uri(); ?>/images/message/message-top-sp.jpg" srcset="<?php echo get_template_directory_uri(); ?>/images/message/message-top-pc.jpg 1x,<?php echo get_template_directory_uri(); ?>/images/message/message-top-pc.jpg 2x" alt="トップ背景画像">
                </picture>
        </div>
        <div class="ttlWrap">
            <span class="enTtl">Top Message</span>
            <h1 class="jpTtl">代表メッセージ</h1>
        </div>
    </div>
</div>
<div id="panNavi">
    <ul class="list">
        <li>
            <a href="/">TOP</a>
        </li>
        <li>
            <span>代表メッセージ</span>
        </li>
    </ul>
</div>
<?php get_footer(); ?>
</body>