<?php
//remove wp_head
remove_action('wp_head', 'wp_generator');
remove_action('wp_head', 'rsd_link');
remove_action('wp_head', 'wp_generator');
remove_action('wp_head', 'feed_links', 2);
remove_action('wp_head', 'index_rel_link');
remove_action('wp_head', 'wlwmanifest_link');
remove_action('wp_head', 'feed_links_extra', 3);
remove_action('wp_head', 'start_post_rel_link', 10, 0);
remove_action('wp_head', 'parent_post_rel_link', 10, 0);
remove_action('wp_head', 'adjacent_posts_rel_link', 10, 0);
//Atualizando o WordPress sem necessidade de FTP
define('FS_METHOD','direct');
//Definindo o tamanho padrão das imagens
if ( function_exists( 'add_theme_support' ) ) {
  add_theme_support( 'post-thumbnails' );
  set_post_thumbnail_size( 650, 250, true ); // Tamanho da largura das imagens.
}
//remover class do menu
/*add_filter('nav_menu_item_id', 'filter_menu_id');
add_filter( 'nav_menu_css_class', 'filter_menu_li' );
function filter_menu_li(){
    return array();   
}
function filter_menu_id(){
    return; 
}*/
//logo
function m1_customize_register( $wp_customize ) {
    $wp_customize->add_setting( 'm1_logo' );
    $wp_customize->add_control( new WP_Customize_Image_Control( $wp_customize, 'm1_logo', array(
        'label'    => __( 'Logo marca do site', 'm1' ),
        'section'  => 'title_tagline',
        'settings' => 'm1_logo',
    ) ) );
};
add_action( 'customize_register', 'm1_customize_register' );
//nav
function menu() {
  register_nav_menus(
    array(
      'toggle' => __( 'Navbar toggle' ),
      'header' => __( 'Navbar header' )
    )
  );
}
add_action( 'init', 'menu' );
//dashicons
add_action( 'wp_enqueue_scripts', 'load_dashicons_front_end' );
function load_dashicons_front_end() {
wp_enqueue_style( 'dashicons' );
}
//hide adminbar  to frontend
function hide_admin_bar_from_front_end(){
  if (is_blog_admin()) {
    return true;
  }
  return false;
}
add_filter( 'show_admin_bar', 'hide_admin_bar_from_front_end' );
//Inserindo a imagem de destaque para o FEED
add_filter('the_content_feed', 'rss_post_thumbnail');
function rss_post_thumbnail($content) {
  global $post;
  if( has_post_thumbnail($post->ID) )
    $content = '<p>' . get_the_post_thumbnail($post->ID, 'thumbnail') . '</p>' . $content;
  return $content;
}