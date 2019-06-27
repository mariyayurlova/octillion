<?php
$slider = carbon_get_post_meta(get_the_ID(), "slider");
$ln = Lang::current();
?>
<div class="homeSlider__container swiper-container">
    <div class="homeSlider__wrapper swiper-wrapper">
        <?php
        foreach ($slider as $slide) :
            $img = $slide["slide_img"];
            $title = $slide["slide_title_" . $ln];
            $subtitle = $slide["slide_subtitle_" . $ln];
            $desc_title = $slide["slide_desc_title_" . $ln];
            $desc = $slide["slide_desc_" . $ln];
            ?>
            <div class="homeSlider__slide swiper-slide">
                <div class="homeSlider__slide-content">
                    <span class="homeSlider__title"><?= $title ?></span>
                    <span class="homeSlider__description"><?= $subtitle ?></span>
                    <p class="homeSlider__text"><?= $desc ?></p>
                </div>
                <div class="homeSlider__image" style="background-image:url(<?= $img ?>)"></div>
            </div>
        <?php endforeach; ?>
    </div>
    <div class="homeSlider__pagination swiper-pagination">
    </div>
</div>
<div class="homeSlider__slide swiper-slide">
    <div class="homeSlider__slide-content"><span class="homeSlider__title">юридическая защита</span><span
                class="homeSlider__description">в Минске</span>
        <p class="homeSlider__text">Юридическая компания, оказывающая широкий спектр услуг. Наши эксперты имеют большой
            опыт и состоят в Коллегиях адвокатов Минска. Мы работаем честно — прозрачные условия договора и
            ценообразования. Наши принципы определяют качество работы. Но мы не беремся за заведомо проигрышные дела.
        </p>
    </div>
    <div class="homeSlider__image"
         style="background-image:url(/wp-content/themes/octillion/src/icons/slider.963cb9.png)">
    </div>
</div>