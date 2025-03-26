<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width= , initial-scale=1.0">
    <title>Game store\ اضافة منتجات</title>
    <link rel="stylesheet" href="index.css">
</head>
<body>
    <center>
        <div class="main">
            <form action="insert.php" method="post" enctype="multipart/from-deta">
                <h2>Game store</h2>
                <img src="LLL.jpg" alt="logo" width="450px">
                <br>
                <input type="text"name='name'>
                <br>
                <input type="text"name='price'>
                <br>
                <input type="file" id="file" name='image' style='display:none;'>
                <label for="file"> اختيار صورة للمنتج </label>
                <button name='upload'> رفع المنتج</button>
                <br><br>
                <a href="products.php">عرض كل المنتجات</a>
            </form>
        </div>
        <p>Developer By Kings</p>
    </center>
</body>
</html>