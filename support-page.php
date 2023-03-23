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
            <img src="<?php echo get_template_directory_uri(); ?>/images/business/support/supportImg01.svg" alt="サポート体制ロゴ画像">
        </div>
        <p class="textCenter">マテックスのポリシーにFaithful　Partner (フェイスフル パートナー※) の考えがあります。<br>社員やその家族、取引先やユーザーなどマテックスを取り巻く全ての人が仲間であり、「信頼し、信頼され、いかなる時も誠実に」という考え方です。社内外におけるあらゆる活動はこの「Faithful　Partner」の考えに基づき決定してきました。創業以来着実に成長してこられたのも、「Faithful　Partner」を徹底してきたことで信頼をかち得たからだと信じています。<br>マテックスはこれからも「Faithful　Partner」を掲げ、鉄鋼業の裾野を支え、持続可能な暮らしを築くために不可欠な鉄の加工販売を通じ、より良い社会へ貢献してまいります。<span>※Faithful：信頼できる、誠実な／Partner：相手、仲間、共同者</span></p>
        </div>
</section>
<section id="supportWrap">
     <h3>Faithful Partnerに基づき、<br class="sp">少しでもお客様のお役に立てるよう活動しています。
</h3>
    <div class="innerWrap1">
        <div class="img">
            <img src="<?php echo get_template_directory_uri(); ?>/images/business/support/supportImg02.jpg" alt="技術サポート体制画像">
        </div>
        <div class="textWrap">
            <h4>技術顧問によるソリューション提案</h4>
            <p>鉄のことを知り尽くしたマテックスの技術顧問がお客様のもとへお伺いし、不良品発生のお悩みや、加工技術の問題点などについての丁寧にヒアリングし、改善策、解決策をご提案しています。</p>
        </div>
    </div>
    <div class="innerWrap2">
        <div class="img">
            <img src="<?php echo get_template_directory_uri(); ?>/images/business/support/supportImg03.jpg" alt="技術サポート体制画像">
        </div>
        <div class="textWrap">
            <h4>プレス技術講習会</h4>
            <p>1998年から毎年、栃木・福島・群馬・埼玉の4会場で開催し、毎回数百名のお客様が参加されています。鉄鋼メーカーで薄鋼板の成形・利用技術に関する研究に幅広く携わってきたマテックスの技術顧問が、鉄鋼薄板製品、塑性力学、塑性加工、新工法・新技術などの分野で、基礎技術から応用技術まで、広範囲にわたった講演を行っています。<br>また、この講習会では鉄鋼事情の最新情報を発信するとともに、普段なかなか機会が無い鉄鋼メーカーとお客様が顔を会わせることのできる場として、 鉄鋼業界の活性化の役割も果たしています。</p>
        </div>
    </div>
</section>
<section id="cta-area">
    <div class="button"><a href=""><span>プレス技術講習会の資料はこちら</span></a></div>

</section>

</main>
<?php get_footer(); ?>

