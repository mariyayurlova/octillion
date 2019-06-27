<?php
    if (!defined('ABSPATH')) exit();

    use Carbon_Fields\Container;
    use Carbon_Fields\Field;

    add_action('carbon_fields_register_fields', 'crb_attach_theme_options');
    function crb_attach_theme_options() {
        $lang = Lang::LANGUAGES;
        $phones_labels = array(
            'plural_name' => 'Номера телефонов',
            'singular_name' => 'Номер',
        );

        Container::make('theme_options', __('Настройки темы'))
            ->set_page_file('theme-options')
            ->set_page_menu_title('Настройки темы')
            ->set_icon('dashicons-carrot')
            ->add_tab(__('Основные настройки'), [
                Field::make('image', 'crb_logoo', 'Логотип')
                    ->set_value_type( 'url' )
                    ->set_width( 50 ),
                Field::make('image', 'crb_logo_desc', 'Img')
                    ->set_value_type( 'url' )
                    ->set_width( 50 ),
                Field::make('text', 'crb_email', 'Email'),
                Field::make('text', 'crb_address', 'Адрес'),
                Field::make('text', 'crb_work_time', 'Режим работы'),
                Field::make( 'complex', 'crb_phones' )
                    ->setup_labels( $phones_labels )
                    ->add_fields( [ Field::make( 'text', 'phone' ), ])
                    ->set_layout( "tabbed-horizontal" ),
                Field::make('separator', 'crb_soc_links_op_sep', __('Социальные сети')),
                Field::make('text', 'crb_vk_link', 'Вконтакте'),
                Field::make('text', 'crb_insta_link', 'Instagram'),
                Field::make('text', 'crb_fb_link', 'FaceBook'),
                Field::make('text', 'crb_linked_in_link', 'LinkedIn'),
                Field::make('text', 'crb_telegram_link', 'Telegram(уникальное имя)'),
                Field::make('text', 'crb_viber_link', 'viber(номер)'),
                Field::make('text', 'crb_whatsup_link', 'whatsup(номер)'),
            ]) ;

        // Add second options page under 'Basic Options'
        Container::make('theme_options', 'Архив')
            ->set_page_parent("edit.php")// reference to a top level container
            ->add_fields([
                Field::make( 'separator', 'separator_post_arh_title_'.$lang[0], 'Контент слайда '.strtoupper($lang[0])),
                Field::make( 'text', 'archive_title_'.$lang[0], 'Заголовок архива '.strtoupper($lang[0])),
                Field::make( 'textarea', 'archive_desc_'.$lang[0], 'Описание архива '.strtoupper($lang[0])),

                Field::make( 'separator', 'separator_post_arh_title_'.$lang[1], 'Контент слайда '.strtoupper($lang[1])),
                Field::make( 'text', 'archive_title_'.$lang[1], 'Заголовок архива '.strtoupper($lang[1])),
                Field::make( 'textarea', 'archive_desc_'.$lang[1], 'Описание архива '.strtoupper($lang[1])),

//                Field::make( 'separator', 'separator_post_arh_title_'.$lang[2], 'Контент слайда '.strtoupper($lang[2])),
//                Field::make( 'text', 'archive_title_'.$lang[2], 'Заголовок архива '.strtoupper($lang[2])),
//                Field::make( 'textarea', 'archive_desc_'.$lang[2], 'Описание архива '.strtoupper($lang[2]))
            ]);
    }

    add_action('after_setup_theme', 'crb_load');
    function crb_load() {
        \Carbon_Fields\Carbon_Fields::boot();
    }