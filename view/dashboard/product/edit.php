<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Edit Product</title>
</head>
<body>
    <div>
        <a href="http://sos.localhost:8081/controller/dashboard/product/list.php">Back</a>
    </div>
    <div>
        <h1>Edit Product</h1>
        <form action="http://sos.localhost:8081/controller/dashboard/product/edit.php?product=<?php echo $product->getId(); ?>" method="post" enctype="multipart/form-data">
            <label for="name">Nama produk</label>
            <input type="text" name="name" id="name" placeholder="Nama produk" value="<?php echo $product->getName(); ?>">
            <br>
            <label for="price">Harga product</label>
            <input type="text" name="price" id="price" placeholder="Harga produk" value="<?php echo $product->getPrice(); ?>">
            <br>
            <label for="quantity">Jumlah produk</label>
            <input type="text" name="quantity" id="quantity" placeholder="Jumlah produk" value="<?php echo $product->getQuantity(); ?>">
            <br>
            <label for="image">Gambar produk</label>
            <input type="file" name="image" id="image">
            <br>
            <input type="submit" name="saveProduct" value="Simpan produk">
        </form>
    </div>
</body>
</html>
