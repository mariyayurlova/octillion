<?php
	/**
	 * Created by PhpStorm.
	 * User: alexandrzanko
	 * Date: 12/4/18
	 * Time: 5:00 PM
	 */

	if (!defined( 'ABSPATH' )) exit();

	define( 'THEME_NAME', get_template() );
	define( 'BASE_URL', '/wp-content/themes/' . THEME_NAME );

//date_default_timezone_set("Europe/Minsk");



    require_once __DIR__ . '/utils/Lang.php';
	require_once __DIR__ . '/utils/Assets.php';

	require_once __DIR__ . '/core/init_theme.php';
    require_once __DIR__ . '/core/custom-types/index.php';

	require_once __DIR__ . '/core/menu.php';
	require_once __DIR__ . '/core/styles.php';
	require_once __DIR__ . '/core/scripts.php';
	require_once __DIR__ . '/core/hooks.php';
	require_once __DIR__ . '/core/ajax.php';

//carbon fields
	require_once __DIR__ . '/core/carbon/index.php';
	require_once __DIR__ . '/vendor/autoload.php';

