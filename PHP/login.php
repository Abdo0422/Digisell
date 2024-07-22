<?php
require __DIR__ . '/config.php';
session_start();

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $username = $_POST['username'];
    $password = $_POST['password'];

    $stmt = $pdo->prepare('SELECT * FROM users WHERE username = ?');
    $stmt->execute([$username]);
    $user = $stmt->fetch();

    if ($user && password_verify($password, $user['password'])) {
        $_SESSION['user_id'] = $user['id'];
        $_SESSION['is_admin'] = $user['is_admin'];  
        header('Location: index.php');
        exit;
    } else {
        $error = 'Invalid username or password';
    }
}

$title = 'Login';
include __DIR__ . '/../Html/header.html';
?>

<h2>Login</h2>
<form method="POST" action="">
    <label>Username</label>
    <input type="text" name="username" required>
    <label>Password</label>
    <input type="password" name="password" required>
    <button type="submit">Login</button>
</form>
<?php if (isset($error)): ?>
    <p><?php echo $error; ?></p>
<?php endif; ?>
<p>Don't have an account? <a href="register.php">Register here</a>.</p>

<?php include __DIR__ . '/../Html/footer.html'; ?>
