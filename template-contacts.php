<?php
/**
 * Template Name: Partners Template
 */
get_header();

$ln = Lang::current();

get_template_part('/core/views/headerView'); ?>
<SCRIPT src="http://www.webglearth.com/v2/api.js"></SCRIPT>
<main class="main">
    <div class="contact">
        <?php get_template_part("/core/views/single_menu_tap") ?>
        <div class="container type-contact">
            <div class="container">
                <p class="contact__title"><?= Lang::get("Контакты")?>
                </p>
                <div class="breadcrubs">
                    <ul class="breadcrubs__list">
<!--                        <li class="breadcrubs__item">-->
<!--                            <a class="breadcrubs__link" href="">услуги</a>-->
<!--                        </li>-->
<!--                        <li class="breadcrubs__item">-->
<!--                            <a class="breadcrubs__link" href="">для  физических лиц</a>-->
<!--                        </li>-->
                    </ul>
                </div>
                <div class="contact__contact-about">
                    <div class="contact__contact-about-content">
                        <div class="contact__globus" id="earth_div">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</main>
<?php
get_footer();
?>
