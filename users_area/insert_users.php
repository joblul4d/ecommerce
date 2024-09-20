
<?php
include("../includes/connection.php");
if(isset($_POST['insert_users'])){
$username = $_POST['username'];
$user_email = $_POST['user_email'];
$user_password = $_POST['user_password'];
$user_address = $_POST['user_address'];
$user_mobile = $_POST['user_mobile'];

// accessing images
$user_image= $_FILES['user_image']['name'];

//temp images
$tmp_image = $_FILES['user_image']['tmp_name'];

//checking if empty
if($username == "" or $user_email == "" or $user_password == "" or $user_image == "" or
    $user_address == "" or $user_mobile == "") {
        echo "<script>alert('Please fill all the field.')</script>";
       

    } else {
        move_uploaded_file($tmp_image,"../users_area/users_images/$user_image");
      
        $insert_query = "INSERT INTO users
        (username, user_email, user_password, user_image, user_address, user_mobile) 
        VALUES('$username', '$user_email', '$user_password', '$user_image', '$user_address', '$user_mobile')";
        $result_query = mysqli_query($con,$insert_query);
        if($result_query){
            echo "<script>alert('Users inserted successfully.')</script>"; 
        }
    }

}

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Insert Users-Admin dashborad</title>
    <!----Bootstrap css------>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
<!---Font awasome --->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css" integrity="sha512-Kc323vGBEqzTmouAECnVceyQqyqdsSiqLQISBL29aUW4U/M7pSPA/gEUZQqv1cwx4OnYxTxve5UMg5GT6L4JJg==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="../style.css"/>
</head>
<body class="bg-light">
    <div class="container mt-3">
        <h1 class="text-center">New User Registration.</h1>
        <form action="" method="post" enctype="multipart/form-data">
            <!--Username-->
            <div class="form-outline mb-4 w-50 m-auto">
                <label for="username" class="form-label">Username</label>
                <input type="text" name="username" id="username" class="form-control" required 
                placeholder="Enter username">
            </div>
            <!-- User mail-->
            <div class="form-outline mb-4 w-50 m-auto">
                <label for="user_email" class="form-label">User Email</label>
                <input type="email" name="user_email" id="user_email" class="form-control" required 
                placeholder="Enter user email">
            </div>
       
            <!-- user-image-->
            <div class="form-outline mb-4 w-50 m-auto">
                <label for="user_image" class="form-label">User Image</label>
                <input type="file" name="user_image" id="user_image" class="form-control" required >
            </div>
            <!-- Password-->
            <div class="form-outline mb-4 w-50 m-auto">
                <label for="user_password" class="form-label">Password</label>
                <input type="password" name="user_password" id="user_password" class="form-control" required 
                placeholder="Enter password">
            </div>
            <!-- Confirm Password-->
            <div class="form-outline mb-4 w-50 m-auto">
                <label for="confirm_password" class="form-label"> Confirm Password</label>
                <input type="password" name="confirm_password" id="confirm_password" class="form-control" required 
                placeholder="Confirm password">
            </div>

            <!--Address-->
            <div class="form-outline mb-4 w-50 m-auto">
                <label for="user_address" class="form-label">User Address</label>
                <input type="text" name="user_address" id="user_address" class="form-control" required 
                placeholder="Enter user_address">
            </div>

             <!--Contact-->
             <div class="form-outline mb-4 w-50 m-auto">
                <label for="user_mobile" class="form-label">Contact</label>
                <input type="text" name="user_mobile" id="user_mobile" class="form-control" required 
                placeholder="Enter contact number">
            </div>

            <!-- Submit button-->
                <div class="form-outline mb-4 w-50 m-auto">
                <input type="submit" value="Registrar" class="btn btn-info mb-3 px-3" name="insert_users">
            </div>
        </form>
    </div>
    
</body>
</html>