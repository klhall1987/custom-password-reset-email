<?php if ( ! defined( 'ABSPATH' ) ) exit;

/*
Plugin Name: Custom Password Reset Email
Description: Customize the text in the default WordPress password reset email.
Version: 0.0.5
Author: Kenny Hall
Author URI: http://kennyinthewild.com
Text Domain: custom-password-reset
*/

/**
 * Class Custom_Password_Reset_Email
 *
 * This is a the base class for Custom Password Reset.
 */
class Custom_Password_Reset_Email
{
    /**
     * @var string
     */
    public static $url = '';

    /**
     * @var string
     */
    public static $dir = '';

    /**
     * Custom_Password_Reset_Email constructor.
     *
     * This constructor sets static directory and url variables.
     */
    public function __construct()
    {
        require_once( 'includes/cpr-admin-menu.php' );
        require_once( 'includes/cpr-settings.php' );

        self::$dir = plugin_dir_path( __FILE__ );

        self::$url = plugin_dir_url( __FILE__ );
    }
}

( new Custom_Password_Reset_Email );

