<?php
/*
Template Name: policy
*/
?>
<?php get_header(); ?>
<main id="mainWrap">
<div id="topTtlWrap">
    <div class="topTtlInner">
        <div class="topImg">
            <picture class="">
                    <source media="(max-width: 767px)" srcset="<?php echo get_template_directory_uri(); ?>/images/policy/company-top-sp.jpg 1x,<?php echo get_template_directory_uri(); ?>/images/policy/company-top-sp.jpg 2x">
                    <source media="(max-width: 920px)" srcset="<?php echo get_template_directory_uri(); ?>/images/policy/company-top-pc.jpg 1x,<?php echo get_template_directory_uri(); ?>/images/policy/company-top-pc.jpg 2x">
                    <img src="<?php echo get_template_directory_uri(); ?>/images/policy/company-top-sp.jpg" srcset="<?php echo get_template_directory_uri(); ?>/images/policy/company-top-pc.jpg 1x,<?php echo get_template_directory_uri(); ?>/images/policy/company-top-pc.jpg 2x" alt="トップ背景画像">
            </picture>
        </div>
        <div class="ttlWrap">
            <span class="enTtl">Company</span>
            <h1 class="jpTtl">会社を知る</h1>
        </div>
    </div>
</div>
<div id="panNavi">
    <ul class="list">
        <li>
            <a href="<?php echo esc_url( home_url( '/') ); ?>">TOP</a>
        </li>
        <li>
            <a href="/policy/">個人情報保護方針</a>
        </li>
        <li>
            <span>会社を知る</span>
        </li>
    </ul>
</div>
<section id="leadWrap">
        <div class="leadTtlWrap">
            <h2 class="jpTtl">社会と鉄の未来をひらく、<br class="sp">鋼材流通のパイオニア</h2>
        </div>
        <p class="textCenter">私たちの身の回りには「鉄」が溢れています。あなたの身の回りも見渡してみてください。<br>朝起きて顔を洗う時にひねる蛇口も・・・パンを焼くトースターも・・・卵をゆでるお鍋も・・・牛乳を冷やす冷蔵庫も・・・。これら「鉄」を使った製品は、空気と同様に私たちの生活に切り離すことのできないものです。暮らしの中のあらゆるシーンに「鉄」をお届けする鋼材流通のパイオニア、それが私たちマテックスです。</p>
</section>

</main>
<?php get_footer(); ?>

