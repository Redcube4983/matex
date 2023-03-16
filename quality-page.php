<?php
/*
Template Name: quality
*/
?>
<?php get_header(); ?>
<main id="mainWrap">
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
            <a href="<?php echo esc_url( home_url( '/') ); ?>">TOP</a>
        </li>
        <li>
            <a href="/aboutus/">企業情報</a>
        </li>
        <li>
            <span>代表メッセージ</span>
        </li>
    </ul>
</div>
<section id="leadWrap">
    <div class="leadTtlWrap">
    <h2 class="jpTtl">信頼し、信頼され、いかなる時も誠実に</h2>
    </div>
    <p class="">私たちは長い間技術を蓄積し、さまざまな面で合理化を重ねてまいりましたが、その目的はただひとつ、「お客様にご満足をいただく」ことです。マテックスの社員教育の根幹は、お客様最優先の意識の徹底です。私たちは社内外におけるあらゆる活動、決定を「どうすればお客様にご満足いただけるか」という一点に絞って対処してきました。創業以来、激動の年月を着実に成長し続けることができましたのも、この単純明快な信念に徹してきたことで、長くお客様の信頼をかち得たからだと信じています。<br>マテックスはこれからもこの信念を曲げることなく、新しい時代に立ち向かってまいります。</p>
</section>
    
</main>
<?php get_footer(); ?>