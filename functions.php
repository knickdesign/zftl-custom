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
    if (isset($_POST['problem'])) {
        $result['problem'] = $_POST['problem'];
    }
    if (isset($_POST['leidensdruck'])) {
        $result['leidensdruck'] = $_POST['leidensdruck'];
    }

    $pathtojson = get_stylesheet_directory_uri() . "/assets/json/fitnesscheck.json";

    $arrContextOptions = array(
        "ssl" => array(
            "verify_peer" => false,
            "verify_peer_name" => false,
        ),
    );
    ?>
    <div class="banner-background--blue">
    <div class="swoosh swoosh--white-green-blue">
        <img class="swoosh__img" src="<?php echo get_stylesheet_directory_uri() . "/assets/img/zftpl_hintergrunde/blau_gruen_weiß_v5.svg"?>">
    </div>
    <div class="banner-background--blue__inner site grid-container container hfeed">
    <h2 class="text-super">Wir haben etwas passendes für Sie:</h2>
<?php

    $json = file_get_contents($pathtojson, false, stream_context_create($arrContextOptions));

    if ($json != false) {
        $texts = json_decode($json, true);
        $chancen = $texts[$result['problem']]['leidensdruck'][$result['leidensdruck']]['chancen'];
        $risiken = $texts[$result['problem']]['leidensdruck'][$result['leidensdruck']]['risiken'];
        $slug = $texts[$result['problem']]['leidensdruck'][$result['leidensdruck']]['training'];
        ?>
        <div class="startseitenformular__response__chancen-und-risiken flex inner-container--small">
        <div class="startseitenformular__response__chancen-und-risiken--inner">
            <h3>Ihre Chancen</h3>
            <ul class="startseitenformular__response__chancen-und-risiken__list">
        <?php
        echo $chancen;
        ?>
            </ul>
    </div>
    <div class="startseitenformular__response__chancen-und-risiken--inner">
        <h3>Ihre Risiken</h3>
            <ul class="startseitenformular__response__chancen-und-risiken__list">
        <?php
        echo $risiken;
        ?>
            </ul>
            </div>
        </div>
        <h2 class="font-white">Unsere Angebote, die zu Ihnen passen</h2>
        <?php
        $mitgliedschaft_query = new WP_Query(
            array(
                'name'   => 'mitgliedschaft',
                'post_type'   => 'training_und_kurse'
            )
        );
    ?>
        <div class="offers inner-container--medium">
            <?php
            if ($mitgliedschaft_query->have_posts()) : while ($mitgliedschaft_query->have_posts()) : $mitgliedschaft_query->the_post();
                    $dir = get_stylesheet_directory();
                    include($dir . '/assets/parts/offer.php');
                endwhile;
            else : ?>
                <p>Keine Beiträge</p>
            <?php endif;
            wp_reset_postdata();

            ?>
        </div>
        <?php

        $custom_query = new WP_Query(
            array(
                'name'   => $slug,
                'post_type'   => 'training_und_kurse'
            )
        );
        ?>
        <div class="offers inner-container--medium">
            <?php
            if ($custom_query->have_posts()) : while ($custom_query->have_posts()) : $custom_query->the_post();
                    $dir = get_stylesheet_directory();
                    include($dir . '/assets/parts/offer.php');
                endwhile;
            else : ?>
                <p>Keine Beiträge</p>
        <?php endif;
            wp_reset_postdata();
        }
        ?>
        </div>
    </div>
    <div class="swoosh swoosh--blue-red-white">
    <img class="swoosh__img" src="<?php echo get_stylesheet_directory_uri() . "/assets/img/zftpl_hintergrunde/blau_rot_weiß_v2.svg"?>">
</div>
</div>

    <?php
    die();
}
    ?>