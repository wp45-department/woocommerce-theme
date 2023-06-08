<?php
//menu code start
register_nav_menus(
    array('primary-menu'=>'top menu')
)
?>
<?php
register_nav_menus(
    array('secondory-menu'=>'second menu')
)
//menu code end
?>
<?php
// css and js start
function wp_my_custom_theme() {
	wp_enqueue_style( 'bootstrap', get_template_directory_uri() .'/assets/vendor/bootstrap/css/bootstrap.min.css' );
    wp_enqueue_style( 'bootstrap-icon', get_template_directory_uri() .'/assets/vendor/bootstrap-icons/bootstrap-icons.css' );
    wp_enqueue_style( 'boxicons', get_template_directory_uri() .'/assets/vendor/boxicons/css/boxicons.min.css' );
    wp_enqueue_style( 'glightbox', get_template_directory_uri() .'/assets/vendor/glightbox/css/glightbox.min.css' );
    wp_enqueue_style( 'bundle', get_template_directory_uri() .'/assets/vendor/swiper/swiper-bundle.min.css' );
    wp_enqueue_style( 'style', get_template_directory_uri() .'/assets/css/style.css' );
    wp_enqueue_script( 'purecounter_vanilla', get_template_directory_uri() . '/assets/vendor/purecounter/purecounter_vanilla.js', array(), '1.0.0', true );
    wp_enqueue_script( 'bundlejs', get_template_directory_uri() . '/assets/vendor/bootstrap/js/bootstrap.bundle.min.js', array(), '1.0.0', true );
    wp_enqueue_script( 'glightboxjs', get_template_directory_uri() . '/assets/vendor/glightbox/js/glightbox.min.js', array(), '1.0.0', true );
    wp_enqueue_script( 'isotope', get_template_directory_uri() . '/assets/vendor/isotope-layout/isotope.pkgd.min.js', array(), '1.0.0', true );
    wp_enqueue_script( 'bundle-swiper', get_template_directory_uri() . '/assets/vendor/swiper/swiper-bundle.min.js', array(), '1.0.0', true );
    wp_enqueue_script( 'validate', get_template_directory_uri() . '/assets/vendor/php-email-form/validate.js', array(), '1.0.0', true );
    wp_enqueue_script( 'mainjs', get_template_directory_uri() . '/assets/js/main.js', array(), '1.0.0', true );
}
add_action( 'wp_enqueue_scripts', 'wp_my_custom_theme' );
// css and js end
?>