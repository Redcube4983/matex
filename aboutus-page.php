<?php
/*
Template Name: aboutus
*/
?>
<?php get_header(); ?>
<main id="mainWrap">
<div id="topTtlWrap">
    <div class="topTtlInner">
        <div class="topImg">
            <picture class="">
                    <source media="(max-width: 767px)" srcset="<?php echo get_template_directory_uri(); ?>/images/aboutus/about-top-sp.jpg 1x,<?php echo get_template_directory_uri(); ?>/images/aboutus/about-top-sp.jpg 2x">
                    <source media="(max-width: 920px)" srcset="<?php echo get_template_directory_uri(); ?>/images/aboutus/about-top-pc.jpg 1x,<?php echo get_template_directory_uri(); ?>/images/aboutus/about-top-pc.jpg 2x">
                    <img src="<?php echo get_template_directory_uri(); ?>/images/aboutus/about-top-sp.jpg" srcset="<?php echo get_template_directory_uri(); ?>/images/aboutus/about-top-pc.jpg 1x,<?php echo get_template_directory_uri(); ?>/images/aboutus/about-top-pc.jpg 2x" alt="トップ背景画像">
                </picture>
        </div>
        <div class="ttlWrap">
            <span class="enTtl">About us</span>
            <h1 class="jpTtl">企業情報</h1>
        </div>
    </div>
</div>
<div id="panNavi">
    <ul class="list">
        <li>
            <a href="<?php echo esc_url( home_url( '/') ); ?>">TOP</a>
        </li>
        <li>
            <span>企業情報</span>
        </li>
    </ul>
</div>
    <section id="leadWrap">
        <div class="leadTtlWrap">
            <span class="enTtl">For Material Bridge</span>
            <h2 class="jpTtl">社会と鉄とをつなぐ、架け橋でありたい</h2>
        </div>
        <p class="textCenter">私たちマテックスは、1937年の創業以来、鋼材の販売、コイルのスリットや厚中板のシャーリングなどの加工を手がけて、<br class="pc">設備、技術、流通サービスのいずれにおいても業界トップレベルのコイルセンターとして、お客様の厚い信頼をいただいています。<br>
        社会と鉄をつなぐ架け橋としてー。私たちはこれからも優れた製品・サービスの提供を通じて、お客様のモノづくりを支え、<br class="pc">よりよい未来(あす)の創造に貢献してまいります。
        </p>
    </section>
    
    
    <section class="aboutInner">
        
        <span class="grayzone"></span>
        <div class="contents content1">
            <div class="contentImg">
                <img src="<?php echo get_template_directory_uri(); ?>/images/aboutus/about-img01-pc.jpg" alt="企業情報画像1">
            </div>
            <div class="txtWrap">
                <div class="txtInner">
                    <div class="contentTtl">
                        <span>Top message</span>
                        <h3>代表メッセージ</h3>
                    </div>
                    <p>ダミーダミーダミーダミーダミーダミー<br>ダミーダミーダミーダミー</p>
                </div>
                <div class="moreButtonWrap">
                    <a href="/message/" class="moreButton">more</a>
                </div>
            </div>
        </div>
    
        <span class="grayzone"></span>
        <div class="contents content2">
            <div class="contentImg">
                <img src="<?php echo get_template_directory_uri(); ?>/images/aboutus/about-img02-pc.jpg" alt="企業情報画像2">
            </div>
            <div class="txtWrap">
                <div class="txtInner">
                    <div class="contentTtl">
                        <span>Company profile</span>
                        <h3>会社概要</h3>
                    </div>
                    <p>ダミーダミーダミーダミーダミーダミーダミーダミー<br>ダミーダミーダミーダミーダミーダミーダミーダミーダミー
                    </p>
                </div>
                <div class="moreButtonWrap">
                    <a href="/profile/" class="moreButton">more</a>
                </div>
            </div>
        </div>
        <span class="grayzone"></span>
        <div class="contents content1">
            <div class="contentImg">
                <img src="<?php echo get_template_directory_uri(); ?>/images/aboutus/about-img03-pc.jpg" alt="企業情報画像3">
            </div>
            <div class="txtWrap">
                <div class="txtInner">
                    <div class="contentTtl">
                        <span>Business base</span>
                        <h3>事業拠点</h3>
                    </div>
                    <p>ダミーダミーダミーダミーダミーダミーダミーダミー<br>ダミーダミーダミーダミーダミーダミーダミー</p>
                </div>
                <div class="moreButtonWrap">
                    <a href="/businessBase/" class="moreButton">more</a>
                </div>
            </div>
        </div>
        
        <span class="grayzone"></span>
        <div class="contents content2">
            <div class="contentImg">
                <img src="<?php echo get_template_directory_uri(); ?>/images/aboutus/about-img04-pc.jpg" alt="企業情報画像4">
            </div>
            <div class="txtWrap">
                <div class="txtInner">
                    <div class="contentTtl">
                        <span>Quality/Environmental</span>
                        <h3>品質・環境への取り組み</h3>
                    </div>
                    <p>ダミーダミーダミーダミーダミーダミーダミー<br>ダミーダミーダミーダミーダミーダミー</p>
                </div>
                <div class="moreButtonWrap">
                    <a href="/puality/" class="moreButton">more</a>
                </div>
            </div>
        </div>
    </section>
    </main>
<?php get_footer(); ?>

