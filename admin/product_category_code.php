<?php
require('authentication.php');
require('./config/dbcon.php');



if (isset($_POST['cat_add'])) {

    $status = $_POST['status'];
    $en_name = $_POST['en_name'];
    $en_des = $_POST['en_des'];
    $en_des = str_replace("'", "\'", "$en_des");

    $span_name = $_POST['span_name'];
    $span_des = $_POST['span_des'];
    $span_des = str_replace("'", "\'", "$span_des");


    $insert_sql = "INSERT INTO product_category_tbl (category_name_lang_1,category_name_lang_2,category_description_lang_1,category_description_lang_2,status)VALUES('$en_name','$span_name','$en_des','$span_des','$status')";
    $insert_query = mysqli_query($con, $insert_sql);
    if ($insert_query) {
        $_SESSION['min_msg'] = "Category Added in Table";
        header('location:./product_category.php');
    } else {
        $_SESSION['min_msg'] = "failed : Try again";
        header('location:./product_category.php');
    }
}





// -----------------delete------------------------
if (isset($_POST['delete_cat'])) {

    $cat_id = $_POST['delete_cat_id'];

    $query_delete = " DELETE FROM product_category_tbl WHERE cat_id ='$cat_id'";

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
if (isset($_POST['cat_upd'])) {
    $id = $_POST['id'];

    $status = $_POST['status'];
    $en_name = $_POST['en_name'];
    $en_des = $_POST['en_des'];
    $en_des = str_replace("'", "\'", "$en_des");

    $span_name = $_POST['span_name'];
    $span_des = $_POST['span_des'];
    $span_des = str_replace("'", "\'", "$span_des");

    $sql3 = "UPDATE product_category_tbl SET category_name_lang_1 ='$en_name', category_name_lang_2 = '$span_name',category_description_lang_1 ='$en_des', category_description_lang_2 ='$span_des', status='$status' WHERE cat_id = '$id'";

    $query3 = mysqli_query($con, $sql3);
    if ($query3) {
        $_SESSION['min_msg'] = "Category updated";
        header('location:product_category.php');
    } else {
        $_SESSION['min_msg'] = "Failed";
        header('location:product_category.php');
    }
}
