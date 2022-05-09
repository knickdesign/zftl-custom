<?php

/**
 * Banner Swoosh Block Template.
 *
 * @var  array  $attributes Block attributes.
 * @var  array  $block Block data.
 * @var  string $context Preview context [editor,frontend].
 */

?>
<div class="shop-links">
    <div class="shop-links__wrapper">
        <h2>Fehlt Ihnen noch etwas?</h2>
        <h3>Schauen Sie in unserem Shop vorbei</h3>
        <div class="shop-links__wrapper__link-wrapper flex">
            <a href="https://4yourfeeling-shop.com/collections/dienstleistungen-vor-ort" target="_blank" class="shop-links__wrapper__link-wrapper__link flex">
                <div class="shop-links__wrapper__link-wrapper__link__txt-wrapper">
                    <h4>Dienstleistungen vor Ort</h4>
                    <svg>
                        <?php echo file_get_contents(get_stylesheet_directory() . "/assets/img/arrow.svg"); ?></svg>
                </div>
            </a>
            <a href="https://4yourfeeling-shop.com/collections/lebensmittel" target="_blank" class="shop-links__wrapper__link-wrapper__link flex">
                <div class="shop-links__wrapper__link-wrapper__link__txt-wrapper">
                    <h4>Lebensmittel</h4>
                    <svg>
                        <?php echo file_get_contents(get_stylesheet_directory() . "/assets/img/arrow.svg"); ?></svg>
                </div>
            </a>
            <a href="https://4yourfeeling-shop.com/collections/literatur" target="_blank" class="shop-links__wrapper__link-wrapper__link flex">
                <div class="shop-links__wrapper__link-wrapper__link__txt-wrapper">
                    <h4>Literatur</h4>
                    <svg>
                        <?php echo file_get_contents(get_stylesheet_directory() . "/assets/img/arrow.svg"); ?></svg>
                </div>
            </a>
            <a href="https://4yourfeeling-shop.com/collections/nahrungserganzung-1" target="_blank" class="shop-links__wrapper__link-wrapper__link flex">
                <div class="shop-links__wrapper__link-wrapper__link__txt-wrapper">
                    <h4>Nahrungsergänzung</h4>
                    <svg>
                        <?php echo file_get_contents(get_stylesheet_directory() . "/assets/img/arrow.svg"); ?></svg>
                </div>
            </a>
            <a href="https://4yourfeeling-shop.com/collections/pflege-und-kosmetik" target="_blank" class="shop-links__wrapper__link-wrapper__link flex">
                <div class="shop-links__wrapper__link-wrapper__link__txt-wrapper">
                    <h4>Pflege und Kosmetik</h4>
                    <svg>
                        <?php echo file_get_contents(get_stylesheet_directory() . "/assets/img/arrow.svg"); ?></svg>
                </div>
            </a>
            <a href="https://4yourfeeling-shop.com/collections/tools" target="_blank" class="shop-links__wrapper__link-wrapper__link flex">
                <div class="shop-links__wrapper__link-wrapper__link__txt-wrapper">
                    <h4>Tools</h4>
                    <svg>
                        <?php echo file_get_contents(get_stylesheet_directory() . "/assets/img/arrow.svg"); ?></svg>
                </div>
            </a>
        </div>
    </div>
</div>