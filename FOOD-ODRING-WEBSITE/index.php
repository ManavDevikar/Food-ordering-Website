<!DOCTYPE html>
<html lang="en">
<head>
    <title>Shoping Cart</title>
    <link rel="stylesheet" href="css/style.css">
    <script src="js/bootstrap.js"></script>
</head>
<body>
    <div class="container">
        <header>
            <div class="d-flex flex-column flex-md-row align-items-center pb-3 mb-4 border-bottom">
                <a href="index.php" class="d-flex align-items-center text-dark text-decoration-none">
                    <span class="fs-4">Online Shoping Cart</span>
                </a>

                <nav class="d-inline-flex mt-md-0 ms-md-auto">
                    <a class="me-3 py-2 text-dark text-decoration-none btn btn-primary btn-sm" href="web1.php">Home</a>
                    <a class="me-3 py-2 text-light text-decoration-none btn btn-primary btn-sm" href="viewCart.php">View Cart</a>
                </nav>
            </div>
        </header>
        <div class="row">
            <h1 class="text-center border-bottom pb-4 mb-4">Latest Products</h1>
            <?php
                if(isset($_GET['true']) == "created"){
            ?>
                <div class="alert alert-success alert-dismissible fade show" role="alert">
                    <strong>Successfully!</strong> Your product added to Cart.
                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                </div>
            <?php
                }
            ?>
        </div>
        <main>
            <div class="row row-cols-1 row-cols-md-3 mb-3 text-center">
            <div class="col">
                <div class="card mb-4 rounded-3 shadow-sm">
                <div class="card-header py-3">
                    <h4 class="my-0 fw-normal">Product 1</h4>
                </div>
                <div class="card-body">
                    <h1 class="card-title">Egg Fry</h1>
                    <ul class="list-unstyled mt-3 mb-4">
                        <li><img src="images/Eggfry.jpg" alt="Eggfry" style="width:70%;height:250px;"></li>
                        <li>Price: 1000</li>
                    </ul>
                    <form action="addCart.php" method="post">
                        <input type="hidden" name="name" value="Eggfry">
                        <input type="hidden" name="price" value="1000">
                        <input type="text" name="qty" placeholder="Quantity" required class="form-control">
                        <input type="submit" class="btn btn-lg btn-primary" value="Add to Cart">
                    </form>
                </div>
                </div>
            </div>

            <div class="col">
                <div class="card mb-4 rounded-3 shadow-sm">
                <div class="card-header py-3">
                    <h4 class="my-0 fw-normal">Product 2</h4>
                </div>
                <div class="card-body">
                    <h1 class="card-title">Pizza</h1>
                    <ul class="list-unstyled mt-3 mb-4">
                        <li><img src="images/1pizza.png" alt="pizza" style="width:70%;height:250px;"></li>
                        <li>Price: 3000</li>
                    </ul>
                    <form action="addCart.php" method="post">
                        <input type="hidden" name="name" value="pizza">
                        <input type="hidden" name="price" value="3000">
                        <input type="text" name="qty" placeholder="Quantity" class="form-control">
                        <input type="submit" class="btn btn-lg btn-primary" value="Add to Cart">
                    </form>
                </div>
                </div>
            </div>

            <div class="col">
                <div class="card mb-4 rounded-3 shadow-sm">
                <div class="card-header py-3">
                    <h4 class="my-0 fw-normal">Product 3</h4>
                </div>
                <div class="card-body">
                    <h1 class="card-title">Salad</h1>
                    <ul class="list-unstyled mt-3 mb-4">
                        <li><img src="images/Salad.jpg" alt="Salad" style="width:70%;height:250px;"></li>
                        <li>Price: 2000</li>
                    </ul>
                    <form action="addCart.php" method="post">
                        <input type="hidden" name="name" value="Salad">
                        <input type="hidden" name="price" value="2000">
                        <input type="text" name="qty" placeholder="Quantity" class="form-control">
                        <input type="submit" class="btn btn-lg btn-primary" value="Add to Cart">
                    </form>
                </div>
                </div>
            </div>
            
            </div>
        </main>
    </div>
</body>
</html>