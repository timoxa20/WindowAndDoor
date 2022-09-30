<?php
/*
Template Name: О нас
*/
?>

<?php
get_header();
?>

<section class="us">
        <div class="container">
            <h1 class="us__paragraf">
                О нас
            </h1>
            <div class="us__text">
            <?php the_field('us_text') ?>
            </div>
        </div>
    </section>

<?php
get_footer();
?>