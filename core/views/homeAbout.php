<?php
$ln = Lang::current();

$about_desc = carbon_get_post_meta(get_the_ID(), "cbn_about_desc_" . $ln);
$partners_title = carbon_get_post_meta(get_the_ID(), "cbn_about_partners_title_" . $ln);
$partners_content = carbon_get_post_meta(get_the_ID(), "cbn_about_partners_content_" . $ln);
$partners_link = carbon_get_post_meta(get_the_ID(), "cbn_about_partners_link");
$clients_link = carbon_get_post_meta(get_the_ID(), "cbn_about_clients_link");
$clients_title = carbon_get_post_meta(get_the_ID(), "cbn_about_clients_title_" . $ln);
$clients_content = carbon_get_post_meta(get_the_ID(), "cbn_about_clients_content_" . $ln);
?>
<div class="about">
    <div class="about__inner">
        <div class="about__title"><?= Lang::get('о компании') ?>
        </div>
        <div class="about__container swiper-container">
            <div class="about__wrapper swiper-wrapper">
                <div class="about__slide swiper-slide">
                    <div class="container">
                        <div class="link" href="">
                            <div class="about__slide-container">
                                <div class="about__slide-content">
                                    <div class="about__slide-text">
                                        <?= wpautop($about_desc); ?>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="about__slide swiper-slide">
                    <div class="container">
                        <div class="link" href="">
                            <div class="about__slide-container">
                                <div class="slide-content">
                                    <div class="about__slide-title"><?= $partners_title ?>
                                    </div>
                                    <div class="about__slide-text">
                                        <?= wpautop($partners_content) ?>
                                    </div>
                                    <?php if (!empty($partners_link) || $clients_link != 0): ?>
                                        <a class="about__slide-link" href="<?= get_permalink($partners_link) ?>">
                                            <?= Lang::get("Подробнее")?>...
                                        </a>
                                    <?php endif; ?>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="about__slide swiper-slide">
                    <div class="container">
                        <div class="link" href="">
                            <div class="about__slide-container">
                                <div class="slide-content">
                                    <div class="about__slide-title"><?= $clients_title ?>
                                    </div>
                                    <div class="about__slide-text">
                                        <?= wpautop($clients_content) ?>
                                    </div>
                                    <?php if (!empty($clients_link) || $clients_link != 0): ?>
                                        <a class="about__slide-link" href="<?= get_permalink($clients_link) ?>">
                                            <?= Lang::get("Подробнее")?>...</a>
                                    <?php endif; ?>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
