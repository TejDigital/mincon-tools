<?php
require('authentication.php');
require('./config/dbcon.php');

if(isset($_POST['add-product'])){

    $name = $_POST['name'];
    $img = $_FILES['img']['name'];
    $status =  $_POST['status'];
    $category = $_POST['product_category'];

    // print_r($_POST);

    if ($_FILES['img']["size"] > 700000) {
        $_SESSION['min_msg'] = " image size is to Big";
        header('location:products.php');
    }
    $img_ext = ['png', 'jpg', 'jpeg'];

    $file_ext = pathinfo($img, PATHINFO_EXTENSION);

    $img_name = $img;

    if (!in_array($file_ext, $img_ext)) {

        $_SESSION['min_msg'] = "img only in jpg ,png or jpeg ext";
        header('location:products.php');
    } else {

        $sql = "INSERT INTO products_tbl (product_image,product_name,product_category,product_status) VALUES('$img_name','$name','$category','$status')";

        $connect_db = mysqli_query($con, $sql);

        if ($connect_db) {
            move_uploaded_file($_FILES['img']['tmp_name'], 'products_images/' . $img_name);
            $_SESSION['min_msg'] = "Product  added successfully.";
            header('location:products.php');
        } else {

            $_SESSION['min_msg'] = "Something went wrong";
            header('location:products.php');
        }
    }
}


// -----------------delete------------------------
if (isset($_POST['delete_pro'])) {

    $id = $_POST['delete_pro_id'];

    $query_delete = " DELETE FROM products_tbl WHERE  product_id ='$id'";

    $query_delete_run = mysqli_query($con, $query_delete);

    if ($query_delete_run) {

        $_SESSION['min_msg'] = "Product deleted";
        header('location:product.php');
    } else {
        $_SESSION['min_msg'] = "Product deletion failed";
        header('location:product.php');
    }
}


// -----------------------update----------------------

if (isset($_POST['update-product'])) {

    $id = $_POST['id'];

    $new_img = $_FILES['new_img']['name'];
    $status = $_POST['status'];
    $name = $_POST['name'];
    $category = $_POST['product_category'];
    $old_img = $_POST['old_img'];

    if ($new_img != '') {
        if ($_FILES['img_new']["size"] > 700000) {
            $_SESSION['min_msg'] = " image size is to Big";
            header('location:product_edit.php');
        }
        $img_ext = ['png', 'jpg', 'jpeg'];

        $file_ext = pathinfo($new_img, PATHINFO_EXTENSION);


        if (!in_array($file_ext, $img_ext)) {
            $_SESSION['min_msg'] = "img only in jpg ,png or jpeg ext";
            header('location:product_edit.php');
        }

        $updated_img = $new_img;
    } else {
        $updated_img = $old_img;
    }

    $sql = "UPDATE products_tbl SET product_category='$category', product_name='$name', product_status='$status',product_image='$updated_img' WHERE product_id='$id'";

    $connect_db = mysqli_query($con, $sql);

    if ($connect_db) {
        if ($_FILES['new_img']['name'] != "") {
            move_uploaded_file($_FILES['new_img']['tmp_name'], 'products_images/' . $_FILES['new_img']['name']);
            unlink("products_images/" . $old_img);
        }

        $_SESSION['min_msg'] = "Product Updated";
        header('location:products.php');
    } else {

        $_SESSION['min_msg'] = "Something went wrong";
        header('location:products.php');
    }
};


// Connect to your database


if (isset($_POST['category_id'])) {
    $categoryId = $_POST['category_id'];

    // Query to fetch products based on the selected category
    $sql = "SELECT * FROM products_tbl WHERE product_category = $categoryId";
    $query = mysqli_query($con, $sql);

    if ($query && mysqli_num_rows($query) > 0) {
        while ($result = mysqli_fetch_assoc($query)) {
            $productId = $result['product_id'];
            $productName = $result['product_name'];
            echo "<option value='$productId'>$productName</option>";
        }
    } else {
        echo "<option value=''>No products found</option>";
    }
}
?>
