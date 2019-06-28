<?php
get_header();
$ln = Lang::current();

$home_page = get_option( 'page_on_front' );
$members = carbon_get_post_meta($home_page,"member_list");
get_template_part("/core/views/headerView")
?>
    <main class="main">
        <div class="teamSingle">
            <?php get_template_part("/core/views/single_menu_tap") ?>
            <div class="container type-team">
                <p class="teamSingle__title"><?= Lang::get("команда") ?></p>
                <?php get_template_part("/core/views/prevNextPartner") ?>
                <div class="container">
                    <div class="teamSingle__team-about">
                        <div class="teamSingle__team-about-content">
                            <?php
                            if (have_posts()):
                                while (have_posts()):
                                    the_post();
                                    $name = carbon_get_post_meta(get_the_ID(), "crb_member_name_" . $ln);
                                    $position = carbon_get_post_meta(get_the_ID(), "crb_member_position_" . $ln);
                                    $photo = carbon_get_post_meta(get_the_ID(), "crb_member_photo");
                                    $desc = carbon_get_post_meta(get_the_ID(), "crb_member_desc_".$ln);

                                    ?>
                                    <p class="teamSingle__team-about-content-title"><?= $name?></p>
                                    <p class="teamSingle__team-about-content-subtitle"><?= $position?></p>
                                    <div class="teamSingle__team-about-content-text">
                                        <?php echo apply_filters( 'the_content', $desc); ?>
                                    </div>
                                <?php endwhile; endif; ?>
                        </div>
                        <div class="teamSingle__team-about-image">
                            <img class="teamSingle__team-about-image-content"
                                 src="<?= $photo?>" alt="Logo" title=""/>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </main>
<?php
get_footer();