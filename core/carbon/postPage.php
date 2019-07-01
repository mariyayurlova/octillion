<?php
    if (!defined( 'ABSPATH' )) exit();
	use Carbon_Fields\Container;
	use Carbon_Fields\Field;
	
	add_action( 'carbon_fields_register_fields', 'crb_attach_post_meta' );
	function crb_attach_post_meta(){
        $lang = Lang::LANGUAGES;
		Container::make( 'post_meta', $lang[0])
			->where( 'post_type', '=', 'post' )
			->add_fields( [
                Field::make( 'text', 'crb_page_name_'.$lang[0], 'Заголовок '.strtoupper($lang[0]) )->set_required( true ),
                Field::make( 'textarea', 'crb_page_excerpt_'.$lang[0], 'Отрывок '.strtoupper($lang[1]) ),
                Field::make( 'rich_text', 'crb_page_content_'.$lang[0], 'Содержание '.strtoupper($lang[0]) ),
			] );
        Container::make( 'post_meta', $lang[1])
            ->where( 'post_type', '=', 'post' )
            ->add_fields( [
                Field::make( 'text', 'crb_page_name_'.$lang[1], 'Заголовок '.strtoupper($lang[1]) )->set_required( true ),
                Field::make( 'textarea', 'crb_page_excerpt_'.$lang[1], 'Отрывок '.strtoupper($lang[1]) ),
                Field::make( 'rich_text', 'crb_page_content_'.$lang[1], 'Содержание '.strtoupper($lang[1]) ),
            ] );
	}
	add_action('after_setup_theme', 'crb_load_post_meta');
	function crb_load_post_meta(){
		\Carbon_Fields\Carbon_Fields::boot();
	}