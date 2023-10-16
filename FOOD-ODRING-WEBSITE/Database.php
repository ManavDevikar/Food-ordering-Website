<?php
<section class = "my-5">
<h3 class = "text-center">Services</h3>
<div class ="container-fluid">
<div class = "row">
<div class = "col-lg=4 col-md-4 col-12">
  <div class="card">
  <img class="card-img-top" src="Gta5.jpg" alt="Card image">
  <div class="card-body">
    <h4 class="card-title">GTA V</h4>
    <p class="card-text">Rs. 500.00</p>
    <a href="buy.php" class="btn btn-primary">Buy Now</a>
  </div>
</div>
</div>
<div class = "col-lg=4 col-md-4 col-12">
  <div class="card">
  <img class="card-img-top" src="Uncharted4.jpg" alt="Card image">
  <div class="card-body">
    <h4 class="card-title">Uncharted 4</h4>
    <p class="card-text">Rs. 1000.00</p>
    <a href="buy.php" class="btn btn-primary">Buy Now</a>
  </div>
</div>
</div>
<div class = "col-lg=4 col-md-4 col-12">
  <div class="card">
  <img class="card-img-top" src="fifa18.jpg" alt="Card image">
  <div class="card-body">
    <h4 class="card-title">FIFA 18</h4>
    <p class="card-text">Rs. 300.00</p>
    <a href="buy.php" class="btn btn-primary">Buy Now</a>
  </div>
</div>
</div>
</div>
</div>
</section>
?>



<?php
$con = mysqli_connect('localhost','root');
mysqli_select_db($con,'shopping cart');
if($con){
echo "connection successful";
}
else{
  "connection failed"
}
$query = "SELECT `ID`, `Name`, `Image`, `Price`, `Discount` FROM `shopping cart` order by id ASC "
$queryfire = mysqli_query($con, $query);
$num = mysqli_num_rows($queryfire);
if($num > 0){
while($product =mysqli_fetch_array($queryfire)){
  print_r($product);
}

}
?>