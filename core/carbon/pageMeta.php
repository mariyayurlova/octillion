<?php
    if (!defined( 'ABSPATH' )) exit();
	use Carbon_Fields\Container;
	use Carbon_Fields\Field;
	
	add_action( 'carbon_fields_register_fields', 'crb_attach_page_meta' );
	function crb_attach_page_meta(){
        $lang = Lang::LANGUAGES;
		Container::make( 'post_meta', $lang[0])
			->where( 'post_type', '=', 'page' )
			->add_fields( [
                Field::make( 'text', 'crb_page_name_'.$lang[0], 'Заголовок '.strtoupper($lang[0]) )->set_required( true ),
			] );
        Container::make( 'post_meta', $lang[1])
            ->where( 'post_type', '=', 'page' )
            ->add_fields( [
                Field::make( 'text', 'crb_page_name_'.$lang[1], 'Заголовок '.strtoupper($lang[1]) )->set_required( true ),
            ] );
	}
	add_action('after_setup_theme', 'crb_load_page_meta');
	function crb_load_page_meta(){
		\Carbon_Fields\Carbon_Fields::boot();
	}