<?php

/**
 * Banner Swoosh Block Template.
 *
 * @var  array  $attributes Block attributes.
 * @var  array  $block Block data.
 * @var  string $context Preview context [editor,frontend].
 */

?>

<div class="termin-wrapper ">
<a href="<?php echo site_url() ?>/kontakt" target="_blank" class="termin-wrapper__wrapper__link-wrapper__link flex">
                <div class="termin-wrapper__wrapper__link-wrapper__link__txt-wrapper">
                    <h4>Interesse? Buchen Sie jetzt Ihren kostenlosen Beratungstermin!</h4>
                   
                        <?php echo file_get_contents(get_stylesheet_directory() . "/assets/img/arrow.svg"); ?>
                </div>
                <div class="termin-wrapper__wrapper__link-wrapper__link__img-wrapper">
                <img  src="<?php echo $attributes['termin-img']['url']; ?>">
                </div>
            </a>
</div>