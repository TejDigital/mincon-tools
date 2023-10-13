
<?php
include('authentication.php');
require('config/dbcon.php');

if (isset($_POST['add'])) {

    $cat1 = $_POST['en_cat_name'];
    $cat2 = $_POST['span_cat_name'];

    $sql1 = "SELECT * FROM blog_category_tbl WHERE blog_cat_name_lang_1='{$cat1}' OR blog_cat_name_lang_2 = '{$cat2}'";

    $query1 = mysqli_query($con, $sql1);

    $row1 = mysqli_num_rows($query1);

    if ($row1) {
        $_SESSION['min_msg'] = "category already exist";
        header('location:blog_category.php');
    } else {

        $cat = $_POST['cat_upl'];
        $status = $_POST['status'];

        $query = "INSERT INTO blog_category_tbl(blog_cat_name_lang_1,blog_cat_name_lang_2,blog_cat_status)VALUES('$cat1','$cat2','$status')";
        $sql = mysqli_query($con, $query);

        if ($sql) {
            $_SESSION['min_msg'] = "category added";
            header('location:blog_category.php');
        } else {
            $_SESSION['min_msg'] = "Failed";
            header('location:blog_category.php');
        }
    }
}


// -----------------delete------------------------
if (isset($_POST['delete_cat'])) {

    $id = $_POST['delete_cat_id'];

    $query_delete = " DELETE FROM blog_category_tbl WHERE  blog_cat_id ='$id'";

    $query_delete_run = mysqli_query($con, $query_delete);

    if ($query_delete_run) {

        $_SESSION['min_msg'] = "Category deleted";
        header('location:blog_category.php');
    } else {
        $_SESSION['min_msg'] = "Category deletion failed";
        header('location:blog_category.php');
    }
}


// --------------------------------------------update-----------------------

if (isset($_POST['update'])) {
    $id = $_POST['id'];
    $cat_name1 = $_POST['en_cat_name'];
    $cat_name2 = $_POST['span_cat_name'];
    $status = $_POST['status'];

    $sql = "UPDATE blog_category_tbl SET blog_cat_name_lang_1='$cat_name1', blog_cat_name_lang_2='$cat_name2' ,blog_cat_status='$status' WHERE blog_cat_id = '$id'";
    $query = mysqli_query($con, $sql);
    if ($query) {
        $_SESSION['min_msg'] = "Category Updated";
        header('location:blog_category.php');
    } else {
        $_SESSION['min_msg'] = "Category update failed";
        header('location:blog_category.php');
    }
}
