<?php
get_header();
$ln = Lang::current();

$name = carbon_get_post_meta(get_the_ID(),"crb_service_name_".$ln);
$content = carbon_get_post_meta(get_the_ID(),"crb_service_content_".$ln);

get_template_part("/core/views/headerView");
if ($_GET['sg']){
    $current_term = get_term_by('id',$_GET['sg'],'service_group');
}
?>
    <main class="main">
        <div class="serviceSingle">
            <?php get_template_part("/core/views/single_menu_tap")?>
            <div class="container type-serviceSingle">
                <div class="container">
                    <p class="serviceSingle__title"><?= $name ?></p>
                    <div class="breadcrubs">
                        <ul class="breadcrubs__list">
                            <li class="breadcrubs__item">
                                <a class="breadcrubs__link" href="<?= get_home_url() ?>">
                                    <?= Lang::get("главная") ?>
                                </a>
                            </li>
                            <li class="breadcrubs__item"><a class="breadcrubs__link" href="<?=get_home_url()?>#servicesSection"><?= Lang::get("услуги")?></a>
                            </li>
                            <?php
                            if (!empty($current_term)):
                                $term_name = $ln == 'ru' ? $current_term->name : carbon_get_term_meta($current_term->term_id,'group_name_'.$ln);
                                ?>
                                <li class="breadcrubs__item"><a class="breadcrubs__link" href="<?=get_term_link($current_term->term_id)?>"><?= $term_name ?></a>
                                </li>
                            <?php endif;?>
                            <li class="breadcrubs__item">
                                <span class="breadcrubs__link" ><?= $name ?></span>
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