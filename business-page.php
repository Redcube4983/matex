<?php
/*
Template Name: business
*/
?>
<?php get_header(); ?>
<main id="mainWrap">
<div id="topTtlWrap">
    <div class="topTtlInner">
        <div class="topImg">
            <picture class="">
                    <source media="(max-width: 767px)" srcset="<?php echo get_template_directory_uri(); ?>/images/business/business-top-sp.jpg 1x,<?php echo get_template_directory_uri(); ?>/images/business/business-top-sp.jpg 2x">
                    <source media="(max-width: 920px)" srcset="<?php echo get_template_directory_uri(); ?>/images/business/business-top-pc.jpg 1x,<?php echo get_template_directory_uri(); ?>/images/business/business-top-pc.jpg 2x">
                    <img src="<?php echo get_template_directory_uri(); ?>/images/business/business-top-sp.jpg" srcset="<?php echo get_template_directory_uri(); ?>/images/business/business-top-pc.jpg 1x,<?php echo get_template_directory_uri(); ?>/images/business/business-top-pc.jpg 2x" alt="トップ背景画像">
                </picture>
        </div>
        <div class="ttlWrap">
            <span class="enTtl">Business</span>
            <h1 class="jpTtl">事業情報</h1>
        </div>
    </div>
</div>
<div id="panNavi">
    <ul class="list">
        <li>
            <a href="<?php echo esc_url( home_url( '/') ); ?>">TOP</a>
        </li>
        <li>
            <span>事業情報</span>
        </li>
    </ul>
</div>
    <section id="leadWrap">
        <div class="leadTtlWrap">
            <h2 class="jpTtl">お客様に身近な“鉄のスペシャリスト”として</h2>
        </div>
        <p class="textCenter">マテックスは、お客様の身近に事業拠点を配置する「拠点主義」により、質の高いサービスをタイムリーにお届けしています。<br class="pc">各工場で培われた技術と先進の設備を駆使し、コイルのスリットや厚中板のシャーリングなど高精度な加工を実施。<br class="pc">また、鉄のスペシャリストとして、お客様の課題解決のアドバイスや最新の技術情報などを提供し、お客様をサポートしています。</p>
    </section>
    
    
    <section class="businessInner">
        
        <span class="grayzone"></span>
        <div class="contents content1">
            <div class="contentImg">
                <img src="<?php echo get_template_directory_uri(); ?>/images/business/business-img01.jpg" alt="事業内容画像1">
            </div>
            <div class="txtWrap">
                <div class="txtInner">
                    <div class="contentTtl">
                        <span>Network</span>
                        <h3>販売/納品体制</h3>
                    </div>
                    <p>お客様に密着した体制から、<br>質の高い製品・サービスをデリバリー。</p>
                </div>
                <div class="moreButtonWrap">
                    <a href="networks" class="moreButton">more</a>
                </div>
            </div>
        </div>
    
        <span class="grayzone"></span>
        <div class="contents content2">
            <div class="contentImg">
                <img src="<?php echo get_template_directory_uri(); ?>/images/business/business-img02.jpg" alt="事業内容画像2">
            </div>
            <div class="txtWrap">
                <div class="txtInner">
                    <div class="contentTtl">
                        <span>Production</span>
                        <h3>生産体制</h3>
                    </div>
                    <p>充実した加工設備と熟練のスタッフが<br>付加価値の高い製品をクリエイト。</p>
                </div>
                <div class="moreButtonWrap">
                    <a href="production" class="moreButton">more</a>
                </div>
            </div>
        </div>
        <span class="grayzone"></span>
        <div class="contents content1">
            <div class="contentImg">
                <img src="<?php echo get_template_directory_uri(); ?>/images/business/business-img03.jpg" alt="事業内容画像3">
            </div>
            <div class="txtWrap">
                <div class="txtInner">
                    <div class="contentTtl">
                        <span>Support</span>
                        <h3>技術サポート体制</h3>
                    </div>
                    <p>Faithful Partnerをモットーに<br>vお客様の様々なニーズに対応。</p>
                </div>
                <div class="moreButtonWrap">
                    <a href="support" class="moreButton">more</a>
                </div>
            </div>
        </div>
        
        
      
    </section>
    </main>
<?php get_footer(); ?>

