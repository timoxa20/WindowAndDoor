<?
get_header();
?>


    <section class="one">
        <div class="container">
            <div class="one__inner">
                <div class="one__inner-img">
                    <img src="<?php the_field('rullete') ?>" alt="">
                    <div class="one__inner-text">
                        <?php the_field('measure') ?>
                    </div>
                </div>

                <div class="one__inner-img">
                    <img src="<?php the_field('deliveryimg') ?>" alt="">
                    <div class="one__inner-text">
                        <?php the_field('deliverytext') ?>
                    </div>
                </div>

                <div class="one__inner-img">
                    <img src="<?php the_field('installationimg') ?>" alt="">
                    <div class="one__inner-text">
                        <?php the_field('installationtext') ?>
                    </div>
                </div>

                <div class="one__inner-img benefit">
                    <img src="<?php the_field('guaranteeimg') ?>" alt="">
                    <div class="one__inner-text">
                        <?php the_field('guaranteetext') ?>
                    </div>
                </div>

            </div>
            <div class="one__img">
                <a href="#" class="one__img-advantages">
                    <img src="<?php the_field('saleimg') ?>" alt="">
                </a>
            </div>
            <div class="one__text">
            <?php the_field('descr') ?>
            </div>
        </div>
    </section>

    <section class="tabs">
        <div class="container">
            <div class="tabs__name">
                Мы производим современные пластиковые окна по <span>индивидуальным пожеланиям</span> и размерам, которые
                удовлетворяют любые пожелания наших клиентов.
            </div>
            <div class="tabs__inner">
                <a class="tabs__inner-item  tabs__inner-item--active" href="#tab-1">Окна</a>
                <a class="tabs__inner-item" href="#tab-2">Двери</a>
                <a class="tabs__inner-item" href="#tab-3">Балконы и лоджий</a>
                <a class="tabs__inner-item" href="#tab-4">Жалюзи</a>
            </div>
            <div class="tabs__content">
                <div id="tab-1" class="tabs__content-item tabs__content-item--active">
                    <div class="tabs__box">
                        <img src="<?php the_field('windowone') ?>" alt="">
                        <div class="tabs__text"><?php the_field('textdescr') ?></div>
                        <div class="tabs__text"><?php the_field('windowonesize') ?></div>
                        <div class="tabs__text"><?php the_field('windowonedescr') ?></div>
                        <div class="tabs__subtext">От <span>91 у.е</span></div>
                        <a class="tabs__button main__form" href="#">ЗАКАЗАТЬ</a>
                    </div>
                    <div class="tabs__box">
                        <img src="<?php the_field('windowtwoo') ?>" alt="">
                        <div class="tabs__text"><?php the_field('textdescr') ?></div>
                        <div class="tabs__text"><?php the_field('windowtwoosize') ?></div>
                        <div class="tabs__text"><?php the_field('windowtwoodescr') ?></div>
                        <div class="tabs__subtext">От <span>91 у.е</span></div>
                        <a href="#" class="tabs__button main__form">ЗАКАЗАТЬ</a>
                    </div>
                    <div class="tabs__box">
                        <img src="<?php the_field('windowtthree') ?>" alt="">
                        <div class="tabs__text"><?php the_field('textdescr') ?></div>
                        <div class="tabs__text"><?php the_field('windowthreesize') ?></div>
                        <div class="tabs__text"><?php the_field('windowthreedescr') ?></div>
                        <div class="tabs__subtext">От <span>91 у.е</span></div>
                        <a href="#" class="tabs__button main__form">ЗАКАЗАТЬ</a>
                    </div>
                    <div class="tabs__map"><a href="#">Показать ещё <svg width="40" height="40" viewBox="0 0 23 13"
                                fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path
                                    d="M14.1672 11.8502L21.9797 7.16269C22.5898 6.7966 22.5898 6.20316 21.9797 5.83707L14.1672 1.14957C13.557 0.783477 12.568 0.783477 11.9578 1.14957C11.3477 1.51566 11.3477 2.1091 11.9578 2.4752L17.1031 5.56238H2.125C1.26172 5.56238 0.5625 5.98191 0.5625 6.49988C0.5625 7.01785 1.26172 7.43738 2.125 7.43738H17.1031L11.9578 10.5246C11.6531 10.7074 11.5 10.9474 11.5 11.1874C11.5 11.4274 11.6523 11.6674 11.9578 11.8502C12.568 12.2163 13.557 12.2163 14.1672 11.8502Z"
                                    fill="#C5A862" />
                            </svg></a></div>
                </div>

                <div id="tab-2" class="tabs__content-item">
                    <div class="tabs__box">
                        <img src="<?php the_field('doorone') ?>" alt="">
                        <div class="tabs__text"><?php the_field('textdescr') ?></div>
                        <div class="tabs__text"><?php the_field('dooronesize') ?></div>
                        <div class="tabs__text"><?php the_field('doorone_descr') ?></div>
                        <div class="tabs__subtext"><?php the_field('doorone_price') ?></div>
                        <a href="#" class="tabs__button main__form">ЗАКАЗАТЬ</a>
                    </div>
                    <div class="tabs__box">
                        <img src="<?php the_field('doortwo') ?>" alt="">
                        <div class="tabs__text"><?php the_field('textdescr') ?></div>
                        <div class="tabs__text"><?php the_field('doortwosize') ?></div>
                        <div class="tabs__text"><?php the_field('doortwo_descr') ?></div>
                        <div class="tabs__subtext"><?php the_field('doortwo_price') ?></div>
                        <a href="#" class="tabs__button main__form">ЗАКАЗАТЬ</a>
                    </div>
                    <div class="tabs__box">
                        <img src="<?php the_field('doorthree') ?>" alt="">
                        <div class="tabs__text"><?php the_field('textdescr') ?></div>
                        <div class="tabs__text"><?php the_field('doorthreesize') ?></div>
                        <div class="tabs__text"><?php the_field('doorthree_descr') ?></div>
                        <div class="tabs__subtext"><?php the_field('doorthree_price') ?></div>
                        <a href="#" class="tabs__button main__form">ЗАКАЗАТЬ</a>
                    </div>
                    <div class="tabs__map"><a href="#">Показать ещё <svg width="40" height="40" viewBox="0 0 23 13"
                                fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path
                                    d="M14.1672 11.8502L21.9797 7.16269C22.5898 6.7966 22.5898 6.20316 21.9797 5.83707L14.1672 1.14957C13.557 0.783477 12.568 0.783477 11.9578 1.14957C11.3477 1.51566 11.3477 2.1091 11.9578 2.4752L17.1031 5.56238H2.125C1.26172 5.56238 0.5625 5.98191 0.5625 6.49988C0.5625 7.01785 1.26172 7.43738 2.125 7.43738H17.1031L11.9578 10.5246C11.6531 10.7074 11.5 10.9474 11.5 11.1874C11.5 11.4274 11.6523 11.6674 11.9578 11.8502C12.568 12.2163 13.557 12.2163 14.1672 11.8502Z"
                                    fill="#C5A862" />
                            </svg></a></div>
                </div>
                <div id="tab-3" class="tabs__content-item">
                    <div class="tabs__box">
                        <img src="<?php the_field('logiesone') ?>" alt="">
                        <div class="tabs__text"><?php the_field('textdescr') ?></div>
                        <div class="tabs__text"><?php the_field('logiesone_size') ?></div>
                        <div class="tabs__text"><?php the_field('logiesone_descr') ?></div>
                        <div class="tabs__subtext"><?php the_field('logiesone_price') ?></div>
                        <a href="#" class="tabs__button main__form">ЗАКАЗАТЬ</a>
                    </div>
                    <div class="tabs__box">
                        <img src="<?php the_field('logiestwo') ?>" alt="">
                        <div class="tabs__text"><?php the_field('textdescr') ?></div>
                        <div class="tabs__text"><?php the_field('logiestwo_size') ?></div>
                        <div class="tabs__text"><?php the_field('logiestwo_descr') ?></div>
                        <div class="tabs__subtext"><?php the_field('logiestwo_price') ?></div>
                        <a href="#" class="tabs__button main__form">ЗАКАЗАТЬ</a>
                    </div>
                    <div class="tabs__box">
                        <img src="<?php the_field('logiesthree') ?>" alt="">
                        <div class="tabs__text"><?php the_field('textdescr') ?></div>
                        <div class="tabs__text"><?php the_field('logiesthree_size') ?></div>
                        <div class="tabs__text"><?php the_field('logiesthree_descr') ?></div>
                        <div class="tabs__subtext"><?php the_field('logiesthree_price') ?></div>
                        <a href="#" class="tabs__button main__form">ЗАКАЗАТЬ</a>
                    </div>
                    <div class="tabs__map"><a href="#">Показать ещё <svg width="40" height="40" viewBox="0 0 23 13"
                                fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path
                                    d="M14.1672 11.8502L21.9797 7.16269C22.5898 6.7966 22.5898 6.20316 21.9797 5.83707L14.1672 1.14957C13.557 0.783477 12.568 0.783477 11.9578 1.14957C11.3477 1.51566 11.3477 2.1091 11.9578 2.4752L17.1031 5.56238H2.125C1.26172 5.56238 0.5625 5.98191 0.5625 6.49988C0.5625 7.01785 1.26172 7.43738 2.125 7.43738H17.1031L11.9578 10.5246C11.6531 10.7074 11.5 10.9474 11.5 11.1874C11.5 11.4274 11.6523 11.6674 11.9578 11.8502C12.568 12.2163 13.557 12.2163 14.1672 11.8502Z"
                                    fill="#C5A862" />
                            </svg></a></div>
                </div>
                <div id="tab-4" class="tabs__content-item">
                    <div class="tabs__box">
                        <img src="<?php the_field('blindone') ?>" alt="">
                        <div class="tabs__text"><?php the_field('blindtextone') ?></div>
                        <div class="tabs__subtext"><?php the_field('blindpriceone') ?></div>
                        <a href="#" class="tabs__button main__form">ЗАКАЗАТЬ</a>
                    </div>
                    <div class="tabs__box">
                        <img src="<?php the_field('blindtwo') ?>" alt="">
                        <div class="tabs__text"><?php the_field('blindtexttwo') ?></div>
                        <div class="tabs__subtext"><?php the_field('blindpricetwo') ?></div>
                        <a href="#" class="tabs__button main__form">ЗАКАЗАТЬ</a>
                    </div>
                    <div class="tabs__box">
                        <img src="<?php the_field('blindthree') ?>" alt="">
                        <div class="tabs__text"><?php the_field('blindtextthree') ?></div>
                        <div class="tabs__subtext"><?php the_field('blindpricethree') ?></div>
                        <a href="#" class="tabs__button main__form">ЗАКАЗАТЬ</a>
                    </div>
                    <div class="tabs__map"><a href="#">Показать ещё <svg width="40" height="40" viewBox="0 0 23 13"
                                fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path
                                    d="M14.1672 11.8502L21.9797 7.16269C22.5898 6.7966 22.5898 6.20316 21.9797 5.83707L14.1672 1.14957C13.557 0.783477 12.568 0.783477 11.9578 1.14957C11.3477 1.51566 11.3477 2.1091 11.9578 2.4752L17.1031 5.56238H2.125C1.26172 5.56238 0.5625 5.98191 0.5625 6.49988C0.5625 7.01785 1.26172 7.43738 2.125 7.43738H17.1031L11.9578 10.5246C11.6531 10.7074 11.5 10.9474 11.5 11.1874C11.5 11.4274 11.6523 11.6674 11.9578 11.8502C12.568 12.2163 13.557 12.2163 14.1672 11.8502Z"
                                    fill="#C5A862" />
                            </svg></a></div>
                </div>
            </div>
        </div>
    </section>


    <section class="price">
        <div class="container">
            <div class="price__inner">
                <div class="price__content">
                    <div class="price__text">
                        Как мы добиваемся <br> низких цен?
                    </div>
                    <div class="price__subtext"><span></span> Большой обьём производства</div>
                    <div class="price__subtext"><span></span> Экономия времени благодаря автоматической линии</div>
                    <div class="price__subtext"><span></span> Небольшие затраты на маркетинг, рекламу и аренду офисов
                    </div>
                    <a href="#" class="price__button main__form">
                        <span class="price__button-span">
                            <span class="price__button-spanone">
                                <span>Вызвать замерщика</span>
                            </span>
                        </span>
                    </a>
                </div>
                <div class="price__img">
                    <img src="<?php  echo bloginfo('template_url'); ?>/assets/images/promo-window.png" alt="">
                </div>
            </div>
        </div>
    </section>

    <section class="galeria">
        <div class="container">
            <div class="galeria__text">
                Наши работы
            </div>
            <div class="galeria__inner">
                <div class="galeria__window">
                    <a class="galeria__img" href="#" class=""><img src="<?php  echo bloginfo('template_url'); ?>/assets/images/window.png" alt="">
                    </a>
                    <div class="galeria__subtext">
                        Окна
                    </div>
                    <a href="#" class="galeria__item">Читать далее</a>
                </div>
                <div class="galeria__window">
                    <a class="galeria__img" href="#"><img src="<?php  echo bloginfo('template_url'); ?>/assets/images/door.png" alt=""></a>
                    <div class="galeria__subtext">
                        Двери
                    </div>
                    <a href="#" class="galeria__item">Читать далее</a>
                </div>
                <div class="galeria__window">
                    <a class="galeria__img" href="#"><img src="<?php  echo bloginfo('template_url'); ?>/assets/images/balconies.png" alt=""></a>

                    <div class="galeria__subtext">
                        Балконы
                    </div>
                    <a href="#" class="galeria__item">Читать далее</a>
                </div>
                <div class="galeria__window">
                    <a class="galeria__img" href="#"><img src="<?php  echo bloginfo('template_url'); ?>/assets/images/logias.png" alt=""></a>
                    <div class="galeria__subtext">
                        Лоджий
                    </div>
                    <a href="#" class="galeria__item">Читать далее</a>
                </div>
            </div>
        </div>
    </section>

    <section class="questions">
        <div class="container">
            <div class="questions__paragraf">
                Часто задаваемые вопросы
            </div>
            <div  class="questions__inner">
                <div class="questions__item">
                    <div  class="questions__item-text">
                    <?php the_field('questionstext_one') ?>


                    </div>
                    <div   class="questions__item-subtext">
                    <?php the_field('questionssubtext_one') ?>
                    </div>
                </div>
                <div class="questions__item">
                    <div class="questions__item-text">
                    <?php the_field('questionstext_two') ?>
                    </div>
                    <div class="questions__item-subtext">
                    <?php the_field('questionssubtext_two') ?>
                    </div>
                </div>
                <div class="questions__item">
                    <div class="questions__item-text">
                    <?php the_field('questionstext_three') ?>
                    </div>
                    <div class="questions__item-subtext">
                    <?php the_field('questionssubtext_three') ?>
                    </div>
                </div>
                <div class="questions__item">
                    <div class="questions__item-text">
                    <?php the_field('questionstext_for') ?>
                    </div>
                    <div class="questions__item-subtext">
                    <?php the_field('questionssubtext_for') ?>
                    </div>
                </div>
                <div class="questions__item">
                    <div class="questions__item-text">
                    <?php the_field('questionstext_five') ?>
                    </div>
                    <div class="questions__item-subtext">
                    <?php the_field('questionssubtext_five') ?>
                    </div>
                </div>
                <div class="questions__item">
                    <div class="questions__item-text">
                    <?php the_field('questionstext_six') ?>
                    </div>
                    <div class="questions__item-subtext">
                    <?php the_field('questionssubtext_six') ?>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="form">
        <div class="container">
            <div class="form__inner">
                <div class="form__form">
                    <div class="form__text">
                        Заказать бесплатную консультацию
                    </div>
                    <div class="form__subtext">
                        Просто заполните эту форму, наш менеджер свяжется с вами для уточнения деталей.
                    </div>
                    <div class="form__input" action="">
                    <?php echo do_shortcode('[contact-form-7 id="239" title="Форма внизу"]') ?>
                    </div>
                </div>
                <div class="form__img">
                    <img src="<?php  echo bloginfo('template_url'); ?>/assets/images/form.png" alt="">
                </div>
            </div>
        </div>
    </section> 

    
    <?php
    get_footer();
    ?>
