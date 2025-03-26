<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width= , initial-scale=1.0">
    <title>Update/تعديل منتج </title>
    <link rel="stylesheet" href="index.css">
</head>

<body>
    <?php
    include('config.php');
    $ID=$_GET['id'];
    $up = mysqli_query($con,"select * from prod where id =$ID");
    $data =mysqli_fetch_array($up);
    ?>
    <center>
        <div class="main">
            <form action="up.php" method="post" enctype="multipart/from-deta">
                <h2>Update products</h2>
                <input type="text" name='id' value='<?php echo $data['id']?>'>
                <br>
                <input type="text" name='name' value='<?php echo $data['name']?>'>
                <br>
                <input type="text" name='price' value='<?php echo $data['price']?>'>
                <br>
                <input type="file" id="file" name='image' style='display:none;'>
                <label for="file"> تحديث صورة للمنتج </label>
                <button name='update' type='submit'> تعديل المنتج</button>
                <br><br>
                <a href="products.php">عرض كل المنتجات</a>
            </form>
        </div>
        <p>Developer By Kings</p>
    </center>
</body>

</html>