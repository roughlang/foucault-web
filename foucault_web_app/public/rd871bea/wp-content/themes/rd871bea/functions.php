<?php

add_action('init', 'flush_rewrite_rules');
/**
 * アイキャッチ
 */
function twpp_setup_theme() {
  add_theme_support( 'post-thumbnails' );
}
add_action( 'after_setup_theme', 'twpp_setup_theme' );

/**
 * サイドバー
 */
function sidebar_widgets_init() {
  register_sidebar( array(
    'name' => 'Main Sidebar',
    'id' => 'main-sidebar',
    'before_title' => '<h3 class="widget-title">',
    'after_title' => '</h3>',
  ) );
}
add_action( 'widgets_init', 'sidebar_widgets_init' );


// スラッグを英数字に変換するフィルターフックを追加
// function custom_sanitize_slug($slug, $post_ID, $post_status, $post_type) {
//   $slug = sanitize_title($slug); // WordPressが提供する標準のスラッグ変換関数を使って英数字に変換
//   return $slug;
// }
// add_filter('sanitize_title', 'custom_sanitize_slug', 10, 4);

/**
 * デフォルトのwpループを更新日時順にする
 * （初期設定では投稿日時順)
 * 
 */
function modify_default_loop_order( $query ) {
  if ( ! is_admin() && $query->is_main_query() ) {
      if ( $query->is_home() ) {
          $query->set( 'orderby', 'modified' );
          $query->set( 'order', 'DESC' );
      }
  }
}
add_action( 'pre_get_posts', 'modify_default_loop_order' );

/**
 * 公開記事数をカウントする
 */
function count_published_posts() {
  $args = array(
      'post_type'      => 'post',  // 投稿タイプ（この場合は 'post' で通常の投稿を指定）
      'post_status'    => 'publish',  // 投稿ステータス（この場合は 'publish' で公開済みの投稿を指定）
      'posts_per_page' => -1  // 全ての公開済み投稿を取得
  );

  $query = new WP_Query($args);

  return $query->found_posts;  // 公開された投稿の数を返す
}