<?php
session_start();
$database_name="product_details";
$con=mysqli_connect("localhost","root","",$database_name);
if (isset($_POST["add"])){
    if (isset($_SESSION["index"])){
        $item_array_id = array_column($_SESSION["index"],"product_id");
        if (! in_array($_GET["id"],$item_array_id)){
            $count = count($_SESSION["index"]);
            $item_array= array(
                'product_id' => $_GET["id"],
                'item_name' => $_POST["hidden_name"],
                'product_price' => $_POST["hidden_price"],
                'item_quantity' => $_POST["quantity"],
            );
            $_SESSION["index"][$count] = $item_array;
            echo '<script>window.location="index.php"</script>';
        }else{
            echo '<script>alert("Product is already added to cart")</script>';
            echo '<script>window.location="index.php"</script>';
        }
    }else{
        $item_array= array(
            'product_id' => $_GET["id"],
            'item_name' => $_POST["hidden_name"],
            'product_price' => $_POST["hidden_price"],
            'item_quantity' => $_POST["quantity"],
        );
        $_SESSION["index"][0]=$item_array;
        }
    }
    if (isset($_GET["action"])){
        if ($_GET["action"] == "delete"){
            foreach ($_SESSION["index"] as $keys => $value){
                if ($value["product_id"] == $_GET["id"]){
                    unset($_SESSION["index"][$keys]);
                    echo '<script>alert("product has been removed...!!")</script>';
                    echo '<script>window.location="index.php"</script>';

                }
            }
        }
    }
     
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
    <style>
@import url('https://fonts.googleapis.com/css2?family=Titillium+Web:wght@200&display=swap');
*{
    font family: 'Titillumweb', sans-serif;
}
.product{
    border: 1px solid #eaeaec;
    margin: -1px 19px 3px -1px;
    padding: 10px;
    text-align: center;
    background-color: #efefef;
}
table, th, tr{
    text-align: center;
}
.title2{
    text-align: center;
    color: #66afe9;
    background-color: #efefef;
    padding: 2%
}
h2{
    text-align: center;
    color: #66afe9;
    background-color: #efefef;
    padding: 2%;
}
table th{
    background-color: #efefef;
}
</style>
</head>
<body>

    <div class="Container" style="width:65">
    <h2> Shopping Cart </h2>
    <?php
    $query = "SELECT * FROM product ORDER BY id ASC";
    $result = mysqli_query($con,$query);
    if(mysqli_num_rows($result) > 0){
        while ($row = mysqli_fetch_array($result)){
            ?>
            <div class="col-md-3">
                <form method="post" action="index.php?action=add&id=<?php echo $row["id"] ?>">
                <div class="product">
                    <img src="<?php echo $row["image"]; ?>" class="img-responsive">
                    <h5 class="text-info"><?php echo $row["pname"]; ?></h5>
                    <h5 class="text-danger"><?php echo $row["price"]; ?></h5>
                    <input type="text" name="quantity" class="form-control" value="1">
                    <input type="hidden" name="hidden-name" value="<?php echo $row["pname"]; ?>">
                    <input type="hidden" name="hidden-price" value="<?php echo $row["price"]; ?>">
                    <input type="submit" name="add" style="margin-top: 5px;" class="btn btn-success" value="add to cart">
            </div>
        </form>
    </div>
    <?php
        }
    }
?>
<div style="clear: both"></div>
<h3 class="title2">Shopping Cart Details</h3>
<div class="table-responsive">
    <table class="table table-bordered">
    <tr>
        <th width="30%">Product Name</th>
        <th width="10%">Quantity</th>
        <th width="13%">Price Details</th>
        <th width="10%">Total Price</th>
        <th width="17%">Remove Item</th>
</tr>
<?php
if (!empty($_SESSION["index"])){
    $total = 0;
    foreach($_SESSION["index"] as $key => $value) {
        ?>
        <tr>
            <td><?php echo $value["item_name"]; ?></td>
            <td><?php echo $value["item_quantity"]; ?></td>
            <td> $ <?php echo $value["product_price"]; ?></td>
            <td> $ <?php echo number_format( $value["item_quantity"] * $value["product_price"], 2); ?></td>
            <td><a href="index.php?action=delete&id=<?php echo $value["product_id"]; ?>"><span 
            class="text-danger">Remove Item</span></a></td>
    </tr>
     <?php
     $total = $total + ($value["item_quantity"] * $value["product_price"]);
    }
    ?>
    <tr>
        <td colspan="3">Total</td>
        <th>$ <?php echo number_format($total, 2); ?></th>
        <td></td>
</tr>
<?php
}
 
?>
</div>
</div>
<a href="web1.php" class="btn btn-success"> check more </a>

</body>
</html>
                    