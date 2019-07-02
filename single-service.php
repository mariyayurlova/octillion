<?php
get_header();
$ln = Lang::current();

$name = carbon_get_post_meta(get_the_ID(),"crb_service_name_".$ln);
$content = carbon_get_post_meta(get_the_ID(),"crb_service_content_".$ln);

get_template_part("/core/views/headerView")
?>
    <main class="main">
        <div class="serviceSingle">
            <?php get_template_part("/core/views/single_menu_tap")?>
            <div class="container type-serviceSingle">
                <div class="container">
                    <p class="serviceSingle__title"><?= $name ?></p>
                    <div class="breadcrubs">
                        <ul class="breadcrubs__list">
                            <li class="breadcrubs__item"><a class="breadcrubs__link" href=""><?= Lang::get("услуги")?></a>
                            </li>
                            <li class="breadcrubs__item">
                                <slag class="breadcrubs__link" ><?= $name ?></slag>
                            </li>
                        </ul>
                    </div>
                    <div class="serviceSingle__serviceSingle-about">
                        <div class="serviceSingle__serviceSingle-about-content">
                            <div class="serviceSingle__serviceSingle-about-content-text">
                                <?php echo apply_filters( 'the_content', $content); ?>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </main>
<?php
get_footer();