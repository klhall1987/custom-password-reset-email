<?php if ( ! defined( 'ABSPATH' ) ) exit;

class register_admin_menu
{
    public function __construct()
    {
        add_action( 'admin_menu', array( $this, 'cpr_admin_menu' ) );
    }

    public function cpr_admin_menu()
    {
        add_menu_page(
            'custom password reset email',
            'Password Reset Email',
            'manage_options',
            'custom-password-reset-email',
            array( $this, 'cpr_admin_callback' ),
            'dashicons-email-alt',
            30
        );
    }

    public function cpr_admin_callback()
    {
        include( Custom_Password_Reset_Email::$dir . 'includes/templates/cpr-admin-template.html.php' );

    }

}

$register_admin_menu = new register_admin_menu();

