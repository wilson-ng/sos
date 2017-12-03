<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title></title>
</head>
<body>
    <div>
        <?php if (isset($_SESSION['username'])) { ?>
            <p>Selamat Datang, <?php echo $_SESSION['username']; ?> </p>
            <a href="http://localhost.dev:8081/controller/user/logout.php">Logout</a>
        <?php } else { ?>
            <a href="http://localhost.dev:8081/controller/user/register.php">Register</a>
            <a href="http://localhost.dev:8081/controller/user/login.php">Login</a>
        <?php } ?>
    </div>
</body>
</html>
