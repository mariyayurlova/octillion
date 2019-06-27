<?php
/**
 * Template Name: Home Template
 */
get_header();
$ln = Lang::current();

$left_title = carbon_get_post_meta(get_the_ID(), "left_column_title_".$ln);
$left_content = carbon_get_post_meta(get_the_ID(), "left_column_content_".$ln);
$middle_title = carbon_get_post_meta(get_the_ID(), "middle_column_title_".$ln);
$middle_content = carbon_get_post_meta(get_the_ID(), "middle_column_content_".$ln);
$right_title = carbon_get_post_meta(get_the_ID(), "right_column_title_".$ln);
$right_content = carbon_get_post_meta(get_the_ID(), "right_column_content_".$ln);

//var_dump($slider);
?>
<main class="main">
    <?php get_template_part('/core/views/lang_view'); ?>
    <div class="home-wrapper">
        <div>
            <p><?= $left_title?></p>
            <p><?= $left_content?></p>
        </div>
        <div>
            <p><?= $middle_title?></p>
            <p><?= $middle_content?></p>
        </div>
        <div>
            <p><?= $right_title?></p>
            <p><?= $right_content?></p>
        </div>
    </div>
</main>

<?php
get_footer();
?>
