<?php
/**
 * Plugin Name: React WP Shortcode
 * Description: A simple plugin to render a React app via a shortcode.
 * Author: Tony Farha
 * Author URI: https://github.com/tonyfarha
 */

function dbt_react_wp_shortcode_app_enqueue_scripts() {
    wp_enqueue_script('dbt-react-wp-shortcode-app', plugins_url('/build/index.js', __FILE__), array('wp-element'), time(), true);
    wp_enqueue_style('dbt-react-wp-shortcode-app-style', plugins_url('/build/style-index.css', __FILE__), array(), time());
}

add_action('wp_enqueue_scripts', 'dbt_react_wp_shortcode_app_enqueue_scripts');

function dbt_render_react_wp_shortcode_app() {
    return '<div id="dbt-react-wp-shortcode-app"></div>';
}

add_shortcode('react_wp_shortcode_app', 'dbt_render_react_wp_shortcode_app');
