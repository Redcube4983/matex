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
            <a href="/recruit/">採用情報</a>
        </li>
        <li>
            <span>仕事を知る</span>
        </li>
    </ul>
</div>
<section id="leadWrap">
        <div class="leadTtlWrap">
            <h2 class="jpTtl">チャレンジの先にある、感動と喜びを求めて</h2>
        </div>
        <p class="">マテックスは、鋼鈑コイル生産の黎明期からコイル関連技術に取り組み、経験を蓄積し、さまざまな合理化を重ねて成長してきました。暮らしや産業に欠くことのできない「鉄」。私たちマテックスは、「鉄」を通じてあらゆる活動に創意をもって果敢にチャレンジしています。</p>
</section>
<section id="workInner">
    <div class="wrap wrap1">
        <div class="img">
            <img src="<?php echo get_template_directory_uri(); ?>/images/recruit/work/workImg01.jpg" alt="">
        </div>
        <div class="rightWrap">
            <h3>営業職</h3>
            <h4>お客様にいただく「ありがとう」の一言が<br class="sp">最高のヤリガイ</h4>
            <p>ダミーダミーダミーダミーダミーダミーダミーダミーダミーダミーダミーダミーダミーダミーダミーダミーダミーダミーダミーダミーダミーダミーダミーダミーダミーダミーダミーダミーダミ。</p>
            <div class="buttonWrap">
                <a href="/salesjob/">先輩社員の声を聴いてみよう</a>
            </div>
        </div>
    </div>
    <div class="wrap wrap2">
        <div class="img">
            <img src="<?php echo get_template_directory_uri(); ?>/images/recruit/work/workImg02.jpg" alt="">
        </div>
        <div class="rightWrap">
            <h3>技術職</h3>
            <h4>より速く精密に。技術を極める<br class="sp">コイル加工のスペシャリスト</h4>
            <p>ダミーダミーダミーダミーダミーダミーダミーダミーダミーダミーダミーダミーダミーダミーダミーダミーダミーダミーダミーダミーダミーダミーダミーダミーダミーダミーダミーダミーダミ。</p>
            <div class="buttonWrap">
                <a href="/technical/">先輩社員の声を聴いてみよう</a>
            </div>
        </div>
    </div>
    <div class="wrap wrap3">
        <div class="img">
            <img src="<?php echo get_template_directory_uri(); ?>/images/recruit/work/workImg03.jpg" alt="">
        </div>
        <div class="rightWrap">
            <h3>業務職</h3>
            <h4>会社のあれこれをマネジメントする縁の下の力持ち</h4>
            <p>ダミーダミーダミーダミーダミーダミーダミーダミーダミーダミーダミーダミーダミーダミーダミーダミーダミーダミーダミーダミーダミーダミーダミーダミーダミーダミーダミーダミーダミ。</p>
            <div class="buttonWrap">
                <a href="/officejob/">先輩社員の声を聴いてみよう</a>
            </div>
        </div>
    </div>
</section>

</main>
<?php get_footer(); ?>








