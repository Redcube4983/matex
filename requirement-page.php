<?php
/*
Template Name: requirement
*/
?>
<?php get_header(); ?>
<main id="mainWrap">
<div id="topTtlWrap">
    <div class="topTtlInner">
        <div class="topImg">
            <picture class="">
                    <source media="(max-width: 767px)" srcset="<?php echo get_template_directory_uri(); ?>/images/recruit/requirement/requirement-top-sp.jpg 1x,<?php echo get_template_directory_uri(); ?>/images/recruit/requirement/requirement-top-sp.jpg 2x">
                    <source media="(max-width: 920px)" srcset="<?php echo get_template_directory_uri(); ?>/images/recruit/requirement/requirement-top-pc.jpg 1x,<?php echo get_template_directory_uri(); ?>/images/recruit/requirement/requirement-top-pc.jpg 2x">
                    <img src="<?php echo get_template_directory_uri(); ?>/images/recruit/requirement/requirement-top-sp.jpg" srcset="<?php echo get_template_directory_uri(); ?>/images/recruit/requirement/requirement-top-pc.jpg 1x,<?php echo get_template_directory_uri(); ?>/images/recruit/requirement/requirement-top-pc.jpg 2x" alt="トップ背景画像">
                </picture>
        </div>
        <div class="ttlWrap">
            <span class="enTtl">Requirement</span>
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
            <a href="/recruit/">事業情報</a>
        </li>
        <li>
            <span>仕事を知る</span>
        </li>
    </ul>
</div>
<section id="leadWrap">
        <div class="leadTtlWrap">
            <h2 class="jpTtl">社会に貢献できる仕事に<br class="sp">チャレンジしませんか！</h2>
        </div>
        <p class="">マテックスの社訓が一番最初に掲げているのは、 「企業は何より人にある」です。「人」が育たなければ会社の成長はないと考え、私たちは何よりも「人」＝社員を大切にしています。限りない可能性を秘めた「鉄」を取り扱う私たちと一緒に、社会に貢献できるダイナミックな仕事にチャレンジしませんか！</p>
</section>
    
<section id="requirementInner">
    <div id="listWrap">
            <div class="contentsTtl">
                <h3>応募要項</h3>
            </div>
            <table>
                <tbody>
                    <?php
                        $free_item = SCF::get_option_meta('theme-options', 'requirement');
                        foreach ($free_item as $fields) { 

                        if($fields['profileTtl'] !== "" and $fields['profile']!== ""){
                        ?>
                        <tr>
                            <th><?php echo $fields['ttl']; ?></th>
                            <td><?php echo $fields['about']; ?></td>
                        </tr>
                        <?php
                        } 
                        }
                    ?>


                </tbody>
            </table>
        </div>
    <div id="idealProfile">
            <ul>
                <li>誠実な方</li>
                <li>向上心 (意欲、チャレンジ精神)がある方</li>
                <li>チームワークを大切にする方</li>
                <li>自ら考えて行動できる方</li>
                <li>責任感ある方</li>
            </ul>
        </div>
        <div id="atmosphere">
            <ul>
                <li>世代の壁、職種の壁がない</li>
                <li>意見を言い合える</li>
                <li>社内の風通しが良い</li>
            </ul>
        </div>
</section>

</main>
<?php get_footer(); ?>




