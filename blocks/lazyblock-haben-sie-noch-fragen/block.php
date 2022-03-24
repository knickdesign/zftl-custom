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
$name_one = $attributes['faq_person_one_name'];
$job_one = $attributes['faq_person_one_job'];
$img_one = $attributes['faq_person_one_img'];
$name_two = $attributes['faq_person_two_name'];
$job_two = $attributes['faq_person_two_job'];
$img_two = $attributes['faq_person_two_img'];
?>

<div class="faq-persons flex">
    <div class="faq-persons__txt-wrapper">
        <h3>Ihre Ansprechpartner:innen freuen sich über Ihre Nachricht.</h3>
        <a class="btn text-blue-dark" href="#">Schreiben Sie uns</a>
    </div>
    <div class="faq-persons__persons-wrapper flex">
    <div class="faq-persons__persons-wrapper__person">
        <img class="faq-persons__persons-wrapper__person__img" src="<?php echo $img_one['url']; ?>">
        <p class="faq-persons__persons-wrapper__person__name"><?php echo $name_one; ?></p>
        <p class="faq-persons__persons-wrapper__person__job"><?php echo $job_one; ?></p>
    </div>
    </div>
</div>


