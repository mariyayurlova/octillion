<?php
	if (!defined( 'ABSPATH' )) exit();
	
	use Carbon_Fields\Container;
	use Carbon_Fields\Field;
	
	add_action( 'carbon_fields_register_fields', 'crb_home_page_settings' );
	function crb_home_page_settings(){
        $lang = Lang::LANGUAGES;
        Container::make( 'post_meta', "Слайдер" )
            ->where( 'post_type', '=', 'page' )
            ->where( 'post_template', '=', 'template-home.php' )
            ->add_fields(
                [
                    Field::make( 'complex', 'slider', 'Слайдер' )
                        ->add_fields( 'image', [
                            Field::make( 'file', 'slide_background', 'Изображение' )
                                ->set_type( "image" )
                                ->set_value_type( 'url' )
                                ->set_width( 30 ),
                            Field::make( 'text', 'slide_link', 'Ссылка слайда')
                                ->set_width( 70 ),
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
                                    ->set_width( 30 ),
                                Field::make( 'text', 'slide_link', 'Ссылка слайда')
                                    ->set_width( 70 ),
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
        Container::make( 'post_meta', "Команда" )
            ->where( 'post_type', '=', 'page' )
            ->where( 'post_template', '=', 'template-home.php' )
            ->add_fields(
                [
                    Field::make( 'complex', 'member_list', 'Список мемберов' )
                        ->add_fields( 'member', [
                                Field::make( 'select', 'member_id', 'Выберите мембера' )
                                    ->add_options( 'members_list' ),
                            ]
                        )->set_layout( "tabbed-horizontal" ) ,
                ]
            );
        Container::make( 'post_meta', "О компании" )
            ->where( 'post_type', '=', 'page' )
            ->where( 'post_template', '=', 'template-home.php' )
            ->add_fields(
                [
                    Field::make( 'textarea', 'cbn_about_desc_'.$lang[0], 'Вступление'.strtoupper($lang[0])),
                    Field::make( 'textarea', 'cbn_about_desc_'.$lang[1], 'Вступление'.strtoupper($lang[1])),

                    Field::make( 'separator', 'separator_about_partners_separ', 'Наши пртнеры '),
                    Field::make( 'select', 'cbn_about_partners_link', 'partners_link' )
                        ->add_options( 'page_list' ),
                    Field::make( 'text', 'cbn_about_partners_title_'.$lang[0], 'partners_title '.strtoupper($lang[0]) ),
                    Field::make( 'textarea', 'cbn_about_partners_content_'.$lang[0], 'partners_content '.strtoupper($lang[0])),

                    Field::make( 'text', 'cbn_about_partners_title_'.$lang[1], 'partners_title '.strtoupper($lang[1]) ),
                    Field::make( 'textarea', 'cbn_about_partners_content_'.$lang[1], 'partners_content '.strtoupper($lang[1])),
//
                    Field::make( 'separator', 'separator_about_clients_separ', 'Наши клиенты '),
                    Field::make( 'select', 'cbn_about_clients_link', 'clients_link' )
                        ->add_options( 'page_list' ),
                    Field::make( 'text', 'cbn_about_clients_title_'.$lang[0], 'clients_title '.strtoupper($lang[0]) ),
                    Field::make( 'textarea', 'cbn_about_clients_content_'.$lang[0], 'clients_content '.strtoupper($lang[0])),

                    Field::make( 'text', 'cbn_about_clients_title_'.$lang[1], 'clients_title '.strtoupper($lang[1]) ),
                    Field::make( 'textarea', 'cbn_about_clients_content_'.$lang[1], 'clients_content '.strtoupper($lang[1])),
                ]
            );
	}
	
	add_action( 'after_setup_theme', 'crb_home_page_settings_load' );
	function crb_home_page_settings_load(){
		\Carbon_Fields\Carbon_Fields::boot();
	}

    function members_list(){
        $my_query   = new WP_Query();
        $query_members = $my_query->query( [
            'post_type' => 'member',
        ] );

        $member_list = [];
        foreach($query_members as $member) {
            $member_list[ $member->ID ] = $member->post_title;
        }
        return $member_list;
    }
    function page_list(){
        $my_query   = new WP_Query();
        $query_members = $my_query->query( [
            'post_type' => 'page',
        ] );

        $member_list = [];
        $member_list[ 0 ] = "---";
        foreach($query_members as $member) {
            $member_list[ $member->ID ] = $member->post_title;
        }
        return $member_list;
    }