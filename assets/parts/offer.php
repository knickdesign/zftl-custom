<?php
            $img = get_field('offer-img');
            $type = get_field('art_des_angebotes');
            $tags = get_field('offer-tags');
            ?>
            <div class="offers__offer">
                <div class="offers__offer__head">
                    <img class="offers__offer__head__img" src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/background-offer.png">
                    <p><?php echo $type; ?></p>
                    <h4 class="headline-offer"><?php the_title(); ?></h4>
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