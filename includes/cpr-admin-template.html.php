<html>
    <form action="" method="POST">
        <div>
            <label>
                From Name:<br>
                <input type="text" name="cpr-from-name" class="fat" value="<?php echo $cprFromNameOption; ?>">
            </label>
            <br>
        <div>
            <label>
                From E-mail:<br>
                <input type="text" name="cpr-from-email" class="fat" value="<?php echo $cprFromEmailOption; ?>">
            </label>
            <br>
            <label>
                Subject:<br>
                <input type="text" name="cpr-subject"  value="<?php echo $cprSubjectOption; ?>">
            </label>
            <br>
            <label>
                Message:<br>
                <textarea rows="4" cols="30" name="cpr-message"><?php echo $cprMessageOption; ?></textarea>
            </label>
            <h5>Insert {password_key} shortcode where ever you would like the email password key to appear in your email.</h5>
            <label>
                <input type="submit" class="button-primary" name="cpr-submit">
            </label>
            <br>
            <br>
            <a href="<?php echo $passwordResetURL; ?>" type="button" class="button-secondary">Go To Password Reset Page</a>
        </div>
    </form>
</html>


