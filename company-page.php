<?php
/*
Template Name: company
*/
?>
<?php get_header(); ?>
<main id="mainWrap">
<div id="topTtlWrap">
    <div class="topTtlInner">
        <div class="topImg">
            <picture class="">
                    <source media="(max-width: 767px)" srcset="<?php echo get_template_directory_uri(); ?>/images/recruit/company/company-top-sp.jpg 1x,<?php echo get_template_directory_uri(); ?>/images/recruit/company/company-top-sp.jpg 2x">
                    <source media="(max-width: 920px)" srcset="<?php echo get_template_directory_uri(); ?>/images/recruit/company/company-top-pc.jpg 1x,<?php echo get_template_directory_uri(); ?>/images/recruit/company/company-top-pc.jpg 2x">
                    <img src="<?php echo get_template_directory_uri(); ?>/images/recruit/company/company-top-sp.jpg" srcset="<?php echo get_template_directory_uri(); ?>/images/recruit/company/company-top-pc.jpg 1x,<?php echo get_template_directory_uri(); ?>/images/recruit/company/company-top-pc.jpg 2x" alt="トップ背景画像">
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
            <a href="/recruit/">採用情報</a>
        </li>
        <li>
            <span>会社を知る</span>
        </li>
    </ul>
</div>
<section id="leadWrap">
        <div class="leadTtlWrap">
            <h2 class="jpTtl">設備・技術・人が、<br class="sp">付加価値の高い製品をクリエイト</h2>
        </div>
        <p class="textCenter">日本における鋼板コイル生産の黎明期からコイル関連技術ひとすじに取り組み、コイルの扱いについて知り尽くしていることがマテックスの大きな技術資産です。その設備体制はつねに進化し、板厚6.0mm 780MPaの高張力鋼まで加工可能な自動刃替え装置(ダミーアーバー)式スリッターライン、刃組みまでも自動化した自動刃替え装置(ロボット)式スリッターライン、超高精度のフルp-ト・シャーリングなどを含む多くの新鋭機器で構成されています。また、経験豊かな技術スタッフが、コイル加工技術のノウハウを極めている点でも他社の追随を許しません。この設備・技術・人一体の高度のハーモニーを緻密な品質管理体制がフォローし、自動車メーカー、精密機械メーカーなどを含むきわめてシビアなニーズに対応し、高い評価をいただいています。</p>
</section>
<section id="recruitWrap">
    
    
</section>

</main>
<?php get_footer(); ?>

