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

<link rel="stylesheet" type="text/css" href="<?php echo get_template_directory_uri(); ?>/common/css/magnific-popup.css">
<link href="<?php echo get_stylesheet_uri(); ?>" rel="stylesheet">
<?php if( is_front_page() ): ?>
<link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/front-page.css">
<link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/style.css">
<?php elseif( is_page( 'business' ) ): ?>
<link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/page.css">
<?php elseif( is_page( 'aboutus' ) ): ?>
<link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/page.css">
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
<?php else: ?>
<?php endif; ?>
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Oswald:wght@400;500&display=swap" rel="stylesheet">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
<?php wp_head(); ?>
</head>

<body>

<header>
    <div id="header-left">
        <div class="site-logo"><a href="<?php echo esc_url( home_url( '/') ); ?>"><img src="<?php echo get_template_directory_uri(); ?>/common/images/matex-logo.svg" alt="matex"></a></div>
    </div>

    <div id="header-right">
    <ul id="global-nav">
        <li class="global-nav single"><h3><a href="#">TOP</a></h3></li>
        <li class="global-nav parent">
            <h3><a href="<?php echo get_template_directory_uri(); ?>/aboutus/">企業情報</a><div class="arrow"></div></h3>
            <ul class="child">
                <li class="gran-child"><h4><a href="<?php echo get_template_directory_uri(); ?>/message/">代表メッセージ</a></h4></li>
                <li class="gran-child"><h4><a href="<?php echo get_template_directory_uri(); ?>/profile/">会社概要</a></h4></li>
                <li class="gran-child"><h4><a href="/businessBase/">事業拠点</a></h4></li>
                <li class="gran-child"><h4><a href="/quality/">品質・環境への取り組み</a></h4></li>
            </ul>
        </li>
        <li class="global-nav parent">
            <h3><a href="/business/">事業情報</a><div class="arrow"></div></h3>
            <ul class="child">
                <li class="gran-child"><h4><a href="/network/">販売/納品体制</a></h4></li>
                <li class="gran-child"><h4><a href="#">生産体制</a></h4></li>
                <li class="gran-child"><h4><a href="#">事業拠点</a></h4></li>
                <li class="gran-child"><h4><a href="#">技術サポート体制</a></h4></li>
            </ul>
        </li>
        <li class="global-nav parent">
            <h3><a href="#">採用情報</a><div class="arrow"></div></h3>
            <ul class="child">
                <li class="gran-child"><h4><a href="#">マテックスとは</a></h4></li>
                <li class="gran-child"><h4><a href="#">社員紹介</a></h4></li>
                <li class="gran-child"><h4><a href="#">スタッフ紹介</a></h4></li>
                <li class="gran-child"><h4><a href="#">募集要項</a></h4></li>
            </ul>
        </li>
        <li class="global-nav single">
            <h3><a href="#">お問い合わせ</a></h3>
        </li>
        <li class="global-nav other">
            <h3><a href="#">個人情報保護方針</a></h3>
        </li>
        <li class="global-nav other">
            <h3><a href="#">サイトのご利用について</a></h3>
            <h3><a href="#">サイトのご利用について</a></h3>
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
