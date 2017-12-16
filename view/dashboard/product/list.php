<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Produk</title>
</head>
<body>
    <div>
        <h1>Produk</h1>
    </div>
    <div>
        <ul>
            <li><a href="">Tambah produk</a></li>
        </ul>
    </div>
    <div>
        <table border="1">
            <tr>
                <th>No.</th>
                <th>Nama</th>
                <th>Image</th>
                <th>Harga</th>
                <th>Quantity</th>
                <th>&nbsp;</th>
                <th>&nbsp;</th>
            </tr>
            <tr>
                <?php for($i = 0; $i < count($products); $i++) { ?>
                    <td><?php echo $i+1; ?></td>
                    <td><?php echo $products[$i]->getName(); ?></td>
                    <td><img src="<?php echo $products[$i]->getImage(); ?>" alt=""></td>
                    <td><?php echo $products[$i]->getPrice(); ?></td>
                    <td><?php echo $products[$i]->getQuantity(); ?></td>
                    <td><a href="">edit</a></td>
                    <td><a href="">delete</a></td>
                <?php } ?>
            </tr>
        </table>
    </div>
</body>
</html>
