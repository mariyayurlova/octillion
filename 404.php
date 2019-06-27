<?php
	if (!defined( 'ABSPATH' )) {
		exit();
	}
	get_header();

?>

<?php get_template_part( '/core/views/headerView' ); ?>
	<h1>404</h1>
<?php
	get_template_part( '/core/views/footerView' );
	get_footer();