<?php
// include('authentication.php');
// require('config/dbcon.php');

// if (isset($_POST['add'])) {

//     $name = $_POST['name'];
//     $status = $_POST['status'];
//     $lan = $_POST['lan'];
//     $category_number = $_POST['category_num'];
    
//     $check_field = "blog_cat_name_lang_1";
//     if ($lan == 2) {
//         $check_field = "blog_cat_name_lang_2";
//     }
//     if (empty($category_number)) {

//         $check_sql = "SELECT * FROM blog_category_tbl WHERE  $check_field ='$name'";
//         $check_query = mysqli_query($con, $check_sql);
//         $row1 = mysqli_num_rows($check_query);

//         if ($row1 > 0) {
//             $_SESSION['min_msg'] = "Category Already in Table";
//             header('location:blog_category.php');
//         } else {
//             $insert_sql = "INSERT INTO blog_category_tbl ($check_field,blog_cat_status)VALUES('$name','$status')";
//             $insert_query = mysqli_query($con, $insert_sql);
//             if ($insert_query) {
//                 $category_number = mysqli_insert_id($con); 
//                 $_SESSION['min_msg'] = "Category Added in Table";
//                 header('location:blog_category.php');
//             }
//         }
//     } else {
//         $sql3 = "UPDATE blog_category_tbl SET $check_field ='$name'  WHERE blog_cat_id = '$category_number'";
//         $query3 = mysqli_query($con, $sql3);
//         $_SESSION['min_msg'] = "Category updated Added";
//         header('location:blog_category.php');
//     }
// }



// // -----------------delete------------------------
// if (isset($_POST['delete_cat'])) {

//     $id = $_POST['delete_cat_id'];
//     $lang_id = $_POST['delete_lang_id'];

//     $query_delete = " DELETE FROM blog_category_tbl WHERE  blog_cat_id ='$id'";

//     $query_delete_run = mysqli_query($con, $query_delete);

//     if ($query_delete_run) {

//         $_SESSION['min_msg'] = "Category deleted";
//         header('location:blog_category.php');
//     } else {
//         $_SESSION['min_msg'] = "Category deletion failed";
//         header('location:blog_category.php');
//     }
// }


// // --------------------------------------------update-----------------------

// if (isset($_POST['update'])) {
//     $id = $_POST['id'];
//     $lan = $_POST['lang_id'];
//     $cat_name = $_POST['name'];
//     $status = $_POST['status'];

//     $check_field = "blog_cat_name_lang_1";
//     if ($lan == 2) {
//         $check_field = "blog_cat_name_lang_2";
//     }

//     $check_sql = "SELECT * FROM blog_category_tbl WHERE $check_field = '$cat_name'";
//     $check_query = mysqli_query($con, $check_sql);
//     $row1 = mysqli_num_rows($check_query);

//     if ($row1 > 0) {
//         $existing_category = mysqli_fetch_assoc($check_query);
//         if ($existing_category['blog_cat_status'] != $status) {
//             $sql3 = "UPDATE blog_category_tbl SET blog_cat_status = '$status' WHERE blog_cat_id = '$id'";
//             $query3 = mysqli_query($con, $sql3);
//             $_SESSION['min_msg'] = "Category status updated";
//         } else {
//             $_SESSION['min_msg'] = "Category already exists with the same status";
//         }
//     } else {
//         $sql3 = "UPDATE blog_category_tbl SET $check_field = '$cat_name', blog_cat_status = '$status' WHERE blog_cat_id = '$id'";
//         $query3 = mysqli_query($con, $sql3);
//         $_SESSION['min_msg'] = "Category updated";
//     }

//     header('location:blog_category.php');
// }
?>

<?php
include('authentication.php');
require('config/dbcon.php');

if (isset($_POST['add'])) {

    $cat1 = $_POST['cat_upl'];
    $lan = $_POST['lan'];
    if (!empty($cat1)) {

        $sql1 = "SELECT * FROM blog_category_tbl WHERE blog_cat_name='{$cat1}' and lang_id = '{$lan}'";

        $query1 = mysqli_query($con, $sql1);

        $row1 = mysqli_num_rows($query1);

        if ($row1) {
            $_SESSION['min_msg'] = "category already exist";
            header('location:blog_category.php');
        } else {

            $cat = $_POST['cat_upl'];
            $status = $_POST['status'];

            $query = "INSERT INTO blog_category_tbl(lang_id,blog_cat_name,blog_cat_status)VALUES('$lan','$cat','$status')";
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
    else{
        $_SESSION['min_msg'] = "input the category";
        header('location:blog_category.php');
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
    $cat_name = $_POST['cat_upl'];
    $status =$_POST['status'];

    $sql = "UPDATE blog_category_tbl SET blog_cat_name='$cat_name',blog_cat_status='$status' WHERE blog_cat_id = '$id'";
    $query = mysqli_query($con, $sql);
    if ($query) {
        $_SESSION['min_msg'] = "Category Updated";
        header('location:blog_category.php');
    } else {
        $_SESSION['min_msg'] = "Category update failed";
        header('location:blog_category.php');
    }
}