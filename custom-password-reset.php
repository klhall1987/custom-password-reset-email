<?php if ( ! defined( 'ABSPATH' ) ) exit;

/*
Plugin Name: Custom Password Reset Email
Description: Customize the text in the default WordPress password reset email.
Version: 0.0.1
Author: Kenny Hall
Author URI: http://kennyinthewild.com
Text Domain: custom-password-reset
*/

class Custom_Password_Reset_Email
{
    public static $url;

    public static $dir;

    public function __construct()
    {
        require_once( 'includes/admin/admin-menu.php' );


        self::$dir = plugin_dir_path( __FILE__ );

        self::$url = plugin_dir_url( __FILE__ );

    }
}

$cpr_return = new Custom_Password_Reset_Email();

return $cpr_return;

