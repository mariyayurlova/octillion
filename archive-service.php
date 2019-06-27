<?php
get_header();

?>


<?php get_template_part('/core/views/headerView'); ?>
    <main class="main main-container">
        <?php get_template_part('/core/views/asideView'); ?>
        <article class="post">
            <div class="post__entry">
                <div class="cards">
                    <?php
                    if(have_posts()):
                        while (have_posts()):
                            the_post();
                            ?>
                            <a href="<?=get_the_permalink()?>">
                                <?= get_the_title()?>
                            </a>
                        <?php endwhile; endif; ?>
                </div>
            </div>
        </article>
    </main>
<?php
get_footer();