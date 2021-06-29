add_action( 'wp', 'codeithub_remove_zoom_lightbox_theme_support', 99 );
  
function codeithub_remove_zoom_lightbox_theme_support() { 
   remove_theme_support( 'wc-product-gallery-zoom' );
   remove_theme_support( 'wc-product-gallery-lightbox' );
   remove_theme_support( 'wc-product-gallery-slider' );
}
