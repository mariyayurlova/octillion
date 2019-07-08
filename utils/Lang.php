<?php

	class Lang {

		const COOKIE_KEY = 'lang';
		const LANGUAGES = [ 'ru', 'en',  ];
//        const LANGUAGES = [ 'ru', 'en', 'by' ];
		const LANG_META = [
            'ru' => [ 'flag' => '/wp-content/themes/octillion/src/icons/rus.13db31.png'],
            'en' => [ 'flag' => '/wp-content/themes/octillion/src/icons/eng.c9c529.png'],
            //'by' => [ 'flag' => '/wp-content/themes/octillion/src/icons/eng.13db31.png']
        ];
		const BASE_LANG = 'ru';
		const CONSTANTS = [
			'услуги' => [
				'ru' => 'услуги',
				'en' => 'services'
			],
            'команда' => [
                'ru' => 'команда',
                'en' => 'team'
            ],
            'блог' => [
                'ru' => 'блог',
                'en' => 'blog'
            ],
            'контакты' => [
                'ru' => 'контакты',
                'en' => 'contacts'
            ],
            'главная' => [
                'ru' => 'главная',
                'en' => 'main'
            ],
            'о компании' => [
                'ru' => 'о компании',
                'en' => 'about company'
            ],
            'Подробнее' => [
                'ru' => 'Подробнее',
                'en' => 'More'
            ],
            'Контакты' => [
                'ru' => 'Контакты',
                'en' => 'Contacts'
            ],
            'Страница не найдена' => [
                'ru' => 'Страница не найдена',
                'en' => 'Page don\'t exist'
            ],
            '404 desc' => [
                'ru' => 'Нерпавильно набран номер, или такой страницы на сайте не существует. Начните с главной страницы или воспользуйтесь меню.',
                'en' => 'The number is dialed incorrectly, or there is no such page on the site. Start from the main page or use the menu.'
            ],


        ];

		public static function current() {
			return ( isset( $_COOKIE[ self::COOKIE_KEY ] ) and in_array( $_COOKIE[ self::COOKIE_KEY ], self::LANGUAGES ) ) ?
				$_COOKIE[ self::COOKIE_KEY ] :
				self::LANGUAGES[0];
		}

		public static function get( $name, $echo = false ) {
			$value = self::CONSTANTS[ $name ][ self::current() ];
			if ( $echo ) {
				echo $value;
			} else {
				return $value;
			}
		}

	}