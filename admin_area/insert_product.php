<?php
include("../includes/connection.php");
if(isset($_POST['insert_product'])){
$product_title = $_POST['product_title'];
$product_description = $_POST['product_description'];
$product_keyword = $_POST['product_keyword'];
$product_category = $_POST['category_title'];
$product_brand = $_POST['brand_title'];

// accessing images
$product_image1 = $_FILES['product_image1']['name'];
$product_image2 = $_FILES['product_image2']['name'];
$product_image3 = $_FILES['product_image3']['name'];
//temp images
$tmp_image1 = $_FILES['product_image1']['tmp_name'];
$tmp_image2 = $_FILES['product_image2']['tmp_name'];
$tmp_image3 = $_FILES['product_image3']['tmp_name'];
$product_price = $_POST['product_price'];
$product_status = 'true';
//checking if empty
if($product_title == "" or $product_description == "" or $product_keyword == "" or
    $product_category == "" or $product_brand == "" or $product_image1 == "" or
    $product_image2 == "" or $product_image3 == "" or $product_price == "") {
        echo "<script>alert('Please fill all the field.')</script>";
       

    } else {
        move_uploaded_file($tmp_image1,"./product_images/$product_image1");
        move_uploaded_file($tmp_image2,"./product_images/$product_image2");
        move_uploaded_file($tmp_image3,"./product_images/$product_image3");
        $insert_query = "INSERT INTO products
        (product_title,product_description,product_keyword,category_id,brand_id,product_image1,
        product_image2,product_image3,product_price,date,status) 
        VALUES('$product_title','$product_description','$product_keyword','$product_category',
        '$product_brand','$product_image1','$product_image2','$product_image3','$product_price',NOW(),'$product_status')";
        $result_query = mysqli_query($con,$insert_query);
        if($result_query){
            echo "<script>alert('Product inserted successfully.')</script>"; 
        }
    }

}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Insert Product Admin- dashboard.I</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
<!---Font awasome --->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css" integrity="sha512-Kc323vGBEqzTmouAECnVceyQqyqdsSiqLQISBL29aUW4U/M7pSPA/gEUZQqv1cwx4OnYxTxve5UMg5GT6L4JJg==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="../style.css"/>
</head>
<body class="bg-light">
  <div class="container mt-3">
    <h1 class="text-center">Insert Product</h1>
<!--Form-->
    <form action="" method="POST" enctype="multipart/form-data">
        <!--title-->
        <div class="form-outline mb-4 w-50 m-auto">
            <label for="product_title" class="form-label">Product Title</label>
            <input type="text" name="product_title" id="product_title" class="form-control"
            placeholder="Insert Product Title" autocomplete="off">

        </div>
        <!--description-->
        <div class="form-outline mb-4 w-50 m-auto">
            <label for="product_description" class="form-label">Product Description</label>
            <input type="text" name="product_description" id="product_description" class="form-control"
            placeholder="Insert Product Description" autocomplete="off">

        </div>
        <!--product-keyword-->
        <div class="form-outline mb-4 w-50 m-auto">
            <label for="product_keyword" class="form-label">Product keyword</label>
            <input type="text" name="product_keyword" id="product_keyword" class="form-control"
            placeholder="Insert Product keyword" autocomplete="off">
        </div>
         <!--product-categories-->
         <div class="form-outline mb-4 w-50 m-auto">
            <select name="category_title" id="" class="form-select">
                <option value="ProductA"> Select Category </option>
                <?php 
                $select_query = "SELECT * FROM categories";
                $result_query = mysqli_query($con,$select_query);
                while($row = mysqli_fetch_assoc($result_query)){
                    $category_title = $row['category_title'];
                    $category_id = $row['category_id'];
                    echo "<option value='$category_id'>$category_title</option>";
                }
                
                ?>
            </select>
        </div>
          <!--product-Brands-->
          <div class="form-outline mb-4 w-50 m-auto">
            <select name="brand_title" id="" class="form-select">
                <option value="">Select Brands</option>
                <?php 
                $select_query = "SELECT * FROM brands";
                $result_query = mysqli_query($con,$select_query);
                while($row = mysqli_fetch_assoc($result_query)){
                    $brand_title = $row['brand_title'];
                    $brand_id = $row['brand_id'];
                    echo "<option value='$brand_id'>$brand_title</option>";
                }
                ?>
                
            </select>
        </div>
        <!--Product Image1-->
        <div class="form-outline mb-4 w-50 m-auto">
            <label for="product_image1" class="form-label">Product Image One</label>
            <input type="file" name="product_image1" id="product_image1" class="form-control"
            placeholder="Insert Product Image1" autocomplete="off">
        </div>
         <!--Product Image2-->
         <div class="form-outline mb-4 w-50 m-auto">
            <label for="product_image2" class="form-label">Product Image Two</label>
            <input type="file" name="product_image2" id="product_image2" class="form-control"
            placeholder="Insert Product Image2" autocomplete="off">
        </div>
              <!--Product Image3-->
        <div class="form-outline mb-4 w-50 m-auto">
            <label for="product_image3" class="form-label">Product Image Three</label>
            <input type="file" name="product_image3" id="product_image3" class="form-control"
            placeholder="Insert Product Image3" autocomplete="off">
        </div>
         <!--product-price-->
         <div class="form-outline mb-4 w-50 m-auto">
            <label for="product_price" class="form-label">Product Price</label>
            <input type="text" name="product_price" id="product_price" class="form-control"
            placeholder="Insert Product price" autocomplete="off">
        </div>
         <!--product-keyword-->
         <div class="form-outline mb-4 w-50 m-auto">
            <input type="submit" value="Insert Product" class="btn btn-info mb-3 px-3" name="insert_product">
        </div>
    </form>
  </div>  
</body>
</html>