<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title></title>
</head>
<body>
    <h1>Register</h1>
    <form action="<?php echo $host;  ?>controller/user/register.php" method="post">
        <input type="text" name="username" placeholder="Username">
        <input type="password" name="password" placeholder="Password">
        <input type="submit" name="buttonSubmit" value="Simpan">
    </form>
</body>
</html>
