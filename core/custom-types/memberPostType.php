<?php
	if (!defined( 'ABSPATH' )) exit();

	add_action('init', 'programs_init');
	function programs_init(){
		register_post_type('member', array(
			'labels'             => array(
				'name'               => 'Команда', // Основное название типа записи
				'singular_name'      => 'Мембер', // отдельное название записи типа Book
				'add_new'            => 'Добавить мембера',
				'add_new_item'       => 'Добавить нового мембера',
				'edit_item'          => 'Редактировать мембера',
				'new_item'           => 'Новый мембер',
				'view_item'          => 'Посмотреть мембера',
				'search_items'       => 'Найти мембера',
				'not_found'          =>  'Мембер не найден',
				'not_found_in_trash' => 'В корзине мемберов не найдено',
				'parent_item_colon'  => '',
				'menu_name'          => 'Команда'

			),
			'public'             => true,
			'publicly_queryable' => true,
			'show_ui'            => true,
			'show_in_menu'       => true,
			'query_var'          => true,
			'rewrite'            => true,
			'capability_type'    => 'post',
			'has_archive'        => true,
			'hierarchical'       => false,
			'menu_position'      => null,
			'supports'           => array('title', 'editor', 'thumbnail'),
			'show_in_rest'       => true,
		) );
	}