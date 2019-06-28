<?php
if ( ! defined( 'ABSPATH' ) ) {
    exit();
}

use Carbon_Fields\Container;
use Carbon_Fields\Field;

add_action( 'carbon_fields_register_fields', 'crb_attach_portfolio_term_meta' );
function crb_attach_portfolio_term_meta() {
    $lang = Lang::LANGUAGES;
    Container::make( 'term_meta', "Дополнительная информация" )
        ->where( 'term_taxonomy', '=', 'service_group' )
        ->add_fields( [
                Field::make( 'text', 'group_name_'.$lang[1], 'Название '.$lang[1] ),
                Field::make( 'textarea', 'group_desc_'.$lang[1], 'Описание '.$lang[1] )
                ->set_rows(5),
//
            ]
        );
}

add_action( 'after_setup_theme', 'crb_portfolio_term_meta' );
function crb_portfolio_term_meta() {
    \Carbon_Fields\Carbon_Fields::boot();
}