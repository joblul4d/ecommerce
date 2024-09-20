<?php

// getting products
function getProducts () {
    global $con;
    // condition to check isset or not
    if(!isset($_GET['category'])){
      if(!isset($_GET['brand'])){
    $sql = "SELECT * FROM products";
    $result = mysqli_query($con,$sql);
    while($row = mysqli_fetch_assoc($result)){
      $product_id = $row['product_id'];
      $product_title = $row['product_title'];
      $product_description = $row['product_description'];
      $product_image1 = $row['product_image1'];
      $product_price = $row['product_price'];
      $category_id = $row['category_id'];
      $brand_id = $row['brand_id'];
      echo "<div class='col-md-4 mb-2'>
      <div class='card'>
        <img src='./admin_area/product_images/$product_image1' alt='' class='card-img-top'>
        <div class='card-body'>
          <h5 class='card-title'>$product_title</h5>
          <p class='card-text'>$product_description</p>
          <a class='btn btn-info'>Buy now</a>
        </div>
      </div>
    </div>";

    }
}
}
}

// getting brands in sidenav
function getBrands(){
  global $con;
  $sql = "SELECT * FROM brands";
  $result = mysqli_query($con,$sql);
  while($row = mysqli_fetch_assoc($result)){
    $brand_title = $row['brand_title'];
    echo "<li class='nav-item'>
    <a href='#' class='nav-link text-light'>$brand_title</a>
  </li>";

  }

}

//getting categories in sidenav

function getCategories(){
  global $con;
  $sql = "SELECT * FROM categories";
  $result = mysqli_query($con,$sql);
  while($row = mysqli_fetch_assoc($result)){
    $category_title = $row['category_title'];
    echo "<li class='nav-item'>
    <a href='#' class='nav-link text-light'>$category_title</a>
  </li>";

  }

}

// getting unique categories



// getting search products functions
function search_products(){
  $sql = "SELECT * FROM products";
  $result = mysqli_query($con,$sql);
  while($row = mysqli_fetch_assoc($result)){
    $product_id = $row['product_id'];
    $product_title = $row['product_title'];
    $product_description = $row['product_description'];
    $product_image1 = $row['product_image1'];
    $product_price = $row['product_price'];
    $category_id = $row['category_id'];
    $brand_id = $row['brand_id'];
    echo "<div class='col-md-4 mb-2'>
    <div class='card'>
      <img src='./admin_area/product_images/$product_image1' alt='' class='card-img-top'>
      <div class='card-body'>
        <h5 class='card-title'>$product_title</h5>
        <p class='card-text'>$product_description</p>
        <a class='btn btn-info'>Buy now</a>
      </div>
    </div>
  </div>";

  }

}

?>