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
                    <source media="(max-width: 767px)" srcset="<?php echo get_template_directory_uri(); ?>/images/quality/quality-top-sp.jpg 1x,<?php echo get_template_directory_uri(); ?>/images/quality/quality-top-sp.jpg 2x">
                    <source media="(max-width: 920px)" srcset="<?php echo get_template_directory_uri(); ?>/images/quality/quality-top-pc.jpg 1x,<?php echo get_template_directory_uri(); ?>/images/quality/quality-top-pc.jpg 2x">
                    <img src="<?php echo get_template_directory_uri(); ?>/images/quality/quality-top-sp.jpg" srcset="<?php echo get_template_directory_uri(); ?>/images/quality/quality-top-pc.jpg 1x,<?php echo get_template_directory_uri(); ?>/images/quality/quality-top-pc.jpg 2x" alt="トップ背景画像">
                </picture>
        </div>
        <div class="ttlWrap">
            <span class="enTtl">Quality/<br class="sp">Environmental</span>
            <h1 class="jpTtl">品質・環境への取り組み</h1>
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
            <span>品質・環境への取り組み</span>
        </li>
    </ul>
</div>
<section id="leadWrap">
    <div class="leadTtlWrap">
    <h2 class="jpTtl">クオリティを高め、環境負荷を軽減</h2>
    </div>
    <p class="textCenter">マテックスは、ISO9001、ISO14001の認証を取得し、技術のグローバルスタンダードを確立しており、<br class="pc">さらに当社の理念にもとづく環境負荷低減のため、廃棄物の排出削減とリサイクルをはかりながら、<br class="pc">資源とエネルギーの有効利用をめざしています。</p>
</section>

<section id="qualityInner">
    <ul>
        <li>
            <h3>品質方針</h3>
            <p>品質絶対をモットーに顧客の要求品質に適合した製品をタイムリーに提供し、弛まぬ改善で顧客の信頼に応える。</p>
        </li>
        <li>
            <h3>環境理念</h3>
            <p>地球環境の保全は人類共通の重要課題として認識し、住み良い環境を次世代に引き継ぐことを義務として企業活動を通じて環境負荷の低減に努めます。</p>
        </li>
        <li>
            <h3>環境方針</h3>
            <p>株式会社マテックスは自動車、家電、建材等の分野で必要とされる薄板素材を供給しています。<br class="pc">この事業の中で当社の理念及びJIS Q 14001に基づき構築した環境マネジメントシステムで環境負荷低減の実現をめざし、以下の事業活動を行います。</p>
            <ol class="olwrap">
                <li>
                    <p>環境方針の実現のために著しい及び有益な環境側面を抽出し、環境目標を設定して、企業活動を推進すると共に定期的に見直し、継続的な活動に努めます。</p>
                </li>
                <li>
                    <p>環境負荷低減のため、廃棄物の排出削減とリサイクルを図り、又資源及びエネルギーの有効利用を推進します。</p>
                </li>
                <li>
                    <p>関連する法規制及び当社が同意するその他の要求事項を順守して環境保全に努めます。</p>
                </li>
                <li>
                    <p>社員の環境意識昂揚のため、環境教育を推進します。</p>
                </li>
                <li>
                    <p>この環境方針は、全社員に周知すると共に協力会社にも環境方針を伝達し、理解と協力を要請します。</p>
                </li>
                <li>
                    <p>この環境方針は、要求に応じて社外に公開します。</p>
                </li>
            </ol>
        </li>
    </ul>
</section>
    
</main>
<?php get_footer(); ?>