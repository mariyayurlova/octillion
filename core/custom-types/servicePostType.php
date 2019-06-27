<?php
	if (!defined( 'ABSPATH' )) exit();

	add_action('init', 'services_init');
	function services_init(){
		register_post_type('service', array(
			'labels'             => array(
				'name'               => 'Услуги', // Основное название типа записи
				'singular_name'      => 'Услуга', // отдельное название записи типа Book
				'add_new'            => 'Добавить услугу',
				'add_new_item'       => 'Добавить новую услугу',
				'edit_item'          => 'Редактировать услугу',
				'new_item'           => 'Новая услугу',
				'view_item'          => 'Посмотреть услугу',
				'search_items'       => 'Найти услугу',
				'not_found'          =>  'Услуга не найдено',
				'not_found_in_trash' => 'В корзине услуги не найдено',
				'parent_item_colon'  => '',
				'menu_name'          => 'Услуги'

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