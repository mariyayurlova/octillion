<?php
	if (!defined( 'ABSPATH' )) exit();
	
	use Carbon_Fields\Container;
	use Carbon_Fields\Field;
	
	add_action( 'carbon_fields_register_fields', 'crb_home_page_settings' );
	function crb_home_page_settings(){
        $lang = Lang::LANGUAGES;
        Container::make( 'post_meta', "Контент" )
            ->where( 'post_type', '=', 'page' )
            ->where( 'post_template', '=', 'template-home.php' )
            ->add_fields(
                [
                    Field::make( 'complex', 'slider', 'Слайдер' )
                        ->add_fields( 'image', [
                            Field::make( 'file', 'slide_background', 'Изображение' )
                                ->set_type( "image" )
                                ->set_value_type( 'url' ),
                            Field::make( 'separator', 'crb_separator_home_slide_'.$lang[0], 'Контент слайда '.strtoupper($lang[0])),
                            Field::make( 'text', 'slide_title_'.$lang[0], 'Заголовок слайда '.strtoupper($lang[0])),
                            Field::make( 'text', 'slide_subtitle_'.$lang[0], 'Подзаголовок слайда '.strtoupper($lang[0])),
//                            Field::make( 'text', 'slide_desc_title_'.$lang[0], 'Заголовок описания '.strtoupper($lang[0])),
                            Field::make( 'textarea', 'slide_desc_'.$lang[0], 'Слайд описание '.strtoupper($lang[0]))
                                ->set_rows( 3 ),
                            Field::make( 'separator', 'crb_separator_home_slide_'.$lang[1], 'Контент слайда '.strtoupper($lang[1])),
                            Field::make( 'text', 'slide_title_'.$lang[1], 'Заголовок слайда '.strtoupper($lang[1])),
                            Field::make( 'text', 'slide_subtitle_'.$lang[1], 'Подзаголовок слайда '.strtoupper($lang[1])),
//                            Field::make( 'text', 'slide_desc_title_'.$lang[1], 'Заголовок описания '.strtoupper($lang[1])),
                            Field::make( 'textarea', 'slide_desc_'.$lang[1], 'Слайд описание '.strtoupper($lang[1]))
                                ->set_rows( 3 ),
//                            Field::make( 'separator', 'crb_separator_home_slide_'.$lang[2], 'Контент слайда '.strtoupper($lang[2])),
//                            Field::make( 'text', 'slide_title_'.$lang[2], 'Заголовок слайда '.strtoupper($lang[2])),
//                            Field::make( 'text', 'slide_subtitle_'.$lang[2], 'Подзаголовок слайда '.strtoupper($lang[2])),
//                            Field::make( 'text', 'slide_desc_title_'.$lang[2], 'Заголовок описания '.strtoupper($lang[2])),
//                            Field::make( 'textarea', 'slide_desc_'.$lang[2], 'Слайд описание '.strtoupper($lang[2]))
//                                ->set_rows( 3 ),
                            ]
                        )
                        ->add_fields( 'video', [
                                Field::make( 'file', 'slide_background', 'Видео' )
                                    ->set_type( "video" )
                                    ->set_value_type( 'url' )
                                    ->set_width( 50 ),
                                Field::make( 'separator', 'crb_separator_home_slide_'.$lang[0], 'Контент слайда '.strtoupper($lang[0])),
                                Field::make( 'text', 'slide_title_'.$lang[0], 'Заголовок слайда '.strtoupper($lang[0])),
                                Field::make( 'text', 'slide_subtitle_'.$lang[0], 'Подзаголовок слайда '.strtoupper($lang[0])),
//                            Field::make( 'text', 'slide_desc_title_'.$lang[0], 'Заголовок описания '.strtoupper($lang[0])),
                                Field::make( 'textarea', 'slide_desc_'.$lang[0], 'Слайд описание '.strtoupper($lang[0]))
                                    ->set_rows( 3 ),
                                Field::make( 'separator', 'crb_separator_home_slide_'.$lang[1], 'Контент слайда '.strtoupper($lang[1])),
                                Field::make( 'text', 'slide_title_'.$lang[1], 'Заголовок слайда '.strtoupper($lang[1])),
                                Field::make( 'text', 'slide_subtitle_'.$lang[1], 'Подзаголовок слайда '.strtoupper($lang[1])),
//                            Field::make( 'text', 'slide_desc_title_'.$lang[1], 'Заголовок описания '.strtoupper($lang[1])),
                                Field::make( 'textarea', 'slide_desc_'.$lang[1], 'Слайд описание '.strtoupper($lang[1]))
                                    ->set_rows( 3 ),
//                            Field::make( 'separator', 'crb_separator_home_slide_'.$lang[2], 'Контент слайда '.strtoupper($lang[2])),
//                            Field::make( 'text', 'slide_title_'.$lang[2], 'Заголовок слайда '.strtoupper($lang[2])),
//                            Field::make( 'text', 'slide_subtitle_'.$lang[2], 'Подзаголовок слайда '.strtoupper($lang[2])),
//                            Field::make( 'text', 'slide_desc_title_'.$lang[2], 'Заголовок описания '.strtoupper($lang[2])),
//                            Field::make( 'textarea', 'slide_desc_'.$lang[2], 'Слайд описание '.strtoupper($lang[2]))
//                                ->set_rows( 3 ),
                            ]
                        )
                        ->set_layout( "tabbed-horizontal" ) ,
                ] );

	}
	
	add_action( 'after_setup_theme', 'crb_home_page_settings_load' );
	function crb_home_page_settings_load(){
		\Carbon_Fields\Carbon_Fields::boot();
	}