<?php
/*
Template Name: Балконы и лоджий
*/
?>

<?php
get_header();
?>

<section class="logies">
        <div class="container">
            <h1 class="logies__paragraf">
                Выбери свою конструкцию окна
            </h1>
            <div class="logies__inner">
                <div class="logies__content">
                    <div class="logies__img">
                        <img src="<?php the_field('logies_img_one') ?>" alt="">
                    </div>
                    <div class="logies__text">
                        <div class="logies__subtext"><?php the_field('logies_profile') ?></div>
                        <div class="logies__subtext"><?php the_field('logies_size_one') ?></div>
                        <div class="logies__subtext"><?php the_field('logies_descr_one') ?></div>
                        <div class="logies__price"><?php the_field('logies_price_one') ?></div>
                        <button href="#" class="logies__form main__form">ЗАКАЗАТЬ</button>
                    </div>
                </div>
                <div class="logies__content window__flex">
                    <div class="logies__img">
                        <img class="logies__img-img" src="<?php the_field('logies_img_two') ?>" alt="">
                    </div>
                    <div class="logies__text">
                        <div class="logies__subtext"><?php the_field('logies_profile') ?></div>
                        <div class="logies__subtext"><?php the_field('logies_size_two') ?></div>
                        <div class="logies__subtext"><?php the_field('logies_descr_two') ?></div>
                        <div class="logies__price"><?php the_field('logies_price_two') ?></div>
                        <button href="#" class="logies__form main__form">ЗАКАЗАТЬ</button>
                    </div>                    
                </div>
                <div class="logies__content">
                    <div class="logies__img">
                        <img src="<?php the_field('logies_img_three') ?>" alt="">
                    </div>
                    <div class="logies__text">
                        <div class="logies__subtext"><?php the_field('logies_profile') ?></div>
                        <div class="logies__subtext"><?php the_field('logies_size_three') ?></div>
                        <div class="logies__subtext"><?php the_field('logies_descr_three') ?></div>
                        <div class="logies__price"><?php the_field('logies_price_three') ?></div>
                        <button href="#" class="logies__form main__form">ЗАКАЗАТЬ</button>
                    </div>
                </div>
                <div class="logies__content window__flex">
                    <div class="logies__img">
                        <img class="logies__img-img" src="<?php the_field('logies_img_for') ?>" alt="">
                    </div>
                   <div class="logies__text">
                        <div class="logies__subtext"><?php the_field('logies_profile') ?></div>
                        <div class="logies__subtext"><?php the_field('logies_size_for') ?></div>
                        <div class="logies__subtext"><?php the_field('logies_descr_for') ?></div>
                        <div class="logies__price"><?php the_field('logies_price_for') ?></div>
                        <button href="#" class="logies__form main__form">ЗАКАЗАТЬ</button>
                    </div> 
                </div>
                <div class="logies__content">
                    <div class="logies__img">
                        <img src="<?php the_field('logies_img_five') ?>" alt="">
                    </div>
                    <div class="logies__text">
                        <div class="logies__subtext"><?php the_field('logies_profile') ?></div>
                        <div class="logies__subtext"><?php the_field('logies_size_five') ?></div>
                        <div class="logies__subtext"><?php the_field('logies_descr_five') ?></div>
                        <div class="logies__price"><?php the_field('logies_price_five') ?></div>
                        <button href="#" class="logies__form main__form">ЗАКАЗАТЬ</button>
                    </div>
                </div>
                <div class="logies__content window__flex">
                    <div class="logies__img ">
                        <img class="logies__img-img" src="<?php the_field('logies_img_six') ?>" alt="">
                    </div>
                    <div class="logies__text">
                        <div class="logies__subtext"><?php the_field('logies_profile') ?></div>
                        <div class="logies__subtext"><?php the_field('logies_size_six') ?></div>
                        <div class="logies__subtext"><?php the_field('logies_descr_six') ?></div>
                        <div class="logies__price"><?php the_field('logies_price_six') ?></div>
                        <button href="#" class="logies__form main__form">ЗАКАЗАТЬ</button>
                    </div>  
                </div>
            </div>
        </div>
    </section>
    <section class="window__slider">
        <div class="container">
            <div class="slider__inner">
            <?php echo do_shortcode('[metaslider id="361"]'); ?>
            </div>
        </div>
    </section>


<?php
get_footer();
?>