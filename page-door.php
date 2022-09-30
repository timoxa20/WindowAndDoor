<?php
/*
Template Name: Двери
*/
?>

<?php
get_header();
?>

<section class="door">
        <div class="container">
            <h1 class="door__paragraf">
                Выбери свою конструкцию окна
            </h1>
            <div class="door__inner">
                <div class="door__content">
                    <div class="door__img">
                        <img src="<?php the_field('door_img-one') ?>" alt="">
                    </div>
                    <div class="door__text">
                        <div class="door__subtext"><?php the_field('dor_profile') ?></div>
                        <div class="door__subtext"><?php the_field('door_size_one') ?></div>
                        <div class="door__subtext"><?php the_field('door_descr_one') ?></div>
                        <div class="door__price"><?php the_field('door_price_one') ?></div>
                        <button href="#" class="door__form main__form">ЗАКАЗАТЬ</button>
                    </div>
                </div>
                <div class="door__content window__flex">
                    <div class="door__img">
                        <img class="door__img-img" src="<?php the_field('door_img-two') ?>" alt="">
                    </div>
                    <div class="door__text">
                        <div class="door__subtext"><?php the_field('dor_profile') ?></div>
                        <div class="door__subtext"><?php the_field('door_size_two') ?></div>
                        <div class="door__subtext"><?php the_field('door_descr_two') ?></div>
                        <div class="door__price"><?php the_field('door_price_two') ?></div>
                        <button href="#" class="door__form main__form">ЗАКАЗАТЬ</button>
                    </div>                   
                </div>
                <div class="door__content">
                    <div class="door__img">
                        <img src="<?php the_field('door_img-three') ?>" alt="">
                    </div>
                    <div class="door__text">
                        <div class="door__subtext"><?php the_field('dor_profile') ?></div>
                        <div class="door__subtext"><?php the_field('door_size_three') ?></div>
                        <div class="door__subtext"><?php the_field('door_descr_three') ?></div>
                        <div class="door__price"><?php the_field('door_price_three') ?></div>
                        <button href="#" class="door__form main__form">ЗАКАЗАТЬ</button>
                    </div>
                </div>
                <div class="door__content window__flex">
                    <div class="door__img">
                        <img class="door__img-img" src="<?php the_field('door_img-for') ?>" alt="">
                    </div>
                    <div class="door__text">
                        <div class="door__subtext"><?php the_field('dor_profile') ?></div>
                        <div class="door__subtext"><?php the_field('door_size_for') ?></div>
                        <div class="door__subtext"><?php the_field('door_descr_for') ?></div>
                        <div class="door__price"><?php the_field('door_price_for') ?></div>
                        <button href="#" class="door__form main__form">ЗАКАЗАТЬ</button>
                    </div> 
                </div>
            </div>
        </div>
    </section>

    <section class="window__slider">
        <div class="container">
            <div class="slider__inner">
            <?php echo do_shortcode('[metaslider id="300"]'); ?>
            </div>
        </div>
    </section>



<?php
get_footer();
?>