<?php
get_header();

?>
  	<article class="post">
		<div class="post__entry">
			<div class="cards">
				<?php
                if(have_posts()):
                    while (have_posts()):
                    the_post();
                ?>
                    <a href="<?=get_the_permalink()?>">
                        <?= get_the_post_thumbnail()?>
                    </a>
                <?php endwhile; endif; ?>
            </div>
		</div>
	</article>
<?php
get_footer();