<?php if ( ! defined( 'ABSPATH' ) ) exit;

class cpr_add_options
{

    public function __construct()
    {
        if( isset( $_POST[ 'cpr-from-name'] ) && !empty( $_POST[ 'cpr-from-name' ] ) )
        {
            update_option( 'cpr_from_name_option', $_POST[ 'cpr-from-name' ] );
        }

        if( isset( $_POST[ 'cpr-from-email' ] ) && !empty( $_POST[ 'cpr-from-email' ] ) )
        {
            update_option( 'cpr_from_email_option', $_POST[ 'cpr-from-email' ] );
        }

        if( isset( $_POST[ 'cpr-subject' ] ) && !empty( $_POST[ 'cpr-subject' ] ) )
        {
            update_option( 'cpr_subject_option', $_POST[ 'cpr-subject' ] );
        }

        if( isset( $_POST[ 'cpr-message' ] ) && !empty( $_POST[ 'cpr-message' ] ) )
        {
            update_option( 'cpr_message_option', $_POST[ 'cpr-message' ] );
        }
    }

    public function cpr_error( $errors )
    {

    }

}

$cpr_add_options = new cpr_add_options();