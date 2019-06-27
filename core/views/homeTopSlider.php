<?php
$slider = carbon_get_post_meta(get_the_ID(), "slider");
$ln = Lang::current();
?>
<div class="homeSlider__container swiper-container">
    <div class="homeSlider__wrapper swiper-wrapper">
        <?php
       // var_dump($slider);
        foreach ($slider as $slide) :
            $slide_background = $slide["slide_background"];
            $title = $slide["slide_title_" . $ln];
            $subtitle = $slide["slide_subtitle_" . $ln];
            $desc_title = $slide["slide_desc_title_" . $ln];
            $desc = $slide["slide_desc_" . $ln];
            $isVideo = ($slide["_type"] == "video") ? true : false;
            ?>
            <div class="homeSlider__slide swiper-slide <?= ($isVideo) ? "video" : "" ?>">
                <div class="homeSlider__slide-content">
                    <span class="homeSlider__title"><?= $title ?></span>
                    <span class="homeSlider__description"><?= $subtitle ?></span>
                    <p class="homeSlider__text"><?= $desc ?></p>
                </div>
                <?php if($isVideo):
                    ?>
                    <div class="homeSlider__image">
                        <video class="homeSlider__video-slide" loop muted autoplay>
                            <source class="homeSlider__source-slide"
                                    src="<?= $slide_background ?>"
                                    type="video/mp4"/>
                        </video>
                        <div class="homeSlider__background">
                        </div>
                    </div>
                <?php else:?>
                    <div class="homeSlider__image" style="background-image:url(<?= $slide_background ?>)"></div>
                <?php endif; ?>
            </div>
        <?php endforeach; ?>
    </div>
    <div class="homeSlider__pagination swiper-pagination">
    </div>
</div>