<body>
<footer>
<section id="cta-area">
<!--    <div class="button"><a href=""><span>お問い合わせはこちら</span></a></div>-->
    <div class="cta-tel">
        <p>お電話でのお問い合わせ</p>
        <p><a href="tel:03-3844-0808">03-3844-0808</a></p>
    </div>

</section>
<div class="site-logo"><a href="#"><img src="<?php echo get_template_directory_uri(); ?>/common/images/matex-logo.svg" alt="matex"></a></div>


<div id="footer-sitemap">
    <ul class="footer-sitemap">
        <li class="single"><h3><a href="#">TOP</a></h3></li>
        <li class="parent">
            <h3><a href="/infomation/">企業情報</a><div class="arrow"></div></h3>
            <ul class="child">
                <li class="gran-child"><h4><a href="#">代表メッセージ</a></h4></li>
                <li class="gran-child"><h4><a href="#">会社概要</a></h4></li>
                <li class="gran-child"><h4><a href="#">事業拠点</a></h4></li>
                <li class="gran-child"><h4><a href="#">品質・環境への取り組み</a></h4></li>
            </ul>
        </li>
        <li class="parent">
            <h3><a href="#">事業情報</a><div class="arrow"></div></h3>
            <ul class="child">
                <li class="gran-child"><h4><a href="#">販売/納品体制</a></h4></li>
                <li class="gran-child"><h4><a href="#">生産体制</a></h4></li>
                <li class="gran-child"><h4><a href="#">事業拠点</a></h4></li>
                <li class="gran-child"><h4><a href="#">技術サポート体制</a></h4></li>
            </ul>
        </li>
        <li class="parent">
            <h3><a href="#">採用情報</a><div class="arrow"></div></h3>
            <ul class="child">
                <li class="gran-child"><h4><a href="#">マテックスとは</a></h4></li>
                <li class="gran-child"><h4><a href="#">社員紹介</a></h4></li>
                <li class="gran-child"><h4><a href="#">スタッフ紹介</a></h4></li>
                <li class="gran-child"><h4><a href="#">募集要項</a></h4></li>
            </ul>
        </li>
        <li class="single">
            <h3><a href="#">お問い合わせ</a></h3>
            <h3><a href="#">個人情報保護方針</a></h3>
            <h3><a href="#">サイトのご利用について</a></h3>
        </li>
    </ul>
</div>


<address>
    <h2>株式会社マテックス</h2>
    <div class="jusho">
    <p class="zip">〒111-0036</p>
    <p class="address">東京都台東区松が谷1-10-2</p>
    </div>
    <div class="tel-fax">
    <p class="tel">TEL.03-3844-0808</p><p class="fax">FAX.03-3844-4109</p>
    </div>
</address>
<div id="copyright"><p class="copyright">© <?php echo date_i18n('Y'); ?> MATEX Co., Ltd. All rights reserved.</p></div>
</footer>


<script src="<?php echo get_template_directory_uri(); ?>/common/js/scrollreveal.min.js"></script>
<script src="<?php echo get_template_directory_uri(); ?>/common/js/ofi.min.js"></script>
<script src="<?php echo get_template_directory_uri(); ?>/common/js/common.js"></script>
<script src="<?php echo get_template_directory_uri(); ?>/js/top.js"></script>

<script>
$(function() {
	$('main').append('<div id="tagetTop"><a href="#" class="smooth"><span></span></a></div>');
	$(window).bind('scroll load',function(){
		var i = $(window).scrollTop();
		var headH = $('header').height();
        var footH = $('footer').height();
        var documentHeight = $('body').height();
        var windowHeight = window.innerHeight;
		var keyvisualH = $('#main-visual').height();
        var tagetTop = $('#tagetTop').height();
        var footBottom = $('#footer-bottom').height(); 
		if ( i >= keyvisualH ) {
			$('#tagetTop').fadeIn();
		}else {
			$('#tagetTop').fadeOut();
		}
        if ( i >= (headH) ) {
			$('header').addClass("white");
		}else {
			$('header').removeClass("white");
		}
        if ((documentHeight - (footH + tagetTop + windowHeight)) < i) {
        $('#tagetTop').removeClass("fixed");
        }else{
        $('#tagetTop').addClass("fixed"); 
        }
	});
    $('.smooth').click(function(){
        var speed = 500;
        var href= $(this).attr("href");
        var target = $(href == "#" || href == "" ? 'html' : href);
        var position = target.offset().top;
        $("html, body").animate({scrollTop:position}, speed, "swing");
        return false;
    });
    
});
jQuery(function(){
   jQuery(window).scroll(function(){
      var obj_t_pos = jQuery('.business-image-area').offset().top;
      var scr_count = jQuery(document).scrollTop() + (window.innerHeight/2); // ディスプレイの半分の高さを追加
      if(scr_count > obj_t_pos){
         jQuery('.business-image-area').addClass('show');
         jQuery('.business-image-area').fadeIn().addClass('animate');
      }else{
         
      }
   })
})
jQuery(function(){
   jQuery(window).scroll(function(){
      var obj_t_pos = jQuery('.recruit-image-area').offset().top;
      var scr_count = jQuery(document).scrollTop() + (window.innerHeight/2); // ディスプレイの半分の高さを追加
      if(scr_count > obj_t_pos){
         jQuery('.recruit-image-area').addClass('show');
         jQuery('.recruit-image-area').fadeIn().addClass('animate');
      }else{
         
      }
   })
})
</script>
<script src="<?php echo get_template_directory_uri(); ?>/common/js/jquery.magnific-popup.min.js"></script>
<script>
$(document).ready(function() {
            $('.popup-movie').magnificPopup({
              disableOn: null,
              type: 'iframe',
              mainClass: 'mfp-fade',
              removalDelay: 160,
              preloader: false,
              fixedContentPos: false
            });
          });
</script>

<?php wp_footer(); ?>
</body>