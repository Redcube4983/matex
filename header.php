<!doctype html>
<head>
<meta charset="UTF-8">
<title>株式会社マテックス</title>
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width,initial-scale=1.0,maximum-scale=1.0">
<meta name="description" content="">
<meta name="keywords" content="">
<meta name="format-detection" content="telephone=no,address=no,email=no">
<meta name="robots" content="noindex,nofollow" >
<link rel="shortcut icon" href="<?php echo get_template_directory_uri(); ?>/common/images/apple-touch-icon.png">
<link rel="apple-touch-icon" href="<?php echo get_template_directory_uri(); ?>/common/images/apple-touch-icon.png">
<link rel="icon" type="image/x-icon" href="<?php echo get_template_directory_uri(); ?>/common/images/favicon.ico">
<link href="<?php echo get_stylesheet_uri(); ?>" rel="stylesheet">
<?php if( is_front_page() ): ?>
<link rel="stylesheet" type="text/css" href="<?php echo get_template_directory_uri(); ?>/common/css/magnific-popup.css">
<link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/front-page.css">
<?php elseif( is_home() ): ?>
<link rel="stylesheet" type="text/css" href="<?php echo get_template_directory_uri(); ?>/css/archive-news.css"/>
<?php else: ?>
<?php elseif(is_page(array('business', 'aboutus', 'recruit'))) : ?>
<link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/page.css">
<?php elseif(is_page(array('officejob', 'technical', 'salesjob'))) : ?>
<link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/page2.css">
<?php elseif( is_page( 'message' ) ): ?>
<link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/page-message.css">
<?php elseif( is_page( 'profile' ) ): ?>
<link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/page-profile.css">
<?php elseif( is_page( 'businessbase' ) ): ?>
<link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/page-businessBase.css">
<?php elseif( is_page( 'quality' ) ): ?>
<link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/page-quality.css">
<?php elseif( is_page( 'network' ) ): ?>
<link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/page-network.css">
<?php elseif( is_page( 'production' ) ): ?>
<link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/page-production.css">
<?php elseif( is_page( 'support' ) ): ?>
<link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/page-support.css">
<?php elseif( is_page( 'company' ) ): ?>
<link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/page-company.css">
<?php elseif( is_page( 'policy' ) ): ?>
<link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/page-policy.css">
<?php elseif( is_page( 'aboutusing' ) ): ?>
<link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/page-aboutUsing.css">
<?php elseif( is_page( 'work' ) ): ?>
<link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/page-work.css">
<?php elseif( is_page( 'requirement' ) ): ?>
<link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/page-requirement.css">
<?php elseif( is_single() ): ?>
<link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/single-news.css">
<?php elseif( is_post_type_archive('news') ): ?>
<link rel="stylesheet" type="text/css" href="<?php echo get_template_directory_uri(); ?>/css/archive-news.css"/>
<?php else: ?>
<?php endif; ?>
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Oswald:wght@400;500&display=swap" rel="stylesheet">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
<?php wp_head(); ?>
</head>

<body>

<header id="headerWrap">
    <div id="header-left">
        <div class="site-logo"><a href="<?php echo esc_url( home_url( '/') ); ?>"><img src="<?php echo get_template_directory_uri(); ?>/common/images/matex-logo.svg" alt="matex"></a></div>
    </div>

    <div id="header-right">
    <ul id="global-nav">
        <li class="global-nav single"><h3><a class="gNavColor" href="<?php echo esc_url( home_url( '/') ); ?>">TOP</a></h3></li>
        <li class="global-nav parent">
            <h3><a class="gNavColor" href="<?php echo esc_url( home_url( '/aboutus/') ); ?>">企業情報</a><div class="arrow"></div></h3>
            <ul class="child">
                <li class="gran-child"><h4><a href="<?php echo esc_url( home_url( '/message/') ); ?>">代表メッセージ</a></h4></li>
                <li class="gran-child"><h4><a href="<?php echo esc_url( home_url( '/profile/') ); ?>">会社概要</a></h4></li>
                <li class="gran-child"><h4><a href="<?php echo esc_url( home_url( '/businessBase/') ); ?>">事業拠点</a></h4></li>
                <li class="gran-child"><h4><a href="<?php echo esc_url( home_url( '/quality/') ); ?>">品質・環境への取り組み</a></h4></li>
            </ul>
        </li>
        <li class="global-nav parent">
            <h3><a class="gNavColor" href="<?php echo esc_url( home_url( '/business/') ); ?>">事業情報</a><div class="arrow"></div></h3>
            <ul class="child">
                <li class="gran-child"><h4><a href="<?php echo esc_url( home_url( '/network/') ); ?>">販売/納品体制</a></h4></li>
                <li class="gran-child"><h4><a href="<?php echo esc_url( home_url( '/production/') ); ?>">生産体制</a></h4></li>
                <li class="gran-child"><h4><a href="<?php echo esc_url( home_url( '/support/') ); ?>">技術サポート体制</a></h4></li>
            </ul>
        </li>
        <li class="global-nav parent">
            <h3><a class="gNavColor" href="<?php echo esc_url( home_url( '/support/') ); ?>/recruit/">採用情報</a><div class="arrow"></div></h3>
            <ul class="child">
                <li class="gran-child"><h4><a href="<?php echo esc_url( home_url( '/company/') ); ?>">会社を知る</a></h4></li>
                <li class="gran-child"><h4><a href="<?php echo esc_url( home_url( '/work/') ); ?>">仕事を知る</a></h4></li>
                <li class="gran-child"><h4><a href="<?php echo esc_url( home_url( '/requirement/') ); ?>">募集要項</a></h4></li>
            </ul>
        </li>
<!--
        <li class="global-nav single">
            <h3><a href="#">お問い合わせ</a></h3>
        </li>
-->
        <li class="global-nav other">
        <li class="global-nav other">
            <h3><a href="<?php echo esc_url( home_url( '/policy/') ); ?>">個人情報保護方針</a></h3>
        </li>
        <li class="global-nav other">
            <h3><a href="<?php echo esc_url( home_url( '/aboutusing/') ); ?>">サイトのご利用について</a></h3>
        </li>
    </ul>
    </div>
    <div id="header-toggle">
    <div class="toggle-wrap">
        <span></span>
        <span></span>
        <span></span>
    </div>
    </div>
</header>
    
</body>
















