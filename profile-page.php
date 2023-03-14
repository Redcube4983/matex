<?php
/*
Template Name: profile
*/
?>
<?php get_header(); ?>
<main id="mainWrap">
<div id="topTtlWrap">
    <div class="topTtlInner">
        <div class="topImg">
            <picture class="">
                    <source media="(max-width: 767px)" srcset="<?php echo get_template_directory_uri(); ?>/images/profile/profile-top-sp.jpg 1x,<?php echo get_template_directory_uri(); ?>/images/profile/profile-top-sp.jpg 2x">
                    <source media="(max-width: 920px)" srcset="<?php echo get_template_directory_uri(); ?>/images/profile/profile-top-pc.jpg 1x,<?php echo get_template_directory_uri(); ?>/images/profile/profile-top-pc.jpg 2x">
                    <img src="<?php echo get_template_directory_uri(); ?>/images/profile/profile-top-sp.jpg" srcset="<?php echo get_template_directory_uri(); ?>/images/profile/profile-top-pc.jpg 1x,<?php echo get_template_directory_uri(); ?>/images/profile/profile-top-pc.jpg 2x" alt="トップ背景画像">
                </picture>
        </div>
        <div class="ttlWrap">
            <span class="enTtl">Company profile</span>
            <h1 class="jpTtl">会社概要</h1>
        </div>
    </div>
</div>
<div id="panNavi">
    <ul class="list">
        <li>
            <a href="<?php echo esc_url( home_url( '/') ); ?>">TOP</a>
        </li>
        <li>
            <span>会社概要</span>
        </li>
    </ul>
</div>
    <section class="leadWrap">
        <div class="leadTtlWrap">
        <h2 class="jpTtl">無限のテクノロジー「マテックス」</h2>
        </div>
        <div class="logoWrap">
            <div class="logo">
            <img src="<?php echo get_template_directory_uri(); ?>/images/profile/matexLogo.svg" alt="マテックスロゴ">
            </div>
            <p class="">さまざまな新素材（マテリアル)を積極的に扱っていこうという姿勢と力強く（マイティ）業務に邁進しようという決意、そして旧社名の丸八鐵鋼の社名から「マ」を。技術革新に果敢にチャレンジしていこうという意欲を表現するため、テクノロジーから「テック」を。お客様の限りないご愛顧、そしてお客様とともに無限に発展していこうという願いを込めて、無限を表すX「エックス」から「クス」を。こうして「マテックス」が誕生しまた。コーポレートマークは、「マテックス」の頭文字「M」と無限をあらわす“メビウスの帯”をモチーフに社名に込められた理念・姿勢をシンボル化したものです。</p>
        </div>
    </section>
    
    <section id="overview">
        <div class="profileTtl">
            <h3>会社概要</h3>
        </div>
        <table>
            <tbody>
                <tr class="">
                    <th>商号</th>
                    <td></td>
                </tr>
                <tr class="">
                    <th>代表者</th>
                    <td></td>
                </tr>
                <tr class="">
                    <th>創業</th>
                    <td></td>
                </tr>
                <tr class="">
                    <th>設立</th>
                    <td></td>
                </tr>
                <tr class="">
                    <th>事業の目的</th>
                    <td></td>
                </tr>
                <tr class="">
                    <th>資本金</th>
                    <td></td>
                </tr>
                <tr class="">
                    <th>年間加工能力</th>
                    <td></td>
                </tr>
                <tr class="">
                    <th>関連会社</th>
                    <td></td>
                </tr>
                <tr class="">
                    <th>従業員数</th>
                    <td></td>
                </tr>
            </tbody>
        </table>
    </section>
    
    <section id="items">
        <div class="profileTtl">
            <h3>営業品目</h3>
        </div>
        <table>
            <tbody>
                <tr class="">
                    <th>各種表面処理鋼板</th>
                    <td></td>
                </tr>
                <tr class="">
                    <th>薄鋼板、中板、厚板</th>
                    <td></td>
                </tr>
                <tr class="">
                    <th>各種加工</th>
                    <td></td>
                </tr>
                <tr class="">
                    <th>スリット加工</th>
                    <td></td>
                </tr>
                <tr class="">
                    <th>薄板、中・厚板シャーリング加工</th>
                    <td></td>
                </tr>
            </tbody>
        </table>
    </section>
    
    <section id="history">
        <div class="historyTtl">
            <h3>会社概要</h3>
        </div>
        
        <ul class="historyList">
            <li class="">
                <h3 class="year">月</span></h3>
                <div class="historyWrap">
                    <p></p>
                </div>
            </li>
    </ul>
    </section>
</main>
<?php get_footer(); ?>