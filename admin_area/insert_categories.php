<?php
include("../includes/connection.php");
if(isset($_POST['insert_cat'])){
    $category_title = $_POST['cat_title'];
    if( $category_title == ""){
        echo "<script>alert('Input field is empty')</script>";
    } else {
        $select_query = "SELECT * FROM categories WHERE category_title = '$category_title'";
        $result_select = mysqli_query($con,$select_query);
        $numbers = mysqli_num_rows($result_select);
        if($numbers>0){
            echo "<script>alert('Category already exist')</script>";
        } else {
            $sql = "INSERT INTO categories(category_title) VALUES('$category_title')";
            $result = mysqli_query($con,$sql);
            if($result){
                echo "<script>alert('Category inserted successfully.')</script>";
            }
        }
      
    }
}
?>


<form action="#" method="POST" class="mb-2">
    <div class="input-group w-90 mb-2">
        <span class="input-group-text bg-info"><i class="fa-solid fa-receipt"></i></span>
        <input type="text" class="form-control" name="cat_title" placeholder="Insert Categories">

    </div>
    <div class="input-group">
        <input type="submit" class="form-control" value="Add Category" name="insert_cat">
    </div>
</form>