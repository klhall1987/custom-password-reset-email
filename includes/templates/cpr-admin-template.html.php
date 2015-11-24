<html>
    <form action="<?php echo Custom_Password_Reset_Email::$url . 'includes/templates/test.html.php'; ?>" method="POST">
        <div>
            <label>
                From E-mail:<br>
                <input type="text" name="from-email">
            </label>
            <br>
            <label>
                Subject:<br>
                <input type="text" name="subject">
            </label>
            <br>

            <label>
                Message:<br>
                <textarea rows="4" cols="30" name="message">
                </textarea>
            </label>
            <br>
            <br>
            <label>
                <input type="submit">
            </label>
        </div>
    </form>
</html>