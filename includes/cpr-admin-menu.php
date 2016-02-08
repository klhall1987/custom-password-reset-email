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
            __( 'Custom Password Reset' ),
            __( 'Custom Password Reset' ),
            'manage_options',
            'custom-password-reset-email',
            array( $this, 'cpr_admin_callback' )
        );
    }

    public function cpr_admin_callback()
    {
        $cpr_set_css  = Custom_Password_Reset_Email::$url . 'css/cpr-stylesheet.css';

        $cpr_site_url = get_site_url();

        $passwordResetURL   = $cpr_site_url . '/wp-login.php?action=lostpassword';

        $cprFromNameOption  =  get_option( 'cpr_from_name_option' );

        $cprFromEmailOption = get_option( 'cpr_from_email_option' );

        $cprSubjectOption   = get_option( 'cpr_subject_option' );

        $cprMessageOption   = get_option( 'cpr_message_option' );

        $cprEditorSettings  = array(
            'editor_height' => 250,
            'media_buttons' => false,
            'drag_drop_upload' => true
            );

        include( Custom_Password_Reset_Email::$dir . 'includes/cpr-admin-template.html.php' );
    }
}

( new register_admin_menu );

