<?php  include('database.php'); ?>
<?php 
    $products = pg_query($conn, "SELECT * FROM product");
    // $row = pg_fetch_row($products);
    // var_dump($row);
    // die()
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="form_product.css">
    <title>Document</title>
</head>
<body>
    <div class="btn">
        <h3>Create a new product:</h3>
        <a href="create_form.php" target="_blank"><button type="button" class="btn btn-success">Create Product</button></a>
        <a href="index.php" style="margin-left:-0.1%;"><button type="button" class="btn btn-success">Home</button></a>
    </div>
    <table>
        <tr>
            <th>ID</th>
            <th>Category</th>
            <th>Name</th>
            <th>Image</th>
            <th>Price</th>
            <th>Function</th>   
        </tr>
        <?php while ($row = pg_fetch_assoc($products)) {?>
            <tr> 
                <td><?php echo $row['id']?></td>
                <td><?php echo $row['category']?></td>
                <td><?php echo $row['name']?></td> 
                <td class="image"><img src="image/<?php echo $row['image']?>" alt=""></td>
                <td><?php echo $row['price']?> VND</td>
                <td>
                <a href="update_form.php?id=<?php echo $row['id' ]?>" target="_blank"><button type="button" class="btn btn-success" id="btn1">Update</button></a>
                <a href="deleteProduct.php?id=<?php echo $row['id' ]?>"><button type="button" class="btn btn-danger" id="btn1">Delete</button></a>
                </td>
            </tr>
        <?php }?>  
    </table>
</body>
</html>