<?php
/**
 * Banner Swoosh Block Template.
 *
 * @var  array  $attributes Block attributes.
 * @var  array  $block Block data.
 * @var  string $context Preview context [editor,frontend].
 */

?>
<div class="banner-background--blue">
    <div class="swoosh swoosh--white-green-blue">
        <img class="swoosh__img" src="<?php echo get_stylesheet_directory_uri() . "/assets/img/zftpl_hintergrunde/zftl-schwung_unten_weiss.svg"?>">
    </div>
    <div class="banner-background--blue__inner site grid-container container hfeed">
    <?php echo ( $attributes['inhalt'] ); ?>
    </div>
    <div class="swoosh swoosh--blue-red-white">
    <img class="swoosh__img" src="<?php echo get_stylesheet_directory_uri() . "/assets/img/zftpl_hintergrunde/zftl-schwung_oben_weiss.svg"?>">
</div>
</div>