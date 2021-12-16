<?php
add_action( 'wp_enqueue_scripts', 'my_theme_enqueue_styles' );
function my_theme_enqueue_styles() {
    $parenthandle = 'parent-style'; // This is 'twentyfifteen-style' for the Twenty Fifteen theme.
    $theme = wp_get_theme();
    wp_enqueue_style( $parenthandle, get_template_directory_uri() . '/style.css', 
        array(),
        $theme->parent()->get('Version')
    );
    wp_enqueue_style( 'child-style', get_stylesheet_uri(),
        array( $parenthandle ),
        $theme->get('Version') // this only works if you have Version in the style header
    );
}
// Disable the core template part on the blog page.
add_filter( 'generate_do_template_part', function( $do ) {
    if ( !is_front_page('team') ) {
        return false;
    }
    return $do;
} );

// Add our own.
add_action( 'generate_before_do_template_part', function() {
    if ( !is_front_page('team') ) : ?>
        <?php get_template_part( 'content-page', 'team' );?>
    <?php endif;
} );
?>