<?php if ( ! defined( 'ABSPATH' ) ) exit;

/*
Plugin Name: Custom Password Reset Email
Description: Customize the text in the default WordPress password reset email.
Version: 0.0.5
Author: Kenny Hall
Author URI: http://kennyinthewild.com
Text Domain: custom-password-reset
*/

class Custom_Password_Reset_Email
{
    public static $url;

    public static $dir;

    /**
     * Custom_Password_Reset_Email constructor.
     */
    public function __construct()
    {
        require_once('includes/cpr-admin-menu.php');
        require_once('includes/cpr-settings.php');

        self::$dir = plugin_dir_path( __FILE__ );

        self::$url = plugin_dir_url( __FILE__ );
    }
}

( new Custom_Password_Reset_Email );

