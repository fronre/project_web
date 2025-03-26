<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
     <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <title>عربتي / منتجاتي</title>
     <style>
       main{
        width: 40%;
        margin-top: 30px;
       }
       table{
        box-shadow: 1px 1px 10px silver;
       }
       thead{
        background-color: #e3d8d5;
        text-align: center;
       }
       tbody{
        text-align: center;
       }
     </style>
     <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css" integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous">
     <link rel="stylesheet" href="index.css">
</head>
<body>
    <center>
        <h3>
           منتجاتك المحجوزة
         </h3>
     </center>
<?php
include('config.php');
$result = mysqli_query($con, "SELECT * FROM addcard");
while($row =mysqli_fetch_array($result)){
    echo "
        <center>
        <main>
            <table class='table'>
             <thead>
                <tr>
                    <th scope='col'>Product name</th>
                    <th scope='col'>Product price</th>
                    <th scope='col'>Delete Product</th>
                </tr>
             </thead>
             <tbody>
                <tr>
                    <td>$row[name]</td>                   
                    <td>$row[price]</td>
                    <td><a href='del_card.php? id=$row[id]' class='btn btn-danger'>ازالة</a></td>
                </tr>
             </tbody>
            </table>
        </main>
    </center>
    "
;}
?>
<center>
    <a href="shop.php">الرجوع لصفحة المنتجات</a>
</center>

</body>
</html>