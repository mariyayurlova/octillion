<?php
/**
 * Template Name: Home Template
 */
get_header();

$slider = carbon_get_post_meta(get_the_ID(), "slider");
$ln = Lang::current();

get_template_part("/core/views/headerView")
?>
    <main class="main">
        <div class="homeSlider">
            <?php get_template_part("/core/views/asideView")?>
            <div class="homeSlider__slider">
                <div class="homeSlider__slide-item section" id="homeSection">
                    <?php get_template_part("/core/views/homeTopSlider")?>
                </div>
                <div class="homeSlider__slide-item section" id="servicesSection">
                    <div class="team">
                        <div class="team__inner">
                            <div class="team__title">команда
                            </div>
                            <div class="team__container swiper-container">
                                <div class="team__wrapper swiper-wrapper">
                                    <div class="team__slide swiper-slide">
                                        <div class="team__slide-content">
                                            <div class="team__slide-title">
                                                Алиса Селезнева
                                            </div>
                                            <div class="team__slide-subtitle">
                                                адвокат
                                            </div>
                                            <div class="team__slide-text">
                                                Юридическая компания, оказывающая широкий
                                                спектр услуг. Наши эксперты имеют большой опыт и состоят в Коллегиях
                                                адвокатов Минска.
                                            </div>
                                        </div>
                                        <div class="team__slide-image">
                                            <img class="team__slide-image-inner"
                                                 src="/wp-content/themes/octillion/src/icons/team-1.35a776.png"
                                                 alt="Logo" title=""/>
                                        </div>
                                    </div>
                                    <div class="team__slide swiper-slide">
                                        <div class="team__slide-content">
                                            <div class="team__slide-title">
                                                Алиса Селезнева
                                            </div>
                                            <div class="team__slide-subtitle">
                                                адвокат
                                            </div>
                                            <div class="team__slide-text">Юридическая компания, оказывающая широкий
                                                спектр услуг. Наши эксперты имеют большой опыт и состоят в Коллегиях
                                                адвокатов Минска.
                                            </div>
                                        </div>
                                        <div class="team__slide-image">
                                            <img class="team__slide-image-inner"
                                                 src="/wp-content/themes/octillion/src/icons/team-1.35a776.png"
                                                 alt="Logo" title=""/>
                                        </div>
                                    </div>
                                    <div class="team__slide swiper-slide">
                                        <div class="team__slide-content">
                                            <div class="team__slide-title">
                                                Алиса Селезнева
                                            </div>
                                            <div class="team__slide-subtitle">
                                                адвокат
                                            </div>
                                            <div class="team__slide-text">
                                                Юридическая компания, оказывающая широкий
                                                спектр услуг. Наши эксперты имеют большой опыт и состоят в Коллегиях
                                                адвокатов Минска.
                                            </div>
                                        </div>
                                        <div class="team__slide-image">
                                            <img class="team__slide-image-inner"
                                                 src="/wp-content/themes/octillion/src/icons/team-1.35a776.png"
                                                 alt="Logo" title=""/>
                                        </div>
                                    </div>
                                    <div class="team__slide swiper-slide">
                                        <div class="team__slide-content">
                                            <div class="team__slide-title">
                                                Алиса Селезнева
                                            </div>
                                            <div class="team__slide-subtitle">
                                                адвокат
                                            </div>
                                            <div class="team__slide-text">
                                                Юридическая компания, оказывающая широкий
                                                спектр услуг. Наши эксперты имеют большой опыт и состоят в Коллегиях
                                                адвокатов Минска.
                                            </div>
                                        </div>
                                        <div class="team__slide-image">
                                            <img class="team__slide-image-inner"
                                                 src="/wp-content/themes/octillion/src/icons/team-2.3a48ac.png"
                                                 alt="Logo" title=""/>
                                        </div>
                                    </div>
                                </div>
                                <div class="team__button-next swiper-button-next">
                                </div>
                                <div class="team__button-prev swiper-button-prev">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="homeSlider__slide-item section" id="teamSection"
                >Section 3
                </div>
                <div class="homeSlider__slide-item section" id="blogSection">
                    Section 4
                </div>
                <div class="homeSlider__slide-item section" id="contactSection">
                    Section 5
                </div>
            </div>
        </div>
    </main>
<?php
get_footer();