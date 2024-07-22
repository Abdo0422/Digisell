<?php
session_start();

$title = 'Home';
include __DIR__ . '/../Html/header.html';

if (isset($_SESSION['user_id'])) {
    if (isset($_SESSION['is_admin']) && $_SESSION['is_admin']) {
        echo '<p><a href="admin.php">Go to Admin Dashboard</a></p>';
    }
    echo '<h2>Welcome</h2>';
    echo '<p>You are logged in.</p>';
    echo '<a href="logout.php">Logout</a>';
} else {
    echo '<h2>Welcome to the Authentication Example</h2>';
    echo '<a href="login.php" class="button">Login</a>';
    echo '<a href="register.php" class="button">Register</a>';
}

include __DIR__ . '/../Html/footer.html';
?>
