<?php
session_start();

// Proses Login
if (isset($_POST['submit'])) {
    if ($_POST['user'] == 'rio adriana' && $_POST['pass'] == 'kata sandi') {
        $_SESSION['user'] = $_POST['user'];
        header("Location: " . $_SERVER['PHP_SELF']);
        exit;
    } else {
        $error = "Username atau Password salah!";
    }
}

// Proses Logout
if (isset($_GET['logout'])) {
    session_destroy();
    header("Location: " . $_SERVER['PHP_SELF']);
    exit;
}
?>

<!DOCTYPE html>
<html>
<body>
    <?php if (!isset($_SESSION['user'])): ?>
        <h2>Login</h2>
        <?php if (isset($error)) echo "<p style='color:red;'>$error</p>"; ?>
        <form action="" method="post">
            Username : <input type="text" name="user" required><br>
            Password : <input type="password" name="pass" required><br>
            <input type="submit" name="submit" value="Log In">
        </form>
    <?php else: ?>
        <h2>Anda berhasil LOGIN</h2>
        <p>Halo, <b><?php echo $_SESSION['user']; ?></b>!</p>
        <p>Sesi Anda saat ini aktif.</p>
        <a href="?logout=true">Logout</a>
    <?php endif; ?>
</body>
</html>