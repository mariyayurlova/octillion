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
        wp_enqueue_style( 'commons', Assets::getCss( 'common' ), false, null );
        if ( is_page_template( 'template-home.php' ) ) {
            wp_enqueue_style( 'home', Assets::getCss( 'home' ), false, null );
        }
        if (is_page_template('template-contacts.php')) {
            wp_enqueue_style( 'contact', Assets::getCss( 'contact' ), false, null );
        }
        if (is_page_template('template-clients.php')) {
            wp_enqueue_style( 'clients', Assets::getCss( 'clients' ), false, null );
        }
        if (is_singular("member")){
            wp_enqueue_style( 'teamSingle', Assets::getCss( 'teamSingle' ), false, null );
        }
        if (is_singular("service") || is_singular("post")){
            wp_enqueue_style( 'serviceSingle', Assets::getCss( 'serviceSingle' ), false, null );
        }
        if (is_tax( 'service_group' )){
            wp_enqueue_style( 'service', Assets::getCss( 'service' ), false, null );
        }
        wp_enqueue_style('style', BASE_URL . '/style.css', false, null);

    });
});
