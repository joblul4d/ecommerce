<?php 
include('../includes/connection.php');
if(isset($_POST['insert_brands'])){
    $brands_name = $_POST['brands_name'];
    $sql = "INSERT INTO brands (brands_name) VALUES ('$brands_name')";
    $result = mysqli_query($con,$sql);
    if($result){
        echo "Brands inserted successfully";
    }

}



?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Select brands</title>
</head>
<body>
    <form action="" method="post">
        <select name="brands_name" id="brands_name">
            <option value="Volvo">Volvo</option>
            <option value="Mercedez">Mercedez</option>
            <option value="Ford">Ford</option>
        </select>
        <input type="submit"  name="insert_brands">
    </form>
</body>
</html>