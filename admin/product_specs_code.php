<?php
session_start();
require('./config/dbcon.php');
if(isset($_POST['add-specs'])){
    $name = $_POST['spec_name'];
    $value = $_POST['spec_value'];
    $product = $_POST['p_name'];

    $sql ="INSERT INTO product_specification (product_name,s_name,s_value)VALUE('$product','$name','$value')";
    $query = mysqli_query($con,$sql);
    if($query){
        $_SESSION['min_msg'] = "$product Specs Added";
        header('location:./products.php');
    }else{
        $_SESSION['min_msg'] = "Something went wrong";
        header('location:./products.php');
    }
}


// -----------------delete------------------------
if (isset($_POST['delete_spec'])) {

    $id = $_POST['delete_spec_id'];

    $query_delete = " DELETE FROM product_specification WHERE  s_id ='$id'";

    $query_delete_run = mysqli_query($con, $query_delete);

    if ($query_delete_run) {

        $_SESSION['min_msg'] = "Product Specs deleted";
        header('location:product_specs.php');
    } else {
        $_SESSION['min_msg'] = "Product Specs deletion failed";
        header('location:product_specs.php');
    }
}


// ----------------------update----------------------
if(isset($_POST['upd-specs'])){

    $id = $_POST['id'];
    $name = $_POST['spec_name'];
    $value = $_POST['spec_value'];
    $product = $_POST['p_name'];

  
    $sql = "UPDATE product_specification SET product_name ='$product', s_name='$name',s_value='$value' WHERE s_id = '$id'";
    $query = mysqli_query($con,$sql);

    if($query){
        $_SESSION['min_msg'] = "Spec Updated";
        header('location:product_specs.php');
    }else{
        $_SESSION['min_msg'] = "Something went wrong : try again";
        header('location:product_specs.php');
    }

}
?>