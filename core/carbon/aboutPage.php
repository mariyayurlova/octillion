<?php
	if (!defined( 'ABSPATH' )) exit();
	
	use Carbon_Fields\Container;
	use Carbon_Fields\Field;
	
	add_action( 'carbon_fields_register_fields', 'crb_home_page_settings' );
	function crb_home_page_settings(){
        $lang = Lang::LANGUAGES;
        Container::make( 'post_meta', "Контент" )
            ->where( 'post_type', '=', 'page' )
            ->where( 'post_template', '=', 'template-about.php' )
            ->add_fields(
                [
                    Field::make( 'separator', 'crb_separator_left_column', 'Левая колонка'),
                    Field::make( 'textarea', 'left_column_title_'.$lang[0], 'Левая колонка(заголовок) '.strtoupper($lang[0])),
                    Field::make( 'textarea', 'left_column_title_'.$lang[1], 'Левая колонка(заголовок) '.strtoupper($lang[1])),
                    Field::make( 'textarea', 'left_column_title_'.$lang[2], 'Левая колонка(заголовок) '.strtoupper($lang[2])),
                    Field::make( 'textarea', 'left_column_content_'.$lang[0], 'Левая колонка(контетн) '.strtoupper($lang[0])),
                    Field::make( 'textarea', 'left_column_content_'.$lang[1], 'Левая колонка(контетн) '.strtoupper($lang[1])),
                    Field::make( 'textarea', 'left_column_content_'.$lang[2], 'Левая колонка(контетн) '.strtoupper($lang[2])),

                    Field::make( 'separator', 'crb_separator_middle_column', 'Средняя колонка'),
                    Field::make( 'textarea', 'middle_column_title_'.$lang[0], 'Средняя колонка(заголовок) '.strtoupper($lang[0])),
                    Field::make( 'textarea', 'middle_column_title_'.$lang[1], 'Средняя колонка(заголовок) '.strtoupper($lang[1])),
                    Field::make( 'textarea', 'middle_column_title_'.$lang[2], 'Средняя колонка(заголовок) '.strtoupper($lang[2])),
                    Field::make( 'textarea', 'middle_column_content_'.$lang[0], 'Средняя колонка(контетн) '.strtoupper($lang[0])),
                    Field::make( 'textarea', 'middle_column_content_'.$lang[1], 'Средняя колонка(контетн) '.strtoupper($lang[1])),
                    Field::make( 'textarea', 'middle_column_content_'.$lang[2], 'Средняя колонка(контетн) '.strtoupper($lang[2])),

//                    Field::make( 'separator', 'crb_separator_right_column', 'Правая колонка'),
//                    Field::make( 'textarea', 'right_column_title_'.$lang[0], 'Правая колонка(заголовок) '.strtoupper($lang[0])),
//                    Field::make( 'textarea', 'right_column_title_'.$lang[1], 'Правая колонка(заголовок) '.strtoupper($lang[1])),
//                    Field::make( 'textarea', 'right_column_title_'.$lang[2], 'Правая колонка(заголовок) '.strtoupper($lang[2])),
//                    Field::make( 'textarea', 'right_column_content_'.$lang[0], 'Правая колонка(контетн) '.strtoupper($lang[0])),
//                    Field::make( 'textarea', 'right_column_content_'.$lang[1], 'Правая колонка(контетн) '.strtoupper($lang[1])),
//                    Field::make( 'textarea', 'right_column_content_'.$lang[2], 'Правая колонка(контетн) '.strtoupper($lang[2])),


                ] );

	}
	
	add_action( 'after_setup_theme', 'crb_home_page_settings_load' );
	function crb_home_page_settings_load(){
		\Carbon_Fields\Carbon_Fields::boot();
	}