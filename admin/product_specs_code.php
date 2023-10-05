<?php
session_start();
require('./config/dbcon.php');
if(isset($_POST['add-specs'])){
    $product_num = $_POST['product_num'];
    $name = $_POST['spec_name'];
    $value = $_POST['spec_value'];
    $status = $_POST['status'];
    $lan = $_POST['lan'];


    $check_field = "product_name_lang_1";
    $check_spec = "spec_name_lang_1";
    if ($lan == 2) {
        $check_field = "product_name_lang_2";
        $check_spec = "spec_name_lang_2";
    }
    if (empty($product_num)) {

        $check_sql = "SELECT * FROM product_specification WHERE  $check_field='$name'";
        $check_query = mysqli_query($con, $check_sql);
        $row1 = mysqli_num_rows($check_query);

        if ($row1 > 0) {
            $_SESSION['min_msg'] = "Specs  Already in Table";
            header('location:./product_specs.php');
        } else {
            $insert_sql = "INSERT INTO product_specification ($check_field,status,$check_spec)VALUES('$name','$status','$value')";
            $insert_query = mysqli_query($con, $insert_sql);
            if ($insert_query) {
                $product_num = mysqli_insert_id($con); // Get last inserted id  and put in category_number 
                $_SESSION['min_msg'] = " Specs Added";
                header('location:./product_specs.php');
            }
        }
    } else {
        $sql3 = "UPDATE product_specification SET $check_field ='$name' ,$check_spec ='$value' WHERE s_id = '$product_num'";
        $query3 = mysqli_query($con, $sql3);
        $_SESSION['min_msg'] = "Specs updated Added";
        header('location:./product_specs.php');
    }




    // $sql ="INSERT INTO product_specification (lang_id,product_name,s_name,s_value)VALUE('$lan','$product','$name','$value')";
    // $query = mysqli_query($con,$sql);
    // if($query){
    //     $_SESSION['min_msg'] = "$product Specs Added";
    //     header('location:./products.php');
    // }else{
    //     $_SESSION['min_msg'] = "Something went wrong";
    //     header('location:./product_specs.php');
    // }
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