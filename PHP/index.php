<?php
session_start();

$title = 'Home';
include __DIR__ . '/../Html/header.html';

if (isset($_SESSION['user_id'])) {
    // User is logged in
    echo '<h2>Welcome</h2><br />';
    echo '<p>You are logged in.</p><br />';
    echo '<a href="logout.php">Logout</a>';
} else {
    // User is not logged in
    echo '<h2>Welcome to the Authentication Example</h2><br />';
    echo '<a href="login.php" class="button">Login</a>';
    echo '<a href="register.php" class="button">Register</a>';
}

include __DIR__ . '/../Html/footer.html';
?>
