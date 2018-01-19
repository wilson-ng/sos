<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>List Product</title>
</head>
<body>
    <div>
        <h1>Product</h1>
    </div>
    <div>
        <ul>
            <li><a href="http://sos.localhost:8081/controller/dashboard/product/add.php">Tambah Product</a></li>
        </ul>
    </div>
    <div>
        <h2>List Product</h2>
        <table border="1">
            <tr>
                <th>No.</th>
                <th>Gambar</th>
                <th>Nama</th>
                <th>Stock</th>
                <th>Harga</th>
                <th>&nbsp;</th>
                <th>&nbsp;</th>
            </tr>
            <?php foreach ($products as $key => $product) { ?>
            <tr>
                <td><?php echo $key+1; ?></td>
                <td><img src="<?php echo 'http://sos.localhost:8081/'.$product->getImage(); ?>" alt="" width="70%"></td>
                <td><?php echo $product->getName(); ?></td>
                <td><?php echo $product->getQuantity(); ?></td>
                <td><?php echo $product->getPrice(); ?></td>
                <td><a href="http://sos.localhost:8081/controller/dashboard/product/edit.php?product=<?php echo $product->getId(); ?>">edit</a></td>
                <td><a href="http://sos.localhost:8081/controller/dashboard/product/delete.php?product=<?php echo $product->getId(); ?>">delete</a></td>
            </tr>
            <?php } ?>
        </table>
    </div>
</body>
</html>
