<?php
/**
 * Created by PhpStorm.
 * User: alexandrzanko
 * Date: 10/16/18
 * Time: 4:30 PM
 */

if (!defined('ABSPATH')) {
    exit();
}

add_action('template_redirect', function () {

    add_action('wp_enqueue_scripts', function () {
        wp_enqueue_script('commons', Assets::getJs('common'), false, null, true);

        wp_localize_script('commons_ajax', 'tikets_ajax', array('url' => admin_url('admin-ajax.php')));

        if (is_page_template('template-home.php')) {
            wp_enqueue_script('home', Assets::getJs('home'), false, null, true);
            wp_enqueue_script('service', Assets::getJs('service'), false, null, true);


        }
        if (is_page_template('template-contacts.php')) {
            wp_enqueue_script('contact', Assets::getJs('contact'), false, null, true);
        }
        if (is_page_template('template-clients.php')) {
            wp_enqueue_script('clients', Assets::getJs('clients'), false, null, true);
        }
        if (is_singular("member")){
            wp_enqueue_script('teamSingle', Assets::getJs('teamSingle'), false, null, true);
        }
        if (is_singular("service") || is_singular("post")){
            wp_enqueue_script('serviceSingle', Assets::getJs('serviceSingle'), false, null, true);
        }
        if (is_tax( 'service_group' )){
            wp_enqueue_script('service', Assets::getJs('service'), false, null, true);
        }
        if (is_404()){
            wp_enqueue_script('error', Assets::getJs('error'), false, null, true);
        }
    });
});