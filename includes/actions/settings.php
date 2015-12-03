<?php if ( ! defined( 'ABSPATH' ) ) exit;

class cpr_add_options
{

    /**
     * cpr_add_options constructor.
     */
    public function __construct()
    {

        add_filter( 'wp_mail_from_name', array( $this, 'cpr_update_mail_from_name' ) );

        add_filter( 'wp_mail_from', array( $this, 'cpr_update_mail_from' ) );

        add_filter( 'retrieve_password_title', array( $this, 'cpr_update_password_title' ) );

        if( isset( $_POST[ 'cpr-submit' ] ) )
        {
            $this->cpr_update_options( $_POST );
        }
    }

    public function cpr_update_options( $post )
    {
        if( !empty( $post[ 'cpr-from-name' ] ) )
        {
            update_option( 'cpr_from_name_option', $post[ 'cpr-from-name' ] );
        }

        if( !empty( $post[ 'cpr-from-email' ] ) )
        {
            update_option( 'cpr_from_email_option', $post[ 'cpr-from-email' ] );
        }

        if( !empty( $post[ 'cpr-subject' ] ) )
        {
            update_option( 'cpr_subject_option', $post[ 'cpr-subject' ] );
        }

        if( !empty( $post[ 'cpr-message' ] ) )
        {
            update_option( 'cpr_message_option', $post[ 'cpr-message' ] );
        }
    }

    public function cpr_update_mail_from_name()
    {
        return get_option('cpr_from_name_option');
    }

    public function cpr_update_mail_from()
    {
        return get_option( 'cpr_from_email_option' );
    }

    public function cpr_update_password_title()
    {
        return get_option( 'cpr_subject_option' );
    }

}

$cpr_add_options = new cpr_add_options();