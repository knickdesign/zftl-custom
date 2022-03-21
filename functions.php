<?php
add_action('wp_enqueue_scripts', 'my_theme_enqueue_styles');
function my_theme_enqueue_styles()
{
    $parenthandle = 'parent-style'; // This is 'twentyfifteen-style' for the Twenty Fifteen theme.
    $theme = wp_get_theme();
    wp_enqueue_style(
        $parenthandle,
        get_template_directory_uri() . '/style.css',
        array(),
        $theme->parent()->get('Version')
    );
    wp_enqueue_style(
        'child-style',
        get_stylesheet_uri(),
        array($parenthandle),
        $theme->get('Version') // this only works if you have Version in the style header
    );
}
// Disable the core template part on the blog page.
add_filter('generate_do_template_part', function ($do) {
    if (is_page('team')) {
        return false;
    }
    return $do;
});

// Add our own.
add_action('generate_before_do_template_part', function () {
    if (is_page('team')) : ?>
        <?php get_template_part('content-page', 'team'); ?>
    <?php endif;
});
add_action('wp_ajax_myfilter', 'misha_filter_function'); // wp_ajax_{ACTION HERE} 
add_action('wp_ajax_nopriv_myfilter', 'misha_filter_function');

function misha_filter_function()
{
    $result = array(
        'problem' => 0,
        'leidensdruck' => 0,
    );

    // for categories
    if (!isset($_POST['problem'])) {
        $result['problem'] = $_POST['problem'];
    }
    if (!isset($_POST['leidensdruck'])) {
        $result['leidensdruck'] = $_POST['leidensdruck'];
    }

    $pathtojson = get_stylesheet_directory_uri() . "/assets/json/fitnesscheck.json";
    if(file_exists($pathtojson)){
        echo 'file exists';
    }
    else{
        echo 'file doesnt exist';
    }
    $json = file_get_contents($pathtojson);
    if($json != 0){
    $texts = json_decode($json, true);
    $test = $texts->problem['ubergewicht']->leidensdruck['sehrGroß']->chancen;
    echo '<ul>';
    echo '<li>';
    echo json_encode($texts);
    echo '</li>';
    echo '<li>test 16</li>';
    echo '</ul>';
    }
    else{
        echo 'json not working';
        echo  $pathtojson;
        echo '7';
    }
    die();
}
    ?>