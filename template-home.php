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
            <?php get_template_part("/core/views/menu_tap")?>
            <div class="homeSlider__slider">
                <div class="homeSlider__slide-item section" id="homeSection">
                    <?php get_template_part("/core/views/homeTopSlider")?>
                </div>
                <div class="homeSlider__slide-item section" id="servicesSection">
                    Section 2
                </div>
                <div class="homeSlider__slide-item section" id="teamSection">
                    <?php get_template_part("/core/views/homeTeam")?>
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