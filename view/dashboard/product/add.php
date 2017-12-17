<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Tambah produk</title>
</head>
<body>
    <div>
        <h1>Tambah produk</h1>
    </div>
    <div>
        <form action="<?php echo $host; ?>controller/dashboard/product/add.php" method="post" enctype="multipart/form-data">
            <label for="name">Nama produk</label>
            <input type="text" name="name" id="name">
            <br>
            <label for="price">Harga produk</label>
            <input type="text" name="price" id="price">
            <br>
            <label for="quantiy">Quantity produk</label>
            <input type="text" name="quantity" id="quantity">
            <br>
            <label for="image">Gambar produk</label>
            <input type="file" name="image" id="image">
            <br>
            <input type="submit" name="saveProduct" value="Simpan produk">
        </form>
    </div>
</body>
</html>
