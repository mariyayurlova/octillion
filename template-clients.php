<?php
/**
 * Template Name: Clients Template
 */
get_header();

$ln = Lang::current();
$clients = carbon_get_post_meta(get_the_ID(), "crb_clients");
$title = carbon_get_post_meta(get_the_ID(), 'crb_page_name_'.$ln);
$title = !empty($title)? $title : get_the_title(get_the_ID());
get_template_part('/core/views/headerView'); ?>
<main class="main">
    <div class="clients">
        <?php get_template_part("/core/views/single_menu_tap") ?>
        <div class="container type-clients">
            <div class="container">
                <p class="clients__title"><?= $title ?></p>
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
                <div class="clients__clients-about">
                    <div class="clients__clients-about-content">
                        <?php foreach ($clients as $client) :
                        $link = $client["client_link"];
                        $img = $client["client_logo"];
                        if (!empty($link)):
                        ?>
                            <a class="clients__clients-item" href="<?= esc_url($link)?>">
                                <img class="clients__clients-image" src="<?= $img?>" alt="A1" title=""/>
                            </a>
                            <?php else:?>
                            <span class="clients__clients-item" >
                                <img class="clients__clients-image" src="<?= $img?>" alt="A1" title=""/>
                            </span>
                        <?php endif; endforeach; ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
</main>
<?php
get_footer();
?>
