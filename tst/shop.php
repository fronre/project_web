<!DOCTYPE html>
<html lang="en">
<head> 
   <meta charset="UTF-8">
     <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <title>Products /المنتجات </title>
     <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css" integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous">
     <link rel="stylesheet" href="index.css">
     <style>
        .card{
            float: right;
            margin-top: 70px;
            margin-left: 10px;
            margin-right: 50px;
            }
             .card img{
                width: 100%;
            }
            #aa{
                margin-left: 70px;
                text=decoration: none;
         
            }
    </style>
 </head>
 <body>
    <nav class="navbar navbar-dark bg-dark ">
        <a id="aa" class="navbar-brand" href="card.php">Mycard / عربتي </a>
    </nav>
    <center>
        <h3>المنتجات المتوفرة
        </h3>
    </center>
    <?php
      include('config.php');
      $result = mysqli_query($con, "SELECT * FROM prod");
      while ($row = mysqli_fetch_array($result)){
        $imagePath=$row['image'];
         echo "
        <center>
      <main>
           <div class='card' style='width: 15rem;'>
          $imagePath
           <img src='$imagePath' class='card-img-top' alt='Product Image'>
             <div class='card-body'>
                  <h5 class='card-title'>$row[name]</h5>
                  <p class='card-text'>$row[price]</p>
                  <a href='val.php? id=$row[id]' class='btn btn-success'> اضافة المنتج للعربة</a>
                </div>
            </div>
        </main>
        <center>
        ";
    }
    
    ?>



</body>
</html>