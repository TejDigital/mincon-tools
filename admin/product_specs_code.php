<?php
session_start();
require('./config/dbcon.php');
// if(isset($_POST['add-specs'])){
//     $en_name = $_POST['en_spec_name'];
//     $span_name = $_POST['span_spec_name'];
//     $status = $_POST['status'];

//     $sql ="INSERT INTO specification_tbl (spec_name_lang_1,spec_name_lang_2,spec_status)VALUE('$en_name','$span_name','$status')";
//     $query = mysqli_query($con,$sql);
//     if($query){
//         $_SESSION['min_msg'] = "Specs Added";
//         header('location:./product_specs.php');
//     }else{
//         $_SESSION['min_msg'] = "Something went wrong";
//         header('location:./product_specs.php');
//     }
// }
if(isset($_POST['add-specs'])){
    $name = $_POST['name'];
    // $status = $_POST['status'];

    $sql ="INSERT INTO spec_tbl (name)VALUE('$name')";
    $query = mysqli_query($con,$sql);
    if($query){
        $_SESSION['min_msg'] = "Specs Added";
        header('location:./product_specs.php');
    }else{
        $_SESSION['min_msg'] = "Something went wrong";
        header('location:./product_specs.php');
    }
}

// -----------------delete------------------------
if (isset($_POST['delete_spec'])) {

    $id = $_POST['delete_spec_id'];

    $query_delete = " DELETE FROM specification_tbl WHERE  spec_id ='$id'";

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
    $lang_id = $_POST['lang_id'];
    $name = $_POST['spec_name'];
    $status = $_POST['status'];

    $check_field = "spec_name_lang_1";
        if ($lang_id == 2) {
            $check_field = "spec_name_lang_2";
        }
  
    $sql = "UPDATE specification_tbl SET $check_field = '$name' ,spec_status = '$status' WHERE spec_id = '$id'";


    // echo $sql ;
    // die();


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