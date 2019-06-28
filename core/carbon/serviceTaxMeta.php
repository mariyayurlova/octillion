<?php
if ( ! defined( 'ABSPATH' ) ) {
    exit();
}

use Carbon_Fields\Container;
use Carbon_Fields\Field;

add_action( 'carbon_fields_register_fields', 'crb_attach_portfolio_term_meta' );
function crb_attach_portfolio_term_meta() {

    Container::make( 'term_meta', "Дополнительная информация" )
        ->where( 'term_taxonomy', '=', 'portfolio_type' )
        ->add_fields( [
                Field::make( 'textarea', 'group_desc', 'Описание группы' )
                ->set_rows(10),
//                Field::make( 'select', 'label_color', 'Цвет лайбла' )
//                    ->set_options( array(
//                        "portfolio__button-tag_color-grey" => "Серый",
//                        "portfolio__button-tag_color-red" => "Красный",
//                    ) )
            ]
        );
}

add_action( 'after_setup_theme', 'crb_portfolio_term_meta' );
function crb_portfolio_term_meta() {
    \Carbon_Fields\Carbon_Fields::boot();
}