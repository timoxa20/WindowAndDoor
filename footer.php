
<!-- popup -->
<div class="popup_engineer">
        <div class="popup_dialog">
            <div class="popup_content text-center">
                <button type="button" class="popup_close"><strong>&times;</strong></button>
                <div class="popup__form">
                    <div class="form__phone" action="#">
                    <?php echo do_shortcode('[contact-form-7 id="242" title="Всплывающее форма"]') ?>
                    </div>
                    <div class="form__images">
                        <img src="<?php  echo bloginfo('template_url'); ?>/assets/images/contact.png" alt="">
                    </div>
                </div>
            </div>
        </div>
    </div>


<footer class="footer">
        <div class="container">
            <div class="footer__text">
                Окна Тирасполь, Окна Бендеры, Окна ПМР. Полный цикл от замера до установки.
                <br>3200, ул. Котовского 12, Бендеры MD
            </div>
            <div class="footer__subtext">Все права защищены 2021</div>
        </div>
    </footer>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <?php
wp_footer();
?>
</body>


</html>