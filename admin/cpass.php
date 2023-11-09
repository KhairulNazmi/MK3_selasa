<?php
require '../conn.php';

$session_id = $_SESSION['idadmin'];
$current_password = $_POST['current_password'];
$new_password = $_POST['new_password'];
$confirm_password = $_POST['confirm_password'];

// Retrieve the user's current password from the database
$sql = "SELECT katalaluan FROM admin WHERE idadmin = ?";
$stmt = $conn->prepare($sql);
$stmt->bind_param("i", $session_id);
$stmt->execute();
$stmt->bind_result($hashed_password);
$stmt->fetch();
$stmt->close();

// Verify that the current password matches the one stored in the database
if (password_verify($current_password, $hashed_password)) {
    // Check if the new password and confirm password match
    if ($new_password === $confirm_password) {
        // Hash the new password
        $new_password_hash = password_hash($new_password, PASSWORD_BCRYPT);

        // Update the user's password in the database
        $update_sql = "UPDATE admin SET katalaluan = ? WHERE idadmin = ?";
        $update_stmt = $conn->prepare($update_sql);

        if ($update_stmt) {
            $update_stmt->bind_param("si", $new_password_hash, $session_id);
            $update_stmt->execute();
            $update_stmt->close();
            header('Location: index.php');
        } else {
            echo "Error in prepared statement.";
        }
    } else {
        echo "New password and confirm password do not match.";
    }
} else {
    echo "Current password is incorrect.";
}
?>
