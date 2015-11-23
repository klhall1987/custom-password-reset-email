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

    public function __construct()
    {
        add_filter( 'wp_mail_from', array( $this, 'custom_wp_mail_from' ) );
    }

    private function custom_wp_mail_from( $email )
    {
        return $email;
    }



}