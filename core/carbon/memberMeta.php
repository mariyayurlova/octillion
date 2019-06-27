<?php
	if (!defined( 'ABSPATH' )) exit();
	use Carbon_Fields\Container;
	use Carbon_Fields\Field;

	add_action( 'carbon_fields_register_fields', 'crb_attach_member_meta' );
	function crb_attach_member_meta(){
        $lang = Lang::LANGUAGES;
		Container::make( 'post_meta', 'Ссылка на сайт партнера')
			->where( 'post_type', '=', 'member' )
			->add_fields( [
                Field::make('image', 'crb_member_photo', 'Фото')
                    ->set_value_type( 'url' )
                    ->set_width( 50 ),
                Field::make( 'separator', 'separator_post_arh_title_'.$lang[0], strtoupper($lang[0])),
                Field::make( 'text', 'crb_member_name_ru', 'Имя' ),
                Field::make( 'text', 'crb_member_position_ru', 'Должнасть' ),
                Field::make( 'textarea', 'crb_member_short_desc_ru', 'Краткое описание' )
                    ->set_rows( 3 ),
                Field::make( 'rich_text', 'crb_member_desc_ru', 'Полное описание' ),
                Field::make( 'separator', 'separator_post_arh_title_'.$lang[1], strtoupper($lang[1])),
                Field::make( 'text', 'crb_member_name_en', 'Имя' ),
                Field::make( 'text', 'crb_member_position_en', 'Должнасть' ),
                Field::make( 'textarea', 'crb_member_short_desc_en', 'Краткое описание' )
                    ->set_rows( 3 ),
                Field::make( 'rich_text', 'crb_member_desc_en', 'Полное описание' ),
//                Field::make( 'text', 'crb_member_name', 'Имя' ),
//                Field::make( 'text', 'crb_member_position', 'Должнасть' ),
			] );
	}
	add_action('after_setup_theme', 'crb_load_member_meta');
	function crb_load_member_meta(){
		\Carbon_Fields\Carbon_Fields::boot();
	}