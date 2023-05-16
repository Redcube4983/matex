<?php
/*
Template Name: aboutusing
*/
?>
<?php get_header(); ?>
<main id="mainWrap">
<div id="main-visual">
    <div class="topTtlInner">
        <div class="topImg">
            <picture class="">
                    <source media="(max-width: 767px)" srcset="<?php echo get_template_directory_uri(); ?>/images/aboutUsing/aboutUsing-top-sp.jpg 1x,<?php echo get_template_directory_uri(); ?>/images/aboutUsing/aboutUsing-top-sp.jpg 2x">
                    <source media="(max-width: 920px)" srcset="<?php echo get_template_directory_uri(); ?>/images/aboutUsing/aboutUsing-top-pc.jpg 1x,<?php echo get_template_directory_uri(); ?>/images/aboutUsing/aboutUsing-top-pc.jpg 2x">
                    <img src="<?php echo get_template_directory_uri(); ?>/images/aboutUsing/aboutUsing-top-sp.jpg" srcset="<?php echo get_template_directory_uri(); ?>/images/aboutUsing/aboutUsing-top-pc.jpg 1x,<?php echo get_template_directory_uri(); ?>/images/aboutUsing/aboutUsing-top-pc.jpg 2x" alt="トップ背景画像">
            </picture>
        </div>
        <div class="ttlWrap">
            <span class="enTtl">About Using The site</span>
            <h1 class="jpTtl">サイトのご利用について</h1>
        </div>
    </div>
</div>
<div id="panNavi">
    <ul class="list">
        <li>
            <a href="<?php echo esc_url( home_url( '/') ); ?>">TOP</a>
        </li>
        <li>
            <span>サイトのご利用について</span>
        </li>
    </ul>
</div>
<section id="leadWrap">
        <div class="leadTtlWrap animate-bottom">
            <h2 class="jpTtl">サイトのご利用について</h2>
        </div>
        <p class="animate-bottom">株式会社マテックスでは皆様に快適にウェブサイトをご利用できますよう心がけております。ウェブサイトのご利用にあたって下記の内容をご一読いただきますようお願いいたします。なお、ウェブサイトの掲載内容につきましては、予告なく変更することがございますのでご了承願います。 </p>
</section>
    
<section id="aboutUsingWrap">
    <div class="environmentWrap">
        <div class="aboutWrap">
            <h3 class="animate-bottom">ご利用環境について</h3>
            <p class="animate-bottom">当ウェブサイトは以下の環境での閲覧を推奨いたします。 </p>
        </div>
        <div class="pcWrap animate-fade"">
            <h4>PC</h4>
            <div class="recommendWrap">
                <div class="osWrap">
                    <h4 class="bs">●推奨OS</h4>
                    <ul>
                        <li>Windows10</li>
                        <li>MacOS X</li>
                    </ul>
                </div>
                <div class="browserWrap">
                    <h4 class="bs">●推奨ブラウザ</h4>
                    <ul>
                        <li>Google Chrome（最新版）</li>
                        <li>Firefox（最新版）</li>
                        <li>Safari（最新版）</li>
                        <li>Microsoft Edge（最新版）</li>
                    </ul>
                    <span>※他のブラウザでご覧になった際、一部コンテンツが正しく表示されない場合がございますので、あらかじめご了承ください。</span>
                </div>
            </div>
        </div>
        <div class="smartphonesWrap animate-fade">
            <h4>スマートホン</h4>
            <div class="recommendWrap">
                <div class="osWrap">
                    <h4 class="bs">●推奨OS</h4>
                    <ul>
                        <li>iOS12</li>
                        <li>Android7.0 以上</li>
                    </ul>
                </div>
                <div class="browserWrap">
                    <h4 class="bs">●推奨ブラウザ</h4>
                    <ul>
                        <li>iOS：Safari（最新版）</li>
                        <li>Google Chrome（最新版）</li>
                        <li>Firefox for Mobile（最新版）</li>
                        <li>Android：Chrome for Android（最新版）</li>
                        <li>Firefox for Mobile（最新版）</li>
                        <li>Android標準ブラウザ（最新版）</li>
                    </ul>
                    <span>※他のブラウザでご覧になった際、一部コンテンツが正しく表示されない場合がございますので、あらかじめご了承ください。</span>
                </div>
            </div>
        </div>
        <div class="jsWrap aboutWrap animate-bottom">
            <h3>JavaScriptについて</h3>
            <p>ウェブサイトは、JavaScriptを使用しています。JavaScriptを無効にされている場合はページが正しく表示されない場合が ございます。<br>当ウェブサイトご利用の際には、JavaScriptを有効に設定していただきますようお願いします。</p>
        </div>
        <div class="pluginWrap aboutWrap animate-bottom">
            <h3>プラグインについて</h3>
            <p>一部のコンテンツでは、以下のプラグインが必要です。インストールされていない場合は、リンクをクリックして最新のバージョンをダウンロードしてください。</p>
            <a href="">Adobe&reg; Reader&reg;</a>
        </div>
        <div class="policyWrap aboutWrap animate-bottom">
            <h3>個人情報の取扱いについて</h3>
            <p>個人情報の取り扱いについては、<a href="/policy/">個人情報保護方針</a>のページをご覧ください。 </p>
        </div>
    </div>
</section>

</main>
<?php get_footer(); ?>

