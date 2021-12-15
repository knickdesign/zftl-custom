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
$testimonial_image = $attributes['testimonial-img'];
$testimonial_image_url = $testimonial_image['url'];
?>

<div class="testimonial">
    <div class="testimonial__txt-wrapper">
    <?php echo ( $attributes['testimonial-name'] ); ?>
    <h2 class="text-super"><?php echo ( $attributes['testimonial-quote'] ); ?></h2>
    </div>
    <div class="testimonial__img-wrapper">
    <img class="" src="<?php echo $testimonial_image_url ?>">
    </div>
</div>