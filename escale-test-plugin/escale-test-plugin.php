<?php
/**
 * Plugin Name: eScale - Test Plugin
 * Description: eScale's Test Project for Maria C. Dadalt Job Application
 * Version: 1.0
 */

include_once 'vendor/autoload.php';

/**
 * Shorthand to get the instance of our main core plugin class
 *
 * @return eScale\Test\Plugin
 */
function es_test() {
    return \eScale\Test\Plugin::instance();
}

/**
 * Init the plugin after all plugins are loaded.
 */
add_action(
    'plugins_loaded',
    function () {
        es_test()->init();
    },
    99,
    0
);