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
                                /**
                                 * @var WP_Term $term
                                 */
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
                                $query = new WP_Query($args);
                                $posts_count = count($query->posts);
                                $posts_count_in_ul = intdiv($posts_count, 3);
                                $posts_remainder_in_ul = $posts_count % 3;

                                $size_first_list = $posts_remainder_in_ul > 0 ? $posts_count_in_ul + 1 : $posts_count_in_ul;
                                $size_second_list = $posts_remainder_in_ul == 2 ? $posts_count_in_ul + 1 : $posts_count_in_ul;
                                $size_third_list = $posts_count_in_ul;

                                if ($query->have_posts()) :?>

                                    <ul class="service__service-about-content-list">
                                        <?php
                                        $first_list_count = 0;
                                        while ($query->have_posts() && $first_list_count < $size_first_list):
                                            $query->the_post();
                                            $first_list_count++;
                                            ?>
                                            <li class="service__service-about-content-item">
                                                <a class="service__service-about-content-link"
                                                   href="<?php the_permalink() ?>">
                                                    <?= the_title() ?>
                                                </a>
                                            </li>
                                        <?php
                                        endwhile; ?>
                                    </ul>
                                    <ul class="service__service-about-content-list">
                                        <?php
                                        $second_list_count = 0;
                                        while ($query->have_posts() && $second_list_count < $size_second_list):
                                            $query->the_post();
                                            $second_list_count++;
                                            ?>
                                            <li class="service__service-about-content-item">
                                                <a class="service__service-about-content-link"
                                                   href="<?php the_permalink() ?>">
                                                    <?= the_title() ?>
                                                </a>
                                            </li>
                                        <?php
                                        endwhile; ?>
                                    </ul>
                                    <ul class="service__service-about-content-list">
                                        <?php
                                        $third_list_count = 0;
                                        while ($query->have_posts() && $third_list_count < $size_third_list):
                                            $query->the_post();
                                            $first_list_count++;
                                            ?>
                                            <li class="service__service-about-content-item">
                                                <a class="service__service-about-content-link"
                                                   href="<?php the_permalink() ?>">
                                                    <?= the_title() ?>
                                                </a>
                                            </li>
                                        <?php
                                        endwhile; ?>
                                    </ul>
                                <?php
                                endif;
                                wp_reset_postdata();
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
