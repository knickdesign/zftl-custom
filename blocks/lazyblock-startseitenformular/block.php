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
    <form action="<?php echo site_url() ?>/wp-admin/admin-ajax.php" method="POST" id="startseitenformular" class="startseitenformular__form">
    <!-- Filterkategorie -->
        <h3>Woran möchten Sie arbeiten?</h3>
        <div class="startseitenformular__form__button-wrapper flex">
            <!-- Filter -->
            <label class="startseitenformular__form__button-wrapper__button">
                <input type="radio" name="problem" value="Übergewicht" />
                <div class="startseitenformular__form__button-wrapper__button__inner">
                    <img src="<?php echo get_stylesheet_directory_uri() ?>/assets/img/TMP-prev-button.png">
                    <h4>Über&shy;gewicht</h4>
                    <div class="startseitenformular__form__button-wrapper__button__inner__checkcircle"></div>
                </div>
            </label>
             <!-- Filter -->
             <label class="startseitenformular__form__button-wrapper__button">
                <input type="radio" name="problem" value="Gelenkschmerzen" />
                <div class="startseitenformular__form__button-wrapper__button__inner">
                    <img src="<?php echo get_stylesheet_directory_uri() ?>/assets/img/TMP-prev-button.png">
                    <h4>Gelenk&shy;schmerzen</h4>
                    <div class="startseitenformular__form__button-wrapper__button__inner__checkcircle"></div>
                </div>
            </label>
             <!-- Filter -->
             <label class="startseitenformular__form__button-wrapper__button">
                <input type="radio" name="problem" value="allgemeine Fitness" />
                <div class="startseitenformular__form__button-wrapper__button__inner">
                    <img src="<?php echo get_stylesheet_directory_uri() ?>/assets/img/TMP-prev-button.png">
                    <h4>allgemeine Fitness</h4>
                    <div class="startseitenformular__form__button-wrapper__button__inner__checkcircle"></div>
                </div>
            </label>
        </div>
        <!-- Filterkategorie -->
        <h3>Seit wann besteht das Problem?</h3>
        <div class="startseitenformular__form__slider-wrapper">
             <!-- Filter -->
                <input type="range" name="dauer" min="0" max="100" value="50" class="slider" />
        </div>
        <!-- Filterkategorie -->
        <h3>Wie schwer ist ihr Leidensdruck?</h3>
        <div class="startseitenformular__form__button-wrapper flex">
            <!-- Filter -->
            <label class="startseitenformular__form__button-wrapper__button">
                <input type="radio" name="leidensdruck" value="sehr groß" />
                <div class="startseitenformular__form__button-wrapper__button__inner">
                    <img src="<?php echo get_stylesheet_directory_uri() ?>/assets/img/TMP-prev-button.png">
                    <h4>Sehr groß</h4>
                    <div class="startseitenformular__form__button-wrapper__button__inner__checkcircle"></div>
                </div>
            </label>
             <!-- Filter -->
             <label class="startseitenformular__form__button-wrapper__button">
                <input type="radio" name="leidensdruck" value="mittelmäßig" />
                <div class="startseitenformular__form__button-wrapper__button__inner">
                    <img src="<?php echo get_stylesheet_directory_uri() ?>/assets/img/TMP-prev-button.png">
                    <h4>Mittelmäßig</h4>
                    <div class="startseitenformular__form__button-wrapper__button__inner__checkcircle"></div>
                </div>
            </label>
             <!-- Filter -->
             <label class="startseitenformular__form__button-wrapper__button">
                <input type="radio" name="leidensdruck" value="kaum" />
                <div class="startseitenformular__form__button-wrapper__button__inner">
                    <img src="<?php echo get_stylesheet_directory_uri() ?>/assets/img/TMP-prev-button.png">
                    <h4>Kaum</h4>
                    <div class="startseitenformular__form__button-wrapper__button__inner__checkcircle"></div>
                </div>
            </label>
        </div>                            
        <button>Jetzt Auswertung ansehen</button>
        <input type="hidden" name="action" value="myfilter">
    </form>
</div>
<!-- <script>
    jQuery(function($) {
        $('#filter').submit(function() {
            var filter = $('#filter');
            $.ajax({
                url: filter.attr('action'),
                data: filter.serialize(), // form data
                type: filter.attr('method'), // POST
                beforeSend: function(xhr) {
                    filter.find('button').text('Filtern...'); // changing the button label
                },
                success: function(data) {
                    filter.find('button').text('Filter anwenden'); // changing the button label back
                    $('#response').html(data); // insert data
                }
            });
            return false;
        });
    });
</script> -->