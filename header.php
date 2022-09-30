<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php bloginfo('name'); echo " | "; bloginfo('description') ?></title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Roboto+Condensed:wght@300;400;700&family=Roboto+Slab:wght@400;500;700&family=Roboto:wght@300;400;500;700&display=swap"
        rel="stylesheet">
    <!-- <link rel="stylesheet" href="css/slick-theme.css">
    <link rel="stylesheet" href="css/style.min.css"> -->

<?php
wp_head();
?>
</head>



<body>
    <header class="header">
        <div class="container">
            <div class="header__modil">
                <div class="header__logo">
                    <div class="header__logo-img">
                        <?php the_custom_logo() ?>
                    </div>
                </div>
                <div class="burger">
                    <span></span>
                </div>
                <div class="mobile__bacgraund">


                    <div class="header__top">
                        <nav class="header__link">
                        <?php 
                            
                            wp_nav_menu([
                                'menu'           => 'art',
                                'container'      => false,
                                'menu_class'     => 'header__link-menu',
                                'echo'           => true,
                                'fallback_cd'    => 'wp_page_menu',
                                'item_wrap'      => '<ul class="header__link-menu">%3$s</ul>',
                                'depth'          => 1,
                            ])
                            
                            ?>
                        </nav>
                        <div class="header__text">
                        <?php the_field('map', 2) ?>
                        </div>
                        <div class="header__phone">
                            <a href="tel:<?php the_field('phone', 2) ?>">
                                <?php the_field('phone', 2) ?>
                            </a>
                            <span>Ежедневно с 8 до 21</span>
                        </div>
                    </div>
                    <div class="header__bottom">
                        <nav class="header__menu">
                            <?php 
                            
                            wp_nav_menu([
                                'menu'           => 'Main',
                                'container'      => false,
                                'menu_class'     => 'header__menu-inner',
                                'echo'           => true,
                                'fallback_cd'    => 'wp_page_menu',
                                'item_wrap'      => '<ul class="header__menu-inner">%3$s</ul>',
                                'depth'          => 1,
                            ])
                            
                            ?>
                            <li class="header__menu-list windowblind__icons"><a href="https://windowblindpmr.com">Жалюзи</a></li>
                            <a href="#" class="header__button main__form">
                                <span class="header__button-span">
                                    <span class="header__button-spanone">
                                        <span>Вызвать замерщика</span>
                                    </span>
                                </span>
                            </a>
                        </nav>
                    </div>
                </div>
            </div>
            <div class="header__sale">
                <div class="header__img">
                    <img src="<?php  echo bloginfo('template_url'); ?>/assets/images/Rectangle.png" alt="">
                    <div class="header__subtext">
                        При заказе с сайта<br>Скидка
                        <span>-30%</span>
                        
                    </div>
                    <div class="header__form">
                    <?php echo do_shortcode('[contact-form-7 id="238" title="форма шапки"]') ?>
                    </div>
                </div>
            </div>
        </div>
    </header>