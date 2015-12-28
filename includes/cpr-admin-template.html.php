<html>
    <head>
        <link rel="stylesheet" type="text/css" href="<?php echo $cpr_set_css; ?>">
    </head>
    <form action="" method="POST">
        <div class="cpr-form">
            <div class="cpr-fields">
                <label>
                    <strong>From Name:</strong><br>
                    <input id="cpr-from-name" type="text" name="cpr-from-name" value="<?php echo $cprFromNameOption; ?>">
                </label>
                <br>
                <label>
                    <strong>From E-mail:</strong><br>
                    <input id="cpr-from-email" type="text" name="cpr-from-email" value="<?php echo $cprFromEmailOption; ?>">
                </label>
                <br>
                <label>
                    <strong>Subject:</strong><br>
                    <input id="cpr-subject" type="text" name="cpr-subject"  value="<?php echo $cprSubjectOption; ?>">
                </label>
                <br>
                <label>
                    <strong>Message:</strong><br>
                    <?php echo wp_editor( $cprMessageOption , 'cpr-message', $cprEditorSettings ); ?>
                </label>
                <h3>Insert {password_key} shortcode where ever you would like the email password key to appear in your email.</h3>
            </div>
            <div class="cpr-buttons">
                <label>
                    <input type="submit" class="button-primary" name="cpr-submit">
                </label>
                <br>
                <br>
                <a href="<?php echo $passwordResetURL; ?>" type="button" class="button-secondary">Go To Password Reset Page</a>
            </div>
        </div>
    </form>
</html>
