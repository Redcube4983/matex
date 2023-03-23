<?php
/*
Template Name: production
*/
?>
<?php get_header(); ?>
<main id="mainWrap">
<div id="topTtlWrap">
    <div class="topTtlInner">
        <div class="topImg">
            <picture class="">
                    <source media="(max-width: 767px)" srcset="<?php echo get_template_directory_uri(); ?>/images/business/production/production-top-sp.jpg 1x,<?php echo get_template_directory_uri(); ?>/images/business/production/production-top-sp.jpg 2x">
                    <source media="(max-width: 920px)" srcset="<?php echo get_template_directory_uri(); ?>/images/business/production/production-top-pc.jpg 1x,<?php echo get_template_directory_uri(); ?>/images/business/production/production-top-pc.jpg 2x">
                    <img src="<?php echo get_template_directory_uri(); ?>/images/business/production/production-top-sp.jpg" srcset="<?php echo get_template_directory_uri(); ?>/images/business/production/production-top-pc.jpg 1x,<?php echo get_template_directory_uri(); ?>/images/business/production/production-top-pc.jpg 2x" alt="トップ背景画像">
                </picture>
        </div>
        <div class="ttlWrap">
            <span class="enTtl">Production</span>
            <h1 class="jpTtl">生産体制</h1>
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
            <span>生産体制</span>
        </li>
    </ul>
</div>
<section id="leadWrap">
        <div class="leadTtlWrap">
            <h2 class="jpTtl">設備・技術・人が、<br class="sp">付加価値の高い製品をクリエイト</h2>
        </div>
        <p class="textCenter">日本における鋼板コイル生産の黎明期からコイル関連技術ひとすじに取り組み、コイルの扱いについて知り尽くしていることがマテックスの大きな技術資産です。その設備体制はつねに進化し、板厚6.0mm 780MPaの高張力鋼まで加工可能な自動刃替え装置(ダミーアーバー)式スリッターライン、刃組みまでも自動化した自動刃替え装置(ロボット)式スリッターライン、超高精度のフルp-ト・シャーリングなどを含む多くの新鋭機器で構成されています。また、経験豊かな技術スタッフが、コイル加工技術のノウハウを極めている点でも他社の追随を許しません。この設備・技術・人一体の高度のハーモニーを緻密な品質管理体制がフォローし、自動車メーカー、精密機械メーカーなどを含むきわめてシビアなニーズに対応し、高い評価をいただいています。</p>
</section>
<section id="productionWrap">
    <div id="imgWrap">
        <div class="innerWrap1">
            <ul>
                <li>
                    <img src="<?php echo get_template_directory_uri(); ?>/images/business/production/productionImg01.jpg" alt="生産体制イメージ画像">
                </li>
                <li>
                    <img src="<?php echo get_template_directory_uri(); ?>/images/business/production/productionImg02.jpg" alt="生産体制イメージ画像">
                </li>
            </ul>
        </div>
        <div class="innerWrap2">
            <ul>
                <li>
                    <img src="<?php echo get_template_directory_uri(); ?>/images/business/production/productionImg03.jpg" alt="生産体制イメージ画像">
                </li>
                <li>
                    <img src="<?php echo get_template_directory_uri(); ?>/images/business/production/productionImg04.jpg" alt="生産体制イメージ画像">
                </li>
            </ul>
        </div>
        <div class="innerWrap3">
            <ul>
                <li>
                <img src="<?php echo get_template_directory_uri(); ?>/images/business/production/productionImg05.jpg" alt="生産体制イメージ画像">
                </li>
                <li>
                <img src="<?php echo get_template_directory_uri(); ?>/images/business/production/productionImg06.jpg" alt="生産体制イメージ画像">
                </li>
                <li>
                <img src="<?php echo get_template_directory_uri(); ?>/images/business/production/productionImg07.jpg" alt="生産体制イメージ画像">
                </li>
            </ul>
        </div>
    </div>
    <div id="productionChart">
        <h3 class="">工場設備一覧</h3>
        <h4 class="">■栃木工場</h4>
        <div class="chartInnerWrap">
<!--
        <table>
            <tr>
                <th class="table1"  rowspan="2">設備名</th>
                <th class="table2" colspan="5">母材使用</th>
                <th class="table2" colspan="4">製品使用</th>
            </tr>
            <tr class="table34wrap">
                <td class="table3">板厚（mm）</th>
                <td class="table3">板幅（mm）</th>
                <td class="table3">コイル内径（mm）</th>
                <td class="table3">コイル外径（mm）</th>
                <td class="table3">積載重量（㌧max）</th>
                <td class="table4"></th>
                <td class="table3">内径（mm max）</th>
                <td class="table3">外形（mm max）</th>
                <td class="table3">製品重量（㌧）</th>
            </tr>
    </table>
-->
            <table border="1">
            <tr>
            <td rowspan="3">結合セル</td>
            <td>セル</td>
            <td>セル</td>
            </tr>
            <tr>
            <td>セル</td>
            <td>セル</td>
            </tr>
            <tr>
            <td>セル</td>
            <td>セル</td>
            </tr>
            </table>
        </div>
    </div>
</section>

</main>
<?php get_footer(); ?>

