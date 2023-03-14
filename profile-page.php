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
        <div class="contentsTtl">
            <h3>会社概要</h3>
        </div>
        <table>
            <tbody>
                <?php
                    $free_item = SCF::get_option_meta('theme-options', 'companyProfile');
                    foreach ($free_item as $fields) { 

                    if($fields['profileTtl'] !== "" and $fields['profile']!== ""){
                    ?>
                    <tr>
                    <th><?php echo $fields['profileTtl']; ?></th>
                    <td><?php echo $fields['profile']; ?></td>
                    </tr>
                    <?php
                    } 
                    }
                ?>
                
                
            </tbody>
        </table>
    </section>
    
    <section id="businessItems">
        <div class="contentsTtl">
            <h3>営業品目</h3>
        </div>
        <?php
                    $free_item = SCF::get_option_meta('theme-options', 'businessItems');
                    foreach ($free_item as $fields) { 

                    if($fields['items'] !== ""){
                    ?>
                    <ul>
                        <li><?php echo $fields['items']; ?></li>
                    </ul>
                    <?php
                    } 
                    }
                ?>
    </section>
    
    
    <section id="history">
        <div class="contentsTtl">
            <h3>沿革</h3>
        </div>
        <?php
                    $free_item = SCF::get_option_meta('theme-options', 'history');
                    foreach ($free_item as $fields) { 

                    if($fields['ad'] !== "" and $fields['month']!== "" and $fields['contents']!== ""){
                    ?>
                    <ul>
                        <li>
                            <span class="ad"><?php echo $fields['ad']; ?>年</span>
                            <span class="month"><?php echo $fields['month']; ?>月</span>
                            <p class="contents"><?php echo $fields['contents']; ?></p>
                        </li>
                    </ul>
                    <?php
                    } 
                    }
                ?>
    </section>
</main>
<?php get_footer(); ?>