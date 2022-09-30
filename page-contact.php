<?php
/*
Template Name: Контакты
*/
?>

<?php
get_header();
?>

<section class="contact">
        <div class="container">
            <div class="contact__inner">
                <div class="contact__text">
                    <div class="contact__strit">
                    <?php the_field('contact_strit') ?>
                    </div>
                    <div class="contact__phone">
                    <?php the_field('contact_phone') ?>
                    </div>
                </div>
                <div class="contact__img">
                    <img src="<?php  echo bloginfo('template_url'); ?>/assets/images/contact.png" alt="">
                </div>
            </div>
        </div>
    </section>

<?php
get_footer();
?>