<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <div>
        <h1>Dashboard</h1>
    </div>
    <div>
        <ul>
            <li>
                <a href="<?php echo $host; ?>controller/dashboard/index.php">Home</a>
            </li>
            <li>
                <a href="<?php echo $host; ?>controller/dashboard/product/list.php">Product</a>
            </li>
            <li>
                <a href="<?php echo $host; ?>controller/user/logout.php">Log out</a>
            </li>
        </ul>
    </div>
</body>
</html>
