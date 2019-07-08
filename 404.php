<?php
get_header();
$ln = Lang::current();

get_template_part("/core/views/headerView")
?>
    <main class="main">
        <div class="error">
            <?php get_template_part("/core/views/single_menu_tap") ?>
            <div class="error__slide">
                <div class="error__slide-content"><span class="error__title">404</span>
                    <span class="error__description"><?= Lang::get("Страница не найдена")?></span>
                    <p class="error__text">
                        Нерпавильно набран номер, или такой страницы на сайте не существует. Начните с главной страницы или воспользуйтесь меню.
                    </p>
                </div>
                <div class="error__image" style="background-image:url(/wp-content/themes/octillion/src/icons/slider.963cb9.png)">
                </div>
            </div>
        </div>
    </main>
<?php
get_footer();