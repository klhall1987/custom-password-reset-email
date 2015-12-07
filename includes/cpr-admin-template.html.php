<html>
    <form action="" method="POST">
        <div>
            <label>
                From Name:<br>
                <input type="text" name="cpr-from-name" value="<?php echo get_option( 'cpr_from_name_option' ); ?>">
            </label>
            <br>
        <div>
            <label>
                From E-mail:<br>
                <input type="text" name="cpr-from-email" value="<?php echo get_option( 'cpr_from_email_option' ); ?>">
            </label>
            <br>
            <label>
                Subject:<br>
                <input type="text" name="cpr-subject" value="<?php echo get_option( 'cpr_subject_option' ); ?>">
            </label>
            <br>
            <label>
                Message:<br>
                <textarea rows="4" cols="30" name="cpr-message"><?php echo get_option( 'cpr_message_option' ); ?></textarea>
            </label>
            <h5>Insert {password_key} shortcode where ever you would like the email password key to appear in your email.</h5>
            <label>
                <input type="submit" name="cpr-submit">
            </label>
            <br>
            <br>
            <a href="<?php echo  $cpr_site_url . '/wp-login.php?action=lostpassword'; ?>">
                <button type="button" name="cpr-goto-pwreset">Go To Password Reset Page</button>
            </a>
        </div>
    </form>
</html>


