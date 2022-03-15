<?php  include('database.php'); ?>
<?php
	if (isset($_POST['submit'])) {
        //header("Location: http://localhost/ASM2-Cloud/product.php"); 
		$name = $_POST['name'];
		$price = $_POST['price'];
        $image = $_POST['image'];
        $category = $_POST['category'];

        $sql = "INSERT INTO product (category, name, image, price) VALUES ( '$category','$name', '$image', '$price')";
        try {
            pg_query($conn, $sql); 
		    header('location: product.php');
            exit();
        } catch (Exception $e) {
            echo 'Message: ' .$e->getMessage();
        }	
	}
?>