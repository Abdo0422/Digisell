<?php
require __DIR__ . '/config.php';

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $username = $_POST['username'];
    $password = password_hash($_POST['password'], PASSWORD_DEFAULT);

    $stmt = $pdo->prepare('INSERT INTO users (username, password) VALUES (?, ?)');
    $stmt->execute([$username, $password]);

    header('Location: login.php');
    exit;
}

$title = 'Register';
include __DIR__ . '/../Html/header.html';
?>

<h2>Register</h2>
<form method="POST" action="">
    <label>Username</label>
    <input type="text" name="username" required>
    <label>Password</label>
    <input type="password" name="password" required>
    <button type="submit">Register</button>
</form>
<p>Already have an account? <a href="login.php">Login here</a>.</p>

<?php include __DIR__ . '/../Html/footer.html'; ?>
