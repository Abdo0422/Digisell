<?php
session_start();

if (!isset($_SESSION['user_id'])) {
    header('Location: login.php');
    exit;
}

$title = 'Welcome';
include __DIR__ . '/../Html/header.html';
?>

<p>Welcome, you are logged in!</p>
<a href="logout.php">Logout</a>

<?php include __DIR__ . '/../Html/footer.html'; ?>
