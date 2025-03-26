<?php
include('config.php');
$ID=$_GET['id'];
$up=mysqli_query($con, "select * from prod where id=$ID");
$data = mysqli_fetch_array($up);
?>
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
     <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <title>تاكيد شرء المنتج </title>
     <style>
      input{
        display: none;
      }
      .main{
        width: 30%;
        padding: 20px;
        box-shadow: 1px 1px 10px silver;
        margin-top: 50px;
      }
     </style>
     <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css" integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous">
     <link rel="stylesheet" href="index.css">
</head>
<body>
  <center>
    <div class="main">
      <form action="insert_card.php" method="post">
          <h2>هل فعلا تريد شراء المنتج 
              <input type="text" name="id" value='<?php echo $data['id']?>'>
              <input type="text" name="name" value='<?php echo $data['name']?>' >
              <input type="text" name="price" value='<?php echo $data['price']?>' >
              <button name="add" type="submit" classe='btn btn-warning'>تاكيد اضافة المنتج للعربة</button>
              <a href="shop.php">الرجوع لصفحة المنتجات</a>
          </h2>
      </for>
    </div>
  </center>  
</body>
</html>