<?php
include("../includes/connection.php");
if(isset($_POST['add_image'])){
    $image1 = $_FILES['image1']['name'];
    $temp_image = $_FILES['image1']['tmp_name'];
    $place = $_POST['place'];
    if($image1 == "" or $place == ""){
        echo "<script>alert('Fill all fields please.')</script>";
        exit();
    } else {
        move_uploaded_file($image1,"./product_images/$temp_image");
        $sql = "INSERT INTO image(image1,place) VALUES('$image1','$place')";
        $result = mysqli_query($con,$sql);
        if($result){
            echo "Data inserted successfully";
        }
    }
}

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Insert image with php</title>
</head>
<body>
    <form action="" method="post" enctype="multipart/form-data">
        <input type="file" name="image1" id="image1">
        <input type="text" name="place" id="place">
        <input type="submit" value="save" name="add_image">
    </form>
</body>
</html>