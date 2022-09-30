<?php
/*
Template Name: Окна
*/
?>

<?
get_header();
?>


<section class="window">
        <div class="container">
            <h1 class="window__paragraf">
                Выбери свою конструкцию окна
            </h1>
            <div class="window__inner">
                <div class="window__content">
                    <div class="window__img">
                        <img src="<?php the_field('window_one_img') ?>" alt="">
                    </div>
                    <div class="window__text">
                        <div class="window__subtext"><?php the_field('window_profile') ?></div>
                        <div class="window__subtext"><?php the_field('window_size_one') ?></div>
                        <div class="window__subtext"><?php the_field('window_descr_one') ?></div>
                        <div class="window__price"><?php the_field('window_price_one') ?></div>
                        <button href="#" class="window__form main__form">ЗАКАЗАТЬ</button>
                    </div>
                </div>
                <div class="window__content window__flex">
                    <div class="window__img">
                        <img class="window__img-img" src="<?php the_field('window_two_img') ?>" alt="">
                    </div>
                    <div class="window__text">
                        <div class="window__subtext"><?php the_field('window_profile') ?></div>
                        <div class="window__subtext"><?php the_field('window_size_two') ?></div>
                        <div class="window__subtext"><?php the_field('window_descr_two') ?></div>
                        <div class="window__price"><?php the_field('window_price_two') ?></div>
                        <button href="#" class="window__form main__form">ЗАКАЗАТЬ</button>
                    </div>
                </div>
                <div class="window__content">
                    <div class="window__img">
                        <img src="<?php the_field('window_three_img') ?>" alt="">
                    </div>
                    <div class="window__text">
                        <div class="window__subtext"><?php the_field('window_profile') ?></div>
                        <div class="window__subtext"><?php the_field('window_size_three') ?></div>
                        <div class="window__subtext"><?php the_field('window_descr_three') ?></div>
                        <div class="window__price"><?php the_field('window_price_three') ?></div>
                        <button href="#" class="window__form main__form">ЗАКАЗАТЬ</button>
                    </div>
                </div>
                <div class="window__content window__flex">
                    <div class="window__img">
                        <img class="window__img-img" src="<?php the_field('window_for_img') ?>" alt="">
                    </div>
                    <div class="window__text">
                        <div class="window__subtext"><?php the_field('window_profile') ?></div>
                        <div class="window__subtext"><?php the_field('window_size_for') ?></div>
                        <div class="window__subtext"><?php the_field('window_descr_for') ?></div>
                        <div class="window__price"><?php the_field('window_price_for') ?></div>
                        <button href="#" class="window__form main__form">ЗАКАЗАТЬ</button>
                    </div>
                </div>
                <div class="window__content">
                    <div class="window__img">
                        <img src="<?php the_field('window_five_img') ?>" alt="">
                    </div>
                     <div class="window__text">
                        <div class="window__subtext"><?php the_field('window_profile') ?></div>
                        <div class="window__subtext"><?php the_field('window_size_five') ?></div>
                        <div class="window__subtext"><?php the_field('window_descr_five') ?></div>
                        <div class="window__price"><?php the_field('window_price_five') ?></div>
                        <button href="#" class="window__form main__form">ЗАКАЗАТЬ</button>
                    </div>
                </div>
                <div class="window__content window__flex">
                    <div class="window__img ">
                        <img class="window__img-img" src="<?php the_field('window_six_img') ?>" alt="">
                    </div>
                     <div class="window__text">
                        <div class="window__subtext"><?php the_field('window_profile') ?></div>
                        <div class="window__subtext"><?php the_field('window_size_six') ?></div>
                        <div class="window__subtext"><?php the_field('window_descr_six') ?></div>
                        <div class="window__price"><?php the_field('window_price_six') ?></div>
                        <button href="#" class="window__form main__form">ЗАКАЗАТЬ</button>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="window__slider">
        <div class="container">
            <div class="slider__inner">
            <?php echo do_shortcode('[metaslider id="255"]'); ?>
            </div>
        </div>
    </section>




<?php
get_footer();
?>