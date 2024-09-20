<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin dashbord</title>
    

<!----Bootstrap css------>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
<!---Font awasome --->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css" integrity="sha512-Kc323vGBEqzTmouAECnVceyQqyqdsSiqLQISBL29aUW4U/M7pSPA/gEUZQqv1cwx4OnYxTxve5UMg5GT6L4JJg==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="../style.css"/>

</head>
<body>
<!--navbar starts-->
    <div class="container-fluid p-0">
        <div class="navbar navbar-expand-lg navbar-light bg-info">
            <div class="container-fluid">
                <img src="../images/logo.webp" alt="logo" class="logo">
                <nav class="navbar navbar-expand-lg">
                    <ul class="navbar-nav">
                        <li class="nav-item">
                            <a href="#" class="nav-link">Welcome guest</a>
                        </li>
                    </ul>
                </nav>


            </div>
        </div>
        <!--second-child starts-->
        <div class="bg-light">
                    <h3 class="text-center p-2">Manage Details</h3>
                </div>
<!--second child ends-->
<!----Third-child starts------>
<div class="row">
    <div class="col-md-12 bg-secondary p-1">
        <div>
            <a href=""><img src="../images/logo.webp" alt="" class="admin-image"></a>
            <p class="text-light text-center">Admin name</p>
        </div>
        <div class="button text-center">
            <button><a href="insert_product.php" class="nav-link text-light bg-info my-1">Insert Products</a></button>
            <button><a href="" class="nav-link text-light bg-info my-1">View Products</a></button>
            <button><a href="index.php?insert_categories" class="nav-link text-light bg-info my-1">Insert Categories</a></button>
            <button><a href="" class="nav-link text-light bg-info my-1">View Categories</a></button>
            <button><a href="index.php?insert_brands" class="nav-link text-light bg-info my-1">Insert Brands</a></button>
            <button><a href="" class="nav-link text-light bg-info my-1">View Brands</a></button>
            <button><a href="" class="nav-link text-light bg-info my-1">All Orders</a></button>
            <button><a href="" class="nav-link text-light bg-info my-1">All Payments</a></button>
            <button><a href="" class="nav-link text-light bg-info my-1">List Users</a></button>
            <button><a href="" class="nav-link text-light bg-info my-1">Log out</a></button>
        </div>
    </div>
</div>
<!----Third-child ends------>
</div>
<!--navbar ends-->
<!---Fourth child---->
<div class="container">
<?php 
if(isset($_GET['insert_categories'])){
    include('insert_categories.php');
}

?>
</div>
<!---Fift child---->
<div class="container">
<?php 
if(isset($_GET['insert_brands'])){
    include('insert_brands.php');
}

?>
</div>



<!----Bootstrap js------>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>

</body>
</html>