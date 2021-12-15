<?php
/**
 * Banner Swoosh Block Template.
 *
 * @var  array  $attributes Block attributes.
 * @var  array  $block Block data.
 * @var  string $context Preview context [editor,frontend].
 */

?>
<div class="testimonial">
    
    <?php echo ( $attributes['testimonial-name'] ); ?>
    <?php echo ( $attributes['testimonial-quote'] ); ?>
    <?php echo ( $attributes['testimonial-img'] ); ?>
    
</div>