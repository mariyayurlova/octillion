<?php
add_action( 'init', 'create_service_taxonomies' );

function create_service_taxonomies() {
    register_taxonomy( 'service_group', [ 'service' ], [
        'hierarchical' => true,
        'labels'       => [
            'name'              =>  'Группы' ,
            'singular_name'     =>  'Группа' ,
            'search_items'      => 'Искать группа',
            'all_items'         =>  'Все группы' ,
            'parent_item'       => 'Родительская группа',
            'parent_item_colon' =>  'Родительская группа:',
            'edit_item'         => 'Редактировать группу',
            'update_item'       => 'Обноаить группу',
            'add_new_item'      => 'Добавить новую группу',
            'new_item_name'     => 'Новая группа',
            'menu_name'         => 'Группы',
        ],
        'show_ui'      => true,
        'query_var'    => true,
        'show_in_rest' => true,
    ] );
}