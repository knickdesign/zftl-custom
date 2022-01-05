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
            $img = get_field('offer-img');
            $type = get_field('art_des_angebotes');
            $tags = get_field('offer-tags');
            ?>
            <div class="offers__offer">
                <div class="offers__offer__head">
                    <p><?php echo $type; ?></p>
                    <h4><?php the_title(); ?></h4>
                </div>
                <div class="offers__offer__body flex">
                    <div class="offers__offer__body__img-wrapper">
                        <img src="<?php echo $img['url']; ?>">
                    </div>
                    <div class="offers__offer__body__text-wrapper flex--column">
                        <?php the_content(); ?>
                        <?php if ($tags) : ?>
                        <div class="offers__offer__body__text-wrapper__tags">
                           <?php foreach ($tags as $tag) : ?>
                                
                                    <p class="text-meta offers__offer__body__text-wrapper__tags__tag"><?php echo get_term($tag)->name; ?></p>
                                <?php endforeach; ?>
                                </div>
                            <?php endif; ?>
                            <a href="#" class="link--booking">Termin anfragen</a>
                    </div>
                </div>

            </div>
        <?php endwhile;
    else : ?>
        <p>Keine Beiträge</p>
    <?php endif;
    wp_reset_postdata(); ?>
</div>



