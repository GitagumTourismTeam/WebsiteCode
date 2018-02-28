
<?php
// See the password_hash() example to see where this came from.
$hash = '$2y$10$s8fJtE6q6sSxBGqtspU.r.6yN4YOwXJCsdl2FyPdK6UQiFO4GR5m6';

if (password_verify('gitagumtourism', $hash)) {
    echo 'Password is valid!';
} else {
    echo 'Invalid password.';
}
?>
