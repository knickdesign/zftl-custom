<?php

/**
 * Banner Swoosh Block Template.
 *
 * @var  array  $attributes Block attributes.
 * @var  array  $block Block data.
 * @var  string $context Preview context [editor,frontend].
 */

?>
<div class="startseitenformular">
    <h2 class="text-super">Machen Sie den Fitness-Schnellcheck</h2>
    <form action="<?php echo get_home_url() ?>/wp-admin/admin-ajax.php" method="POST" id="startseitenformular" class="startseitenformular__form">
        <!-- Filterkategorie -->
        <h3>Woran möchten Sie arbeiten?</h3>
        <div class="startseitenformular__form__button-wrapper flex">
            <!-- Filter -->
            <label class="startseitenformular__form__button-wrapper__button">
                <input type="radio" name="problem" value="ubergewicht" />
                <div class="startseitenformular__form__button-wrapper__button__inner">
                    <img src="<?php echo get_stylesheet_directory_uri() ?>/assets/img/illustrations/zftl_uebergewicht.svg">
                    <h4>Über&shy;gewicht</h4>
                    <div class="startseitenformular__form__button-wrapper__button__inner__checkcircle"></div>
                </div>
            </label>
            <!-- Filter -->
            <label class="startseitenformular__form__button-wrapper__button">
                <input type="radio" name="problem" value="gelenkschmerzen" />
                <div class="startseitenformular__form__button-wrapper__button__inner">
                    <img src="<?php echo get_stylesheet_directory_uri() ?>/assets/img/illustrations/zftl-rueckenschmerzen.svg">
                    <h4>Gelenk&shy;schmerzen</h4>
                    <div class="startseitenformular__form__button-wrapper__button__inner__checkcircle"></div>
                </div>
            </label>
            <!-- Filter -->
            <label class="startseitenformular__form__button-wrapper__button">
                <input type="radio" name="problem" value="allgemeineFitness" />
                <div class="startseitenformular__form__button-wrapper__button__inner">
                    <img src="<?php echo get_stylesheet_directory_uri() ?>/assets/img/illustrations/zftl-allgemeine_fitness.svg">
                    <h4>allgemeine Fitness</h4>
                    <div class="startseitenformular__form__button-wrapper__button__inner__checkcircle"></div>
                </div>
            </label>
        </div>
        <!-- Filterkategorie -->
        <div class="startseitenformular__form__slider">
        <h3>Seit wann besteht das Problem?</h3>
        <div class="startseitenformular__form__slider-wrapper">
            <img id="slider-img" src="<?php echo get_stylesheet_directory_uri() ?>/assets/img/illustrations/zftl-zeitbubble03.svg">
            <!-- Filter -->
            <input type="range" name="dauer" min="0" max="3" value="1" class="slider" id="time-slider" />
        </div>
        <script>
            var slider = document.getElementById("time-slider");
            var slider_img = document.getElementById("slider-img");
            var output = 0;
            output = slider.value;

            slider.oninput = function() {
                output = this.value;
                console.log(output);
                if(output == 0){
                    slider_img.src="<?php echo get_stylesheet_directory_uri() ?>/assets/img/illustrations/zftl-zeitbubble04.svg";
                    console.log("little success");
                }
                else if(output == 1){
                    slider_img.src="<?php echo get_stylesheet_directory_uri() ?>/assets/img/illustrations/zftl-zeitbubble03.svg";
                    console.log("little success");
                }
                else if(output == 2){
                    slider_img.src="<?php echo get_stylesheet_directory_uri() ?>/assets/img/illustrations/zftl-zeitbubble02.svg";
                    console.log("little success");
                }
                else if(output == 3){
                    slider_img.src="<?php echo get_stylesheet_directory_uri() ?>/assets/img/illustrations/zftl-zeitbubble01.svg";
                    console.log("little success");
                }
            }
        </script>
        </div>
        <!-- Filterkategorie -->
        <h3>Wie schwer ist ihr Leidensdruck?</h3>
        <div class="startseitenformular__form__button-wrapper flex">
            <!-- Filter -->
            <label class="startseitenformular__form__button-wrapper__button">
                <input type="radio" name="leidensdruck" value="sehrGroß" />
                <div class="startseitenformular__form__button-wrapper__button__inner">
                    <img src="<?php echo get_stylesheet_directory_uri() ?>/assets/img/illustrations/zftl-leidensdruck01.svg">
                    <h4>Sehr groß</h4>
                    <div class="startseitenformular__form__button-wrapper__button__inner__checkcircle"></div>
                </div>
            </label>
            <!-- Filter -->
            <label class="startseitenformular__form__button-wrapper__button">
                <input type="radio" name="leidensdruck" value="mittelmassig" />
                <div class="startseitenformular__form__button-wrapper__button__inner">
                    <img src="<?php echo get_stylesheet_directory_uri() ?>/assets/img/illustrations/zftl-leidensdruck02.svg">
                    <h4>Mittelmäßig</h4>
                    <div class="startseitenformular__form__button-wrapper__button__inner__checkcircle"></div>
                </div>
            </label>
            <!-- Filter -->
            <label class="startseitenformular__form__button-wrapper__button">
                <input type="radio" name="leidensdruck" value="kaum" />
                <div class="startseitenformular__form__button-wrapper__button__inner">
                    <img src="<?php echo get_stylesheet_directory_uri() ?>/assets/img/illustrations/zftl-leidensdruck03.svg">
                    <h4>Kaum</h4>
                    <div class="startseitenformular__form__button-wrapper__button__inner__checkcircle"></div>
                </div>
            </label>
        </div>
        <div class="startseitenformular__form__txt">
            <h2>Ein guter Anfang</h2>
            <p class="text-bigger">
                Danke für den ersten Eindruck. Die Details besprechen wir gerne beim kostenlosen Beratungstermin. Ihre Fitness ist bei uns Maßarbeit! Ein paar Tipps haben wir schon jetzt für Sie:
            </p>
        </div>
        <button class="startseitenformular__form__button">Jetzt Auswertung ansehen</button>
        <input type="hidden" name="action" value="myfilter">
    </form>
    <div class="startseitenformular__response" id="response">

    </div>
</div>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
<script>
    jQuery(function($) {
        $('#startseitenformular').submit(function() {
            var form = $('#startseitenformular');
            $.ajax({
                url: form.attr('action'),
                data: form.serialize(), // form data
                type: form.attr('method'), // POST
                beforeSend: function(xhr) {
                    form.find('button').text('Ergebnisse auswerten..'); // changing the button label
                },
                success: function(data) {
                    form.find('button').text('Jetzt Auswertung ansehen'); // changing the button label back
                    $('#response').html(data); // insert data
                }
            });
            return false;
        });
    });
</script>