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

<div class="testimonial flex inner-container--small">
<div class="testimonial__img-wrapper">
    <div class="testimonial__img-wrapper__inner">
    <img class="" src="<?php echo $testimonial_image_url ?>">
    </div>
    </div>
    <div class="testimonial__txt-wrapper">
    <div class="testimonial__txt-wrapper__inner">
    <p><?php echo ( $attributes['testimonial-name'] ); ?> berichtet begeistert:<p>
    <h2><?php echo ( $attributes['testimonial-quote'] ); ?></h2>
    </div>
    </div>
</div>