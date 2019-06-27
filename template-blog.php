<?php
/**
 * Template Name: Blog Template
 */
get_header();

$ln = Lang::current();

$title = carbon_get_theme_option("archive_title_".$ln);
$desc = carbon_get_theme_option("archive_desc_".$ln);

$query_args = ['post_type' => 'post'];
$query = new WP_Query($query_args);
?>
<?php get_template_part('/core/views/headerView'); ?>
<main class="main  main-container">

    <?php get_template_part('/core/views/asideView'); ?>
    <div style="background-color:#1a2;">
        <h1><?= $title; ?></h1>
        <p><?= $desc; ?></p>
    </div>
    <div class="home-wrapper">
        <?php
        if ($query->have_posts()):
            while ($query->have_posts()):
                $query->the_post();
                ?>
                <div style="display: inline-block" >
                    <?php get_the_post_thumbnail(get_the_ID(), "thumbnail")?>
                    <a href="<?=get_permalink(get_the_ID())?>">
                        <h2><?=get_the_title()?></h2>
                    </a>
                    <?php if (has_excerpt(get_the_ID())):?>
                    <p><?= the_excerpt() ?></p>
                    <?php endif;?>
                </div>
            <?php
            endwhile;
        endif;
        wp_reset_postdata();
        ?>
    </div>
</main>

<?php
get_footer();
?>
