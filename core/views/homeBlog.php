<?php

$ln = Lang::current();
$archive_title = carbon_get_theme_option("archive_title_" . $ln);
$archive_desc = carbon_get_theme_option("archive_desc_" . $ln);

?>
<div class="blog">
    <div class="blog__inner">
        <div class="container">
            <div class="blog__blog-about">
                <div class="blog__about-content">
                    <p class="blog__about-content-title"><?= $archive_title ?>
                    </p>
                    <div class="blog__about-content-text">
                        <?= wpautop($archive_desc) ?>
                    </div>
                </div>
                <div class="blog__about-list">
                    <?php
                    $args = [
                        'post_type' => 'post'
                    ];

                    $query = new WP_Query( $args );

                    if ( $query->have_posts() ) :
                        while ( $query->have_posts() ) :
                            $query->the_post();
                            $name = carbon_get_post_meta(get_the_ID() , "crb_page_name_".$ln);
                            $excerpt = carbon_get_post_meta(get_the_ID() , "crb_page_excerpt_".$ln);
                            $img_url = get_the_post_thumbnail_url( get_the_ID(), "full" );
                            ?>
                            <div class="blog__about-item">
                                <a class="blog__about-link" href="<?php the_permalink()?>">
                                    <div class="blog__item-image">
                                        <?php if (!empty($img_url)):?>
                                        <img class="blog__item-image-content" src="<?= $img_url ?>" alt="A1" title=""/>
                                        <?php endif; ?>
                                    </div>
                                    <div class="blog__item-title">
                                        <?= $name?>
                                    </div>
                                    <?php if (!empty($excerpt)):?>
                                    <div class="blog__item-text">
                                        <?= $excerpt ?>
                                    </div>
                                    <?php endif;?>
                                </a>
                            </div>
                            <?php
                        endwhile;
                    endif;
                    wp_reset_postdata();
                    ?>
                </div>
            </div>
        </div>
    </div>
</div>
