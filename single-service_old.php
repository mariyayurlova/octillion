<?php
	get_header();
	

?>
	<div class="app">
		<?php get_template_part( '/core/views/headerView' ); ?>
		<main class="main main-container">
            <?php get_template_part('/core/views/asideView'); ?>
			<div class="container">
				<h1 class="title title_grey title_default mt-20 mt-sm-40"><?= get_the_title(); ?></h1>

                <div class="breadcrumbs">
                    <a href="/" class="breadcrumb">home</a>
                    <a href="<?= get_post_type_archive_link("service") ?>" class="breadcrumb">services</a>
                    <a class="breadcrumb"></a>
                    <span class="breadcrumb"><?= get_the_title(); ?></span>
                </div>

				<div class="row mt-20 mb-30 mt-sm-40 mb-sm-40 pb-sm-40">
					<div class="col-12 col-offset-lg-2 col-lg-8">

						<div class="editor-content">
							<?php if (have_posts()):
								while(have_posts()):
									the_post();
									the_content();
								endwhile;
							endif;?>
						</div>
					</div>
				</div>
			</div>
		</main>
		<?php get_template_part( '/core/views/footerView' ); ?>
	</div>
<?php
	get_footer();