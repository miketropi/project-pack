<?php 
/**
 * Project pack functions 
 * 
 * @version 1.0.0
 * @since 1.0.0
 */

{
  /**
   * Define
   */
  define('PP_DIR', get_stylesheet_directory() . '/project-pack/');
  define('PP_URI', get_stylesheet_directory_uri() . '/project-pack/');
  define('PP_VER', '1.0.0');
}

{
  /**
   * Include
   */
  require(PP_DIR . '/inc/static.php');
  require(PP_DIR . '/inc/helpers.php');
  require(PP_DIR . '/inc/hooks.php');
  require(PP_DIR . '/inc/shortcode.php');
  require(PP_DIR . '/inc/template-tags.php');
  require(PP_DIR . '/inc/ajax.php');
  require(PP_DIR . '/inc/acf-options.php');

  if ( class_exists( 'WooCommerce' ) ) {
    require(PP_DIR . '/inc/woocomerce.php');
  }
}

{
  /**
   * Boot
   */
}
