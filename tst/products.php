<?php
include('config.php');
$result = mysqli_query($con, "SELECT * FROM prod");
while ($row = mysqli_fetch_array($result)){
    $imagePath = $row['image']; 

    echo "
    <center>
    <main>
        <div class='card' style='width: 15rem;'>
            <img src='$imagePath' class='card-img-top' alt='Product Image'>
            <div class='card-body'>
                <h5 class='card-title'>{$row['name']}</h5>
                <p class='card-text'>{$row['price']} دج</p>
                <a href='delete.php?id={$row['id']}' class='btn btn-danger'> حذف منتج</a>
                <a href='update.php?id={$row['id']}' class='btn btn-primary'> تعديل منتج</a>
            </div>
        </div>
    </main>
    </center>
    ";
}
?>
