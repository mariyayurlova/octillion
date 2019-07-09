<?php
$ln = Lang::current();

$terms = get_terms( [
    'taxonomy' => 'service_group',
    'hide_empty' => false,
] );
?>
<div class="services">
    <div class="services__inner">
        <div class="services__title"><?= Lang::get("услуги")?>
        </div>
        <div class="services__container swiper-container">
            <div class="services__wrapper swiper-wrapper">

                <?php foreach ($terms as $term):
                    $term_name = $ln == 'ru' ? $term->name : carbon_get_term_meta($term->term_id,'group_name_'.$ln);
                    $term_desc = $ln == 'ru' ? term_description( $term, 'service_group' ) : carbon_get_term_meta($term->term_id,'group_desc_'.$ln);
                    /**
                     * @var WP_Term $term
                     */
                    $args = [
                        'post_type' => 'service',
                        'tax_query' => [
                            [
                                'taxonomy' => 'service_group',
                                'field' => 'slug',
                                'terms' => $term->slug,
                            ],
                            'posts_per_page' => '5',
                        ],
                    ];
                    $query = new WP_Query( $args );
//                    var_dump($query->posts);
                ?>
                <div class="services__slide swiper-slide">
                    <div class="container">
                        <div class="link" href="">
                            <div class="services__slide-container">
                                <div class="services__slide-content">
                                    <div class="services__slide-title">
                                        <?= $term_name ?>
                                    </div>
                                    <div class="services__slide-text">
                                        <?= $term_desc?>
                                    </div>
                                    <ul class="services__slide-list">
                                        <?php
                                        $counter = 0;
                                        // Цикл
                                        if ( $query->have_posts()) :
                                            while ( $query->have_posts() && $counter < 5):
                                                $query->the_post();
                                                $counter++;
                                                ?>
                                                <li class="services__slide-item">
                                                    <a class="services__slide-link" href="<?= the_permalink().'?sg='.$term->term_id?>"><?= the_title()?></a>
                                                </li>
                                            <?php
                                            endwhile;
                                        endif;
                                        wp_reset_postdata();
                                        ?>
                                    </ul>
                                    <a class="services__slide-add" href="<?=get_term_link($term->term_id)?>">
                                        <?=Lang::get("Подробнее")?>...
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <?php endforeach;?>

            </div>
            <div class="services__button-next swiper-button-next">
            </div>
            <div class="services__button-prev swiper-button-prev">
            </div>
        </div>
    </div>
</div>
