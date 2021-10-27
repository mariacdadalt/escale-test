<?php


namespace eScale\Test;


final class Plugin
{
    /**
     * @var self
     */
    private static Plugin $instance;

    /**
     * Function that calls all needed objects.
     */
    public function init() {

        add_action( 'add_meta_boxes', [ 'eScale\\Test\\Post\\PostMetaBox', 'register' ] );
        add_action( 'save_post', [ 'eScale\\Test\\Post\\PostMetaBox', 'save_data' ] );

    }

    /**
     * Gets the instance of this plugin.
     *
     * @return Plugin
     */
    public static function instance() : Plugin {

        if ( ! isset( self::$instance ) ) {
            self::$instance = new self();
        }

        return self::$instance;
    }

}