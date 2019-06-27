<?php
	if (!defined( 'ABSPATH' )) exit();
	use Carbon_Fields\Container;
	use Carbon_Fields\Field;

	add_action( 'carbon_fields_register_fields', 'crb_attach_member_meta' );
	function crb_attach_member_meta(){
		Container::make( 'post_meta', 'Ссылка на сайт партнера')
			->where( 'post_type', '=', 'member' )
			->add_fields( [
				Field::make( 'text', 'crb_member_name', 'Имя' )
			] );
	}
	add_action('after_setup_theme', 'crb_load_member_meta');
	function crb_load_member_meta(){
		\Carbon_Fields\Carbon_Fields::boot();
	}