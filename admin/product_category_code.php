<?php
require('authentication.php');
require('./config/dbcon.php');



if(isset($_POST['cat_add'])){

    $name = $_POST['name'];
    $status = $_POST['status'];
    $des = $_POST['des'];

    print_r($_POST);

    $sql = "INSERT INTO category_tbl (cat_name,cat_status,cat_description) VALUES ('$name','$status','$des')";
    $query = mysqli_query($con,$sql);

    if($query){
        $_SESSION['min_msg'] = "New Category Added";
        header('location:./product_category_code.php');
    }else{
        $_SESSION['min_msg'] = "Something went wrong";
        header('location:./product_category_code.php');
    }

}

// -----------------delete------------------------
if (isset($_POST['delete_cat'])) {

    $id = $_POST['delete_cat_id'];

    $query_delete = " DELETE FROM category_tbl WHERE  cat_id ='$id'";

    $query_delete_run = mysqli_query($con, $query_delete);

    if ($query_delete_run) {
        $_SESSION['min_msg'] = "Category deleted";
        header('location:./product_category.php');
    } else {
        $_SESSION['min_msg'] = "Category deletion failed";
        header('location:./product_category.php');
    }
}



// ----------------------update----------------------
if(isset($_POST['cat_upd'])){

    $id = $_POST['id'];
    $name = $_POST['name'];
    $status = $_POST['status'];
    $des = $_POST['des'];

  
    $sql = "UPDATE category_tbl SET cat_name ='$name', cat_status='$status',cat_description='$des' WHERE cat_id = '$id'";
    $query = mysqli_query($con,$sql);

    if($query){
        $_SESSION['min_msg'] = "Category Updated";
        header('location:./product_category.php');
    }else{
        $_SESSION['min_msg'] = "Something went wrong : try again";
        header('location:./product_category.php');
    }

}
?>