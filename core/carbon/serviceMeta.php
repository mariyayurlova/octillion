<?php
	if (!defined( 'ABSPATH' )) exit();
	use Carbon_Fields\Container;
	use Carbon_Fields\Field;

	add_action( 'carbon_fields_register_fields', 'crb_attach_service_meta' );
	function crb_attach_service_meta(){
        $lang = Lang::LANGUAGES;
		Container::make( 'post_meta', 'Ссылка на сайт партнера')
			->where( 'post_type', '=', 'service' )
			->add_fields( [
                Field::make( 'text', 'crb_service_name_'.$lang[0], 'Название '.strtoupper($lang[0]) ),
                Field::make( 'rich_text', 'crb_service_content_'.$lang[0], 'Полное описание '.strtoupper($lang[0]) ),
                Field::make( 'text', 'crb_service_name_'.$lang[1], 'Название '.strtoupper($lang[1]) ),
                Field::make( 'rich_text', 'crb_service_content_'.$lang[1], 'Полное описание '.strtoupper($lang[1]) ),
			] );
	}
	add_action('after_setup_theme', 'crb_load_service_meta');
	function crb_load_service_meta(){
		\Carbon_Fields\Carbon_Fields::boot();
	}