<!DOCTYPE html>
<html>
    <head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="styles.css">
    <title>Change Password</title>
    </head>
    <body>
        <h1>Change Password</h1>
        <?php if (isset($error)) { ?>
        <p><?php echo $error; ?></p>
    <?php } ?>

    <form method="POST" action="cpass.php">
    <label for="current_password">Current Password:</label>
    <input type="password" name="current_password" required><br>

    <label for="new_password">New Password:</label>
    <input type="password" name="new_password" required >
    <!-- Add minlength attribute to specify minimum password length -->

    <label for="confirm_password">Confirm Password:</label>
    <input type="password" name="confirm_password" required>
    
    <!-- Add client-side JavaScript to check if new_password and confirm_password match -->
    <script>
        document.querySelector('form').addEventListener('submit', function(event) {
            const newPassword = document.querySelector('input[name="new_password"]').value;
            const confirmPassword = document.querySelector('input[name="confirm_password"]').value;

            if (newPassword !== confirmPassword) {
                alert("New password and confirm password do not match.");
                event.preventDefault(); // Prevent form submission
            }
        });
    </script>

    <button type="submit">Change Password</button>
</form>

    </body>

</html>