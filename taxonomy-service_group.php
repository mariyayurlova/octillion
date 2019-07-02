<?php
get_header();
$ln = Lang::current();
/**
 * @var WP_Term $current_term
 */
$current_term = get_queried_object();
$term_name = $ln == 'ru' ?
    $current_term->name :
    carbon_get_term_meta($current_term->term_id, 'group_name_' . $ln);
$term_desc = $ln == 'ru' ?
    term_description($current_term, 'service_group') :
    carbon_get_term_meta($current_term->term_id, 'group_desc_' . $ln);

get_template_part("/core/views/headerView");
?>
    <main class="main">
        <div class="service">
            <?php get_template_part("/core/views/single_menu_tap") ?>
            <div class="container type-service">
                <div class="container">
                    <p class="service__title"><?= Lang::get("услуги") ?></p>
                    <div class="breadcrubs">
                        <ul class="breadcrubs__list">
                            <li class="breadcrubs__item">
                                <a class="breadcrubs__link" href="<?= get_home_url() ?>#blogSection">
                                    <?= Lang::get("услуги") ?>
                                </a>
                            </li>
                            <li class="breadcrubs__item">
                                <span class="breadcrubs__link"><?= $term_name ?></span>
                            </li>
                        </ul>
                    </div>
                    <div class="service__service-about">
                        <div class="service__service-about-content">
                            <p class="service__service-about-content-title"><?= $term_name ?></p>
                            <p class="service__service-about-content-text"><?= $term_desc ?></p>
                            <div class="service__service-about-content-type">
                                <?php
                                $args = [
                                    'post_type' => 'service',
                                    'tax_query' => [
                                        [
                                            'taxonomy' => 'service_group',
                                            'field' => 'slug',
                                            'terms' => $current_term->slug,
                                        ]
                                    ],
                                ];
                                $query = new WP_Query();
                                $services = $query->query($args);

                                if (count($services) > 0) :
                                    $posts_in_ul = intdiv(count($services), 3);
                                    $posts_remainder_in_ul = count($services) % 3;
                                    $posts_in_ul = $posts_remainder_in_ul % 3 > 0 ? $posts_in_ul + 1 : $posts_in_ul;
                                    $service_table = array_chunk($services, $posts_in_ul);
                                    foreach ($service_table as $column) : ?>
                                        <ul class="service__service-about-content-list">
                                            <?php
                                            $first_list_count = 0;
                                            foreach ($column as $row) :
                                                /**
                                                 * @var WP_Post $row
                                                 */
                                                ?>
                                                <li class="service__service-about-content-item">
                                                    <a class="service__service-about-content-link"
                                                       href="<?= get_permalink($row->ID) ?>">
                                                        <?= $row->post_title ?>
                                                    </a>
                                                </li>
                                            <?php
                                            endforeach;
                                            ?>
                                        </ul>
                                    <?php
                                    endforeach;
                                endif;
                                ?>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </main>
<?php
get_footer();
