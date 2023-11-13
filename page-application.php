<?php
/*
Template Name:application
*/
?>
<?php get_header(); ?>

<main id="mainWrap">
<div id="main-visual">
    <div class="topTtlInner">
        <div class="topImg">
            <picture class="">
                    <source media="(max-width: 767px)" srcset="<?php echo get_template_directory_uri(); ?>/images/recruit/recruit-top-sp.jpg 1x,<?php echo get_template_directory_uri(); ?>/images/recruit/recruit-top-sp.jpg 2x">
                    <source media="(max-width: 920px)" srcset="<?php echo get_template_directory_uri(); ?>/images/recruit/recruit-top-pc.webp 1x,<?php echo get_template_directory_uri(); ?>/images/recruit/recruit-top-pc.webp 2x">
                    <img src="<?php echo get_template_directory_uri(); ?>/images/recruit/recruit-top-sp.jp" srcset="<?php echo get_template_directory_uri(); ?>/images/recruit/recruit-top-pc.webp 1x,<?php echo get_template_directory_uri(); ?>/images/recruit/recruit-top-pc.webp 2x" alt="トップ背景画像">
                </picture>
        </div>
        <div class="ttlWrap">
            <span class="enTtl">Recruit</span>
            <h1 class="jpTtl">採用情報</h1>
        </div>
    </div>
</div>
<div id="panNavi">
    <ul class="list">
        <li>
            <a href="<?php echo esc_url( home_url( '/') ); ?>">TOP</a>
        </li>
        <li>
            <span>採用情報</span>
        </li>
    </ul>
</div>
    <section id="leadWrap">
        <div class="leadTtlWrap animate-bottom">
            <h2 class="jpTtl">あらゆる産業を支えるダイナミックな仕事</h2>
        </div>
        <p class="textCenter animate-bottom">私たちの生活を支えている「鉄」製品は、太古の昔から使われてきました。
時に重厚長大に、時に繊細でしなやかに、<br class="pc">時代の変化とともにへ変幻自在に形状や性質を変え存在してきました。社会に貢献し続ける「鉄」のように、既成概念にとらわれず、自由な発想を持った挑戦できる人材を求めています。</p>
    </section>
    
    </main>
<?php get_footer(); ?>

