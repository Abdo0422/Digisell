<?php
session_start();
require __DIR__ . '/config.php';

if (!isset($_SESSION['user_id']) || !$_SESSION['is_admin']) {
    header('Location: login.php');
    exit;
}

$title = 'Admin Page';
include __DIR__ . '/../Html/header.html';
?>

<h2>Admin Dashboard</h2>
<p>Welcome, Admin! This is your dashboard.</p>
<a href="index.php">Go to Home</a>
<a href="logout.php">Logout</a>

<?php include __DIR__ . '/../Html/footer.html'; ?>
