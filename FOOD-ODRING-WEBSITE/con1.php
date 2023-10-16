<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" href="CSS/style.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <title>Document</title>
</head>
<body>
<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
  <a class="navbar-brand" href="#">Cheesino''s</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav ml-auto">
      <li class="nav-item active">
        <a class="nav-link" href="web1.php">Home <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="services.php">services</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="about.php">about</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="con1.php">contact Us</a>
      </li>
    </ul>
    <form class="form-inline my-2 my-lg-0">
      <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
      <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
    </form>
  </div>
</nav>

<div class="jumbotron">
  <h1>contact Us</h1>
  <p> Your Information is always safe... </p>
</div>
<section class="my-5">
<div class="py-5">
<h2 class="text-center"> contact us </h2> 
</div>

<div class="w-50 m-auto">
<form action="userinfo.php" method="post">
<div class="form-group">
<label>Username</label>
<input type="text" name="user"  class="form-control">
</div>
<div class="form-group">
<label>Email Id</label>
<input type="text" name="email"  class="form-control">
</div>
<div class="form-group">
<label>Mobile</label>
<input type="text" name="mobile"  class="form-control">
</div>
<div class="form-group">
<label>comments</label>
<textarea class="form-control" name="comments">
  </textarea>
  </div>
  <button type="submit" class="btn btn-success">submit</button>


</form>
</div>
</section>
<footer>>
<p class="p-2 bg-dark text-white text-center"> This website developed and managed by Cheesino's</p>
</footer>

