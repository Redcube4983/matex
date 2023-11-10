<?php
/*
Template Name: recruit
*/
?>
<?php get_header(); ?>

<main id="mainWrap">
<div id="main-visual">
    <div class="topTtlInner">
        <div class="topImg">
            <picture class="">
                    <source media="(max-width: 767px)" srcset="<?php echo get_template_directory_uri(); ?>/images/recruit/recruit-top-sp.jpg 1x,<?php echo get_template_directory_uri(); ?>/images/recruit/recruit-top-sp.jpg 2x">
                    <source media="(max-width: 920px)" srcset="<?php echo get_template_directory_uri(); ?>/images/recruit/recruit-top-pc.webp 1x,<?php echo get_template_directory_uri(); ?>/images/recruit/recruit-top-pc.webp 2x">
                    <img src="<?php echo get_template_directory_uri(); ?>/images/recruit/recruit-top-sp.jp" srcset="<?php echo get_template_directory_uri(); ?>/images/recruit/recruit-top-pc.webp 1x,<?php echo get_template_directory_uri(); ?>/images/recruit/recruit-top-pc.webp 2x" alt="トップ背景画像">
                </picture>
        </div>
        <div class="ttlWrap">
            <span class="enTtl">Recruit</span>
            <h1 class="jpTtl">採用情報</h1>
        </div>
    </div>
</div>
<div id="panNavi">
    <ul class="list">
        <li>
            <a href="<?php echo esc_url( home_url( '/') ); ?>">TOP</a>
        </li>
        <li>
            <span>採用情報</span>
        </li>
    </ul>
</div>
    <section id="leadWrap">
        <div class="leadTtlWrap animate-bottom">
            <h2 class="jpTtl">あらゆる産業を支えるダイナミックな仕事</h2>
        </div>
        <p class="textCenter animate-bottom">私たちの生活を支えている「鉄」製品は、太古の昔から使われてきました。
時に重厚長大に、時に繊細でしなやかに、<br class="pc">時代の変化とともにへ変幻自在に形状や性質を変え存在してきました。社会に貢献し続ける「鉄」のように、既成概念にとらわれず、自由な発想を持った挑戦できる人材を求めています。</p>
    </section>
    <section class="recruitInner">
        <div class="contents content1">
            <div class="contentImg animate-left">
                
            <div class="movie_wrap">
                <div class="txt_movie">
                    <div class="photo_youtube_wrap">
                        <div class="photo_youtube">
                            <a href="https://www.youtube.com/watch?v=iQ-eA3SbigM" class="movie-buttun popup-movie">
                                <img src="<?php echo get_template_directory_uri(); ?>/images/recruit/recruitImg01.webp" alt="企業情報画像1">
                                <span></span>
                            </a>
                        </div>
                    </div>
                </div>
            </div>


            </div>
            <div class="txtWrap">
                <div class="txtInner">
                    <div class="contentTtl animate-bottom">
                        <span>Company</span>
                        <h3>会社を知る</h3>
                    </div>
                    <p class='animate-bottom'>鉄の可能性、鋼材流通業界と<br>マテックスの役割をご紹介します。</p>
                </div>
                <div class="moreButtonWrap animate-fade">
                    <a href="/company/" class="moreButton">more</a>
                </div>
            </div>
        </div>
        <div class="contents content2">
            <div class="contentImg animate-right">
                <img src="<?php echo get_template_directory_uri(); ?>/images/recruit/recruitImg02.webp" alt="企業情報画像2">
            </div>
            <div class="txtWrap">
                <div class="txtInner">
                    <div class="contentTtl animate-bottom">
                        <span>More</span>
                        <h3>仕事を知る</h3>
                    </div>
                    <p class='animate-bottom'>社会と鉄をつなぐ架け橋として、<br>ヤリガイのある仕事がここにあります。</p>
                </div>
                <div class="moreButtonWrap animate-fade">
                    <a href="/work/" class="moreButton">more</a>
                </div>
            </div>
        </div>
        <div class="contents content1">
            <div class="contentImg animate-left">
                <img src="<?php echo get_template_directory_uri(); ?>/images/recruit/recruitImg03.webp" alt="企業情報画像3">
            </div>
            <div class="txtWrap">
                <div class="txtInner">
                    <div class="contentTtl animate-bottom">
                        <span>Requirement</span>
                        <h3>募集要項</h3>
                    </div>
                    <p class='animate-bottom'>新卒採用・キャリア採用の情報は<br>こちらからご確認ください。</p>
                </div>
                <div class="moreButtonWrap animate-fade">
                    <a href="/requirement/" class="moreButton">more</a>
                </div>
            </div>
        </div>  
        <div class="contents content3">
            

            <div id="faq-content">
                <h4>よくあるご質問</h4>
                <p class="faq-content-text">当社の採用情報に関して<br class="sp">お寄せいただくご質問にお答えします。</p>
                <p class="nav-open"><span>Q.</span>選考のスケジュールについて教えてください。</p>
                <nav>
                    <p>書類選考、適性検査（ＣＡＢ）、1次面接（グループ面接）、最終面接（役員面接）がございます。
                    エントリーいただいてから約１か月で採用の可否をご連絡いたします。</p>
                </nav>
                <p class="nav-open"><span>Q.</span>入社までにやっておくべきことはありますか。</p>
                <nav>
                    <p>入社後の研修制度を整えているので、特にプログラミング等の勉強をしておく必要はありません。
                アルバイトや旅行など学生のうちにしかできないことにたくさんチャレンジしたり、色んな経験をして、様々な人と関わりコミュニケーション能力を身につけておくと社会人になって役に立ちます。</p>
                </nav>
                <p class="nav-open"><span>Q.</span>Q’sfixで活躍する人に共通することはなんでしょうか。</p>
                <nav>
                    <p>コミュニケーション能力の高い人が活躍します。ただ単に話すのが上手というわけではなく、分からないことがあれば積極的に質問したり、お客様やチームメイトの話を素直に聴いたりすることが、周囲から信頼してもらうための基本だと考えています。</p>
                </nav>
                <p class="nav-open"><span>Q.</span>評価制度は具体的にどのようなものがありますか。</p>
                <nav>
                    <p>一般社員は、上期（4月～9月）と下期（10月～3月）の年2回評価を行います。
                評価項目は社員の等級によって異なりますが、10～15個の評価項目に対して自己評価を行い、上長評価や役員評価を受けて最終決定します。</p>
                </nav>
            </div>












        </div>
    </section>
    </main>
<?php get_footer(); ?>

