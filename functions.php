<?php
/**
 * @param string $page_title ページのtitle属性値
 * @param string $menu_title 管理画面のメニューに表示するタイトル
 * @param string $capability メニューを操作できる権限（manage_options とか）
 * @param string $menu_slug オプションページのスラッグ。ユニークな値にすること。
 * @param string|null $icon_url メニューに表示するアイコンの URL
 * @param int $position メニューの位置
 */
SCF::add_options_page( 'オプション設定', 'オプション設定', 'manage_options', 'theme-options', 'dashicons-admin-settings', 25);


function change_posts_per_page($query) {
    /* 管理画面,メインクエリに干渉しないために必須 */
    if ( is_admin() || ! $query->is_main_query() ){
            return;
    }
    if ( $query->is_front_page() ) {
        return;
    }
    if ( $query->is_home() ) {
        $query->set( 'posts_per_page', '1' );
        $query->set( 'post_type', 'news');
        return;
    }
    if ( $query->is_archive() ) {
        return;
    }
   }
   add_action( 'pre_get_posts', 'change_posts_per_page' );
?>



