<?php
require('authentication.php');
require('./config/dbcon.php');



if (isset($_POST['cat_add'])) {

    $status = $_POST['status'];
    $en_name = $_POST['en_name'];
    // $en_status = $_POST['en_status'];
    $en_des = $_POST['en_des'];
    $en_des = str_replace("'", "\'", "$en_des");

    $span_name = $_POST['span_name'];
    // $span_status = $_POST['span_status'];
    $span_des = $_POST['span_des'];
    $span_des = str_replace("'", "\'", "$span_des");

  
            $insert_sql = "INSERT INTO product_category_tbl (category_name_lang_1,category_name_lang_2,category_description_lang_1,category_description_lang_2,status)VALUES('$en_name','$span_name','$en_des','$span_des','$status')";
            $insert_query = mysqli_query($con, $insert_sql);
            if ($insert_query) {
                $_SESSION['min_msg'] = "Category Added in Table";
                header('location:./product_category.php');
            }else{
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
    $name = $_POST['name'];
    $lan= $_POST['lang_id'];
    $status = $_POST['status'];
    $des = $_POST['des'];
    $des = str_replace("'", "\'", "$des");


    $check_field = "category_name_lang_1";
    $check_description = "category_description_lang_1";
    if ($lan == 2) {
        $check_field = "category_name_lang_2";
        $check_description = "category_description_lang_2";
    }

    $check_sql = "SELECT * FROM product_category_tbl WHERE $check_field='$name'";
    $check_query = mysqli_query($con, $check_sql);
    $row1 = mysqli_num_rows($check_query);

    // Fetch the existing category data to compare
    $existing_category_data_sql = "SELECT $check_field, status FROM product_category_tbl WHERE cat_id = '$id'";
    $existing_category_data_query = mysqli_query($con, $existing_category_data_sql);
    $existing_category_data = mysqli_fetch_assoc($existing_category_data_query);

    if ($row1 > 0 && $name !== $existing_category_data[$check_field]) {
        $_SESSION['min_msg'] = "Category name already in table";
        header('location:product_category.php');
    } else {
        // Check if the name has changed
        if ($name !== $existing_category_data[$check_field]) {
            // Name has changed, don't update status
            $sql3 = "UPDATE product_category_tbl SET $check_field ='$name', $check_description ='$des' WHERE cat_id = '$id'";
        } else {
            // Name has not changed, update status
            $sql3 = "UPDATE product_category_tbl SET $check_field ='$name', $check_description ='$des', status='$status' WHERE cat_id = '$id'";
        }

        $query3 = mysqli_query($con, $sql3);
        if ($query3) {
            $_SESSION['min_msg'] = "Category updated";
            header('location:product_category.php');
        } else {
            $_SESSION['min_msg'] = "Failed";
            header('location:product_category.php');
        }
    }
}

