<?php 
include("includes/connection.php");

include("functions/common_functions.php");

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>E commerce website.</title>
    <link rel="stylesheet" href="style.css"/>
    <!--Bootstrap css link--->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">

    <!--Fontawasome css link--->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css" integrity="sha512-Kc323vGBEqzTmouAECnVceyQqyqdsSiqLQISBL29aUW4U/M7pSPA/gEUZQqv1cwx4OnYxTxve5UMg5GT6L4JJg==" crossorigin="anonymous" referrerpolicy="no-referrer" />

</head>
<body>

<div class="container-fluid p-0">
  <nav class="navbar navbar-expand-lg bg-info">
  <div class="container-fluid">
    <a class="navbar-brand" href="#"><img src="images/logo1.webp" alt="" class="logo"></a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0 ">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="#">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Products</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="users_area/insert_users.php">Register</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Contact</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#"><i class="fa-solid fa-cart-shopping"></i><sup>1</sup></a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Total Price</a>
        </li>
        
      </ul>
      <form class="d-flex" role="search">
        <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search" name="search-data">
        <button class="btn btn-outline-light" type="submit" name="seach_data_products">Search</button>
      </form>
    </div>
  </div>
</nav>
<nav class="navbar navbar-expand-lg navbar-dark bg-secondary">
    <ul class="navbar-nav me-auto">
        <li class="nav-item">
          <a href="#" class="nav-link">Welcome Guest</a>
        </li>
        <li class="nav-item">
          <a href="#" class="nav-link">Login</a>
        </li>
    </ul>
</nav>
<!---Third Child-->
<div class="bg-light">
  <h3 class="text-center">Hidden Store.</h3>
  <p class="text-center">Comunication is in the heart of e-commerce and community.</p>
</div>
<!--Fourth child start.--->
<div class="row">
  <div class="col-md-10 bg-light">
    <div class="row">
      <?php 
   getProducts();
 
      ?>
      
    </div>
  </div>
  <div class="col-md-2 bg-secondary p-0">
    <ul class="navbar-nav me-auto text-center">
      <li class="nav-item bg-info">
        <a href="#" class="nav-link text-light">
           <h4>Delivery Brands </h4>
          </a>
      </li>
      <?php
       getBrands();
      
      ?>
    </ul>
    <!-----Category to be displayed start------>
<ul class="navbar-nav me-auto text-center">
      <li class="nav-item bg-info">
        <a href="" class="nav-link text-light"><h4>Categories</h4></a>
      </li>
      <?php 
      getCategories();
      ?>
      
</ul>
<!-----Category to be displayed end------>
  </div>
</div>
       





<!--Fourth child end.--->
 <div class="bg-info">
  <p class="p-3 text-center">All right reserved by Joblul Hoque</p>
 </div> 
</div>




<!--Bootstrap js link.-->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>

</body>
</html>