<?php 
    include('database.php');

 
        $id = $_GET['id'];
        $productName = $_POST['name'];
        $image = $_POST['image'];
        $price = $_POST['price'];
        $category = $_POST['category'];

        $sql = "UPDATE product
        SET category='$category' name = '$productName', image= '$image', price='$price' WHERE id = $id";

        $result = pg_query($conn, $sql);
        header('location: product.php');
?>