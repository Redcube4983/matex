<?php
/*
Template Name: support
*/
?>
<?php get_header(); ?>
<main id="mainWrap">
<div id="topTtlWrap">
    <div class="topTtlInner">
        <div class="topImg">
            <picture class="">
                    <source media="(max-width: 767px)" srcset="<?php echo get_template_directory_uri(); ?>/images/business/support/support-top-sp.jpg 1x,<?php echo get_template_directory_uri(); ?>/images/business/support/support-top-sp.jpg 2x">
                    <source media="(max-width: 920px)" srcset="<?php echo get_template_directory_uri(); ?>/images/business/support/support-top-pc.jpg 1x,<?php echo get_template_directory_uri(); ?>/images/business/support/support-top-pc.jpg 2x">
                    <img src="<?php echo get_template_directory_uri(); ?>/images/business/support/support-top-sp.jpg" srcset="<?php echo get_template_directory_uri(); ?>/images/business/support/support-top-pc.jpg 1x,<?php echo get_template_directory_uri(); ?>/images/business/support/support-top-pc.jpg 2x" alt="トップ背景画像">
                </picture>
        </div>
        <div class="ttlWrap">
            <span class="enTtl">support</span>
            <h1 class="jpTtl">技術サポート体制</h1>
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
            <span>技術サポート体制</span>
        </li>
    </ul>
</div>
<section id="leadWrap">
        <div class="leadTtlWrap">
            <h2 class="jpTtl">Faithful Partnerをモットーに<br class="sp">独自のサービスを提供</h2
        </div>
        <div class="supportlogoWrap">
        <div class="logoWrap">
            <img src="<?php echo get_template_directory_uri(); ?>/images/business/support/supportImg01.svg" alt="">
        </div>
        <p class="textCenter">マテックスのポリシーにFaithful　Partner (フェイスフル パートナー※) の考えがあります。<br>社員やその家族、取引先やユーザーなどマテックスを取り巻く全ての人が仲間であり、「信頼し、信頼され、いかなる時も誠実に」という考え方です。社内外におけるあらゆる活動はこの「Faithful　Partner」の考えに基づき決定してきました。創業以来着実に成長してこられたのも、「Faithful　Partner」を徹底してきたことで信頼をかち得たからだと信じています。<br>マテックスはこれからも「Faithful　Partner」を掲げ、鉄鋼業の裾野を支え、持続可能な暮らしを築くために不可欠な鉄の加工販売を通じ、より良い社会へ貢献してまいります。<br><br>※Faithful：信頼できる、誠実な／Partner：相手、仲間、共同者</p>
        </div>
</section>
<section id="supportWrap">
    
</section>

</main>
<?php get_footer(); ?>

