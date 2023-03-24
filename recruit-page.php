<?php
/*
Template Name: recruit
*/
?>
<?php get_header(); ?>
<main id="mainWrap">
<div id="topTtlWrap">
    <div class="topTtlInner">
        <div class="topImg">
            <picture class="">
                    <source media="(max-width: 767px)" srcset="<?php echo get_template_directory_uri(); ?>/images/recruit/recruit-top-sp.jpg 1x,<?php echo get_template_directory_uri(); ?>/images/recruit/recruit-top-sp.jpg 2x">
                    <source media="(max-width: 920px)" srcset="<?php echo get_template_directory_uri(); ?>/images/recruit/recruit-top-pc.jpg 1x,<?php echo get_template_directory_uri(); ?>/images/recruit/recruit-top-pc.jpg 2x">
                    <img src="<?php echo get_template_directory_uri(); ?>/images/recruit/recruit-top-sp.jpg" srcset="<?php echo get_template_directory_uri(); ?>/images/recruit/recruit-top-pc.jpg 1x,<?php echo get_template_directory_uri(); ?>/images/recruit/recruit-top-pc.jpg 2x" alt="トップ背景画像">
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
        <div class="leadTtlWrap">
            <h2 class="jpTtl">あらゆる産業を支えるダイナミックな仕事</h2>
        </div>
        <p class="textCenter">私たちの生活を支えている「鉄」製品は、太古の昔から使われてきました。
時に重厚長大に、時に繊細でしなやかに、時代の変化とともにへ変幻自在に形状や性質を変え存在してきました。社会に貢献し続ける「鉄」のように、既成概念にとらわれず、自由な発想を持った挑戦できる人材を求めています。</p>
    </section>
    
    
    <section class="recruitInner">
        
        <span class="grayzone"></span>
        <div class="contents content1">
            <div class="contentImg">
                <img src="<?php echo get_template_directory_uri(); ?>/images/recruit/recruitImg01.jpg" alt="企業情報画像1">
            </div>
            <div class="txtWrap">
                <div class="txtInner">
                    <div class="contentTtl">
                        <span>Company</span>
                        <h3>会社を知る</h3>
                    </div>
                    <p>鉄の可能性、鋼材流通業界と<br>マテックスの役割をご紹介します。</p>
                </div>
                <div class="moreButtonWrap">
                    <a href="#" class="moreButton">more</a>
                </div>
            </div>
        </div>
    
        <span class="grayzone"></span>
        <div class="contents content2">
            <div class="contentImg">
                <img src="<?php echo get_template_directory_uri(); ?>/images/recruit/recruitImg02.jpg" alt="企業情報画像2">
            </div>
            <div class="txtWrap">
                <div class="txtInner">
                    <div class="contentTtl">
                        <span>More</span>
                        <h3>仕事を知る</h3>
                    </div>
                    <p>社会と鉄をつなぐ架け橋として、<br>ヤリガイのある仕事がここにあります。</p>
                </div>
                <div class="moreButtonWrap">
                    <a href="" class="moreButton">more</a>
                </div>
            </div>
        </div>
        <span class="grayzone"></span>
        <div class="contents content1">
            <div class="contentImg">
                <img src="<?php echo get_template_directory_uri(); ?>/images/recruit/recruitImg03.jpg" alt="企業情報画像3">
            </div>
            <div class="txtWrap">
                <div class="txtInner">
                    <div class="contentTtl">
                        <span>Requirement</span>
                        <h3>募集要項</h3>
                    </div>
                    <p>新卒採用・キャリア採用の情報は<br>こちらからご確認ください。</p>
                </div>
                <div class="moreButtonWrap">
                    <a href="#" class="moreButton">more</a>
                </div>
            </div>
        </div>
        
        
    </section>
    </main>
<?php get_footer(); ?>

