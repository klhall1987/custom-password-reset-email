<html>
    <head>
        <link rel="stylesheet" type="text/css" href="<?php echo $cpr_set_css; ?>">
    </head>
    <form action="" method="POST">
        <div class="cpr-form">
            <div class="cpr-fields">
                <label>
                    From Name:<br>
                    <input type="text" name="cpr-from-name" value="<?php echo $cprFromNameOption; ?>">
                </label>
                <br>
                <label>
                    From E-mail:<br>
                    <input type="text" name="cpr-from-email" value="<?php echo $cprFromEmailOption; ?>">
                </label>
                <br>
                <label>
                    Subject:<br>
                    <input type="text" name="cpr-subject"  value="<?php echo $cprSubjectOption; ?>">
                </label>
                <br>
                <label>
                    Message:<br>
                    <?php echo wp_editor( $cprMessageOption , 'cpr-message', $cprEditorSettings ); ?>
                </label>
                <h5>Insert {password_key} shortcode where ever you would like the email password key to appear in your email.</h5>
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
