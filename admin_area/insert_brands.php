<?php
include("../includes/connection.php");
if(isset($_POST['insert_brands'])){
    $brands_title = $_POST['brand_title'];
    if( $brands_title == ""){
        echo "<script>alert('Input field is empty')</script>";
    } else {
        $select_query = "SELECT * FROM brands WHERE brand_title = '$brands_title'";
        $result_select = mysqli_query($con,$select_query);
        $numbers = mysqli_num_rows($result_select);
        if($numbers>0){
            echo "<script>alert('Brands already exist')</script>";
        } else {
            $sql = "INSERT INTO brands(brand_title) VALUES('$brands_title')";
            $result = mysqli_query($con,$sql);
            if($result){
                echo "<script>alert('Brands inserted successfully.')</script>";
            }
        }
      
    }
}
?>




<form action="#" method="POST" class="mb-2">
    <div class="input-group w-90 mb-2">
        <span class="input-group-text bg-info"><i class="fa-solid fa-receipt"></i></span>
        <input type="text" class="form-control" name="brand_title" placeholder="Insert Brands">

    </div>
    <div class="input-group">
        <input type="submit" class="form-control" value="Insert Brands" name="insert_brands">
    </div>
</form>