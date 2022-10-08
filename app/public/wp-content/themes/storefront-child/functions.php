<?php
// Exit if accessed directly
if ( !defined( 'ABSPATH' ) ) exit;

// BEGIN ENQUEUE PARENT ACTION
// AUTO GENERATED - Do not modify or remove comment markers above or below:

if ( !function_exists( 'chld_thm_cfg_locale_css' ) ):
    function chld_thm_cfg_locale_css( $uri ){
        if ( empty( $uri ) && is_rtl() && file_exists( get_template_directory() . '/rtl.css' ) )
            $uri = get_template_directory_uri() . '/rtl.css';
        return $uri;
    }
endif;
add_filter( 'locale_stylesheet_uri', 'chld_thm_cfg_locale_css' );

// END ENQUEUE PARENT ACTION
function load_bootstrap() {
    wp_enqueue_style("bootstrap", "https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css");
    wp_enqueue_script("bootstrap", "https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js", null, null, true);
}
add_action("wp_enqueue_scripts", "load_bootstrap");

function hero_section(){ ?>
    <div class="hero-container container-fluid">
            <div class="image-container">
                <img class="hero-image" src="<?php the_field("hero_image") ?>" alt="">
            </div>
            <div class="hero-content  d-flex align-items-center justify-content-center flex-column col-12 col-md-6">
            
                <div class="hero-text-container  ">
                        <h1> <?php the_field("hero_headline") ?> </h1>
                        <p> <?php  the_field("hero_subtitle") ?> </p>
                </div>
            </div>
    </div>

    <?php
}
add_action("homepage", "hero_section",8);

function free_shipping_notice(){ ?>
    <div class="free-shipping-notice">
        <p>Free shipping on Denmark orders over 300 DKK</p>
    </div>
 <?php
}
add_action("storefront_before_content", "free_shipping_notice",5);

