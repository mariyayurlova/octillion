<?php
/**
 * Template Name: Partners Template
 */
get_header();
$ln = Lang::current();
$title = carbon_get_post_meta(get_the_ID(), 'crb_page_name_'.$ln);
$title = !empty($title)? $title : get_the_title(get_the_ID());
get_template_part('/core/views/headerView');
?>
<SCRIPT src="http://www.webglearth.com/v2/api.js"></SCRIPT>
<main class="main">
    <div class="contact">
        <?php get_template_part("/core/views/single_menu_tap") ?>
        <div class="container type-contact">
            <div class="container">
                <p class="contact__title"><?= $title ?></p>
                <div class="breadcrubs">
                    <ul class="breadcrubs__list">
                        <li class="breadcrubs__item">
                            <a class="breadcrubs__link" href="<?= get_home_url() ?>">
                                <?= Lang::get("главная") ?>
                            </a>
                        </li>
                        <li class="breadcrubs__item">
                            <a class="breadcrubs__link" href="<?= get_home_url()?>#aboutSection">
                                <?= Lang::get("о компании") ?>
                            </a>
                        </li>
                        <li class="breadcrubs__item">
                            <span class="breadcrubs__link" ><?= $title ?></span>
                        </li>
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
