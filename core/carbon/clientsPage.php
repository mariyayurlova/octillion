<?php
	if (!defined( 'ABSPATH' )) exit();
	
	use Carbon_Fields\Container;
	use Carbon_Fields\Field;
	
	add_action( 'carbon_fields_register_fields', 'crb_clients_page_settings' );
	function crb_clients_page_settings(){
        $lang = Lang::LANGUAGES;
        Container::make( 'post_meta', "Контент" )
            ->where( 'post_type', '=', 'page' )
            ->where( 'post_template', '=', 'template-clients.php' )
            ->add_fields(
                [
                    Field::make( 'complex', 'crb_clients', 'Клиенты' )
                        ->add_fields( 'phone', [
                                Field::make( 'text', 'client_link', "Ссылка" )
                                    ->set_width( 70 ),
                                Field::make( 'file', 'client_logo', 'Логотип' )
                                    ->set_type( "image" )
                                    ->set_value_type( 'url' )
                                    ->set_width( 30 ),
                            ]
                        )->set_collapsed( true ),

                ] );

	}
	
	add_action( 'after_setup_theme', 'crb_clients_page_settings_load' );
	function crb_clients_page_settings_load(){
		\Carbon_Fields\Carbon_Fields::boot();
	}