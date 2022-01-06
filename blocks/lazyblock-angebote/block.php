<?php

/**
 * Banner Swoosh Block Template.
 *
 * @var  array  $attributes Block attributes.
 * @var  array  $block Block data.
 * @var  string $context Preview context [editor,frontend].
 */

?>

<?php
$offer_select = $attributes['art-des-angebots'];
?>

<div class="offers inner-container--medium">
    <?php

    $args = array(
        'post_type' => 'training_und_kurse',
        'order' => 'ASC',
        'meta_key' => 'art_des_angebotes',
        'meta_value' => $offer_select
    );

    $custom_query = new WP_Query($args);

    if ($custom_query->have_posts()) : while ($custom_query->have_posts()) : $custom_query->the_post(); ?>
         <?php
         $dir = get_stylesheet_directory();
         include ($dir . '/assets/parts/offer.php');
         endwhile;
    else : ?>
        <p>Keine Beiträge</p>
    <?php endif;
    wp_reset_postdata(); ?>
</div>



