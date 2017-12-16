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
            <a href="<?php echo $host; ?>controller/user/logout.php">Logout</a>
        <?php } else { ?>
            <a href="<?php echo $host; ?>controller/user/register.php">Register</a>
            <a href="<?php echo $host; ?>controller/user/login.php">Login</a>
        <?php } ?>
    </div>
</body>
</html>
