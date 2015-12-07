<?php if ( ! defined( 'ABSPATH' ) ) exit;

class register_admin_menu
{
    /**
     * register_admin_menu constructor.
     */
    public function __construct()
    {
        add_action( 'admin_menu', array( $this, 'cpr_admin_menu' ) );
    }

    public function cpr_admin_menu()
    {
        add_options_page(
            'Password Reset Email',
            'Password Reset Email',
            'manage_options',
            'custom-password-reset-email',
            array( $this, 'cpr_admin_callback' )
        );
    }

    public function cpr_admin_callback()
    {
        $cpr_site_url = get_site_url();

        include( Custom_Password_Reset_Email::$dir . 'includes/cpr-admin-template.html.php' );
    }
}

( new register_admin_menu );

