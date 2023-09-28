<?php
require('authentication.php');
require('./config/dbcon.php');

if (isset($_POST['add-product'])) {

    $name = $_POST['name'];
    $product_number = $_POST['product_num'];
    $lan = $_POST['lan'];
    $video_url = $_POST['video_url'];
    $status =  $_POST['status'];
    $category = $_POST['product_category'];
    $des = $_POST['product_description'];
    $des =  str_replace("'", "\'", "$des");
    $img = $_FILES['img']['name'];
    $img1 = $_FILES['img1']['name'];
    $img2 = $_FILES['img2']['name'];
    $img3 = $_FILES['img3']['name'];
    $img4 = $_FILES['img4']['name'];


    if (
        $_FILES['img']["size"] > 700000 ||
        $_FILES['img1']["size"] > 700000 ||
        $_FILES['img2']["size"] > 700000 ||
        $_FILES['img3']["size"] > 700000 ||
        $_FILES['img4']["size"] > 700000 
    ) {
        $_SESSION['min_msg'] = " image size is to Big";
        header('location:products.php');
    }

    $upload_folder = 'products_images/';

    $data = false;
    if ( !empty($img )|| !empty($img1) || !empty($img2) || !empty($img3) || !empty($img4) ) {
        if (!empty($img)) {
            move_uploaded_file($_FILES['img']['tmp_name'], $upload_folder . $img);
        }
        if (!empty($img1)) {
            move_uploaded_file($_FILES['img1']['tmp_name'], $upload_folder . $img1);
        }
        if (!empty($img2)) {
            move_uploaded_file($_FILES['img2']['tmp_name'], $upload_folder . $img2);
        }
        if (!empty($img3)) {
            move_uploaded_file($_FILES['img3']['tmp_name'], $upload_folder . $img3);
        }
        if (!empty($img4)) {
            move_uploaded_file($_FILES['img4']['tmp_name'], $upload_folder . $img4);
        }
    
        $data = true;
    } else {
        echo "no file";
    }
    if ($data == true) {
        $sql = "INSERT INTO products_tbl(product_id,lang_id,product_image,product_image1, product_image2, product_image3, product_image4,product_name, product_category, product_status, product_description,product_video_url)
        VALUES('$product_number','$lan','$img','$img1','$img2','$img3','$img4','$name','$category','$status','$des','$video_url')";

        $connect_db = mysqli_query($con, $sql);
        if ($connect_db) {
            $_SESSION['min_msg'] = "Product Added";
            header('location:products.php');
        } else {

            $_SESSION['min_msg'] = "Something went wrong";
            header('location:products.php');
        }
    } else {
        $_SESSION['min_msg'] = "failed adding product";
        header('location:products.php');
    }
};
// -----------------delete------------------------
if (isset($_POST['delete_pro'])) {

    $id = $_POST['delete_pro_id'];

    $query_delete = " DELETE FROM products_tbl WHERE  product_id ='$id'";

    $query_delete_run = mysqli_query($con, $query_delete);

    if ($query_delete_run) {

        $_SESSION['min_msg'] = "Product deleted";
        header('location:products.php');
    } else {
        $_SESSION['min_msg'] = "Product deletion failed";
        header('location:products.php');
    }
}


// -----------------------update----------------------

if (isset($_POST['update-product'])) {

    $id = $_POST['id'];
    $status = $_POST['status'];
    $product_number = $_POST['product_num'];
    $video_url = $_POST['video_url'];
    $name = $_POST['name'];
    $category = $_POST['product_category'];
    $des = $_POST['product_description'];
    $des =  str_replace("'", "\'", "$des");

    $img_main  = $_POST['img_main'];
    $img1 = $_POST['img1'];
    $img2 = $_POST['img2'];
    $img3 = $_POST['img3'];
    $img4 = $_POST['img4'];

    $new_img_main  = $_FILES['new_img_main']['name'];
    $new_img1 = $_FILES['new_img1']['name'];
    $new_img2 = $_FILES['new_img2']['name'];
    $new_img3 = $_FILES['new_img3']['name'];
    $new_img4 = $_FILES['new_img4']['name'];



    if (
        $new_img_main != '' ||
        $new_img1 != '' ||
        $new_img2 != '' ||
        $new_img3 != '' ||
        $new_img4 != '' 
    ) {
        $valid = 1;
        if (
            $_FILES['new_img_main']["size"] > 700000 ||
            $_FILES['new_img1']["size"] > 700000 ||
            $_FILES['new_img2']["size"] > 700000 ||
            $_FILES['new_img3']["size"] > 700000 ||
            $_FILES['new_img4']["size"] > 700000 
        ) {
            $_SESSION['min_msg'] = " image size is to Big";
            header('location:product_edit.php');
        }
        if ($valid == 0) {
            $_SESSION['min_msg'] = " image size is to Big";
            header('location:product_edit.php');
        } else {
            $data = false;
            $upload_folder = 'products_images/';

            if (!empty($new_img_main) || !empty($new_img1) || !empty($new_img2)  || !empty($new_img3) || !empty($new_img4)) {
                if (!empty($new_img_main)) {
                    $updated_img_main = $new_img_main;
                    move_uploaded_file($_FILES['new_img_main']['tmp_name'], $upload_folder . $new_img_main);
                    unlink('products_images/' . $img_main);
                } else {
                    $updated_img_main = $img_main;
                }
                if (!empty($new_img1)) {
                    $updated_img1 = $new_img1;
                    move_uploaded_file($_FILES['new_img1']['tmp_name'], $upload_folder . $new_img1);
                    unlink('products_images/' . $img1);
                } else {
                    $updated_img1 = $img1;
                }
                if (!empty($new_img2)) {
                    $updated_img2 = $new_img2;
                    move_uploaded_file($_FILES['new_img2']['tmp_name'], $upload_folder . $new_img2);
                    unlink('products_images/' . $img2);
                } else {
                    $updated_img2 = $img2;
                }
                if (!empty($new_img3)) {
                    $updated_img3 = $new_img3;
                    move_uploaded_file($_FILES['new_img3']['tmp_name'], $upload_folder . $new_img3);
                    unlink('products_images/' . $img3);
                } else {
                    $updated_img3 = $img3;
                }
                if (!empty($new_img4)) {
                    $updated_img4 = $new_img4;
                    move_uploaded_file($_FILES['new_img4']['tmp_name'], $upload_folder . $new_img4);
                    unlink('products_images/' . $img4);
                } else {
                    $updated_img4 = $img4;
                }
                $data = true;
            } else {
                $_SESSION['min_msg'] = " No file selected";
                header('location:product_edit.php');
            }
            if ($data == true) {
                $sql = "UPDATE products_tbl SET product_id ='$product_number',  product_name='$name',product_description='$des',product_category='$category',product_status='$status', product_video_url='$video_url',
                product_image = '$updated_img_main', product_image1 = '$updated_img1',product_image2 = '$updated_img2',product_image3 = '$updated_img3' ,product_image4= '$updated_img4',product_image5 = '$updated_img5'
                 WHERE product_id='$id'";

                $connect_db = mysqli_query($con, $sql);

                if ($connect_db) {
                    $_SESSION['min_msg'] = "products Updated";
                    header('location:products.php');
                } else {

                    $_SESSION['min_msg'] = "Something went wrong";
                    header('location:product_edit.php');
                }
            } else {
                $_SESSION['min_msg'] = "failed";
                header('location:products.php');
            }
        }
    } else {
        $sql2 = "UPDATE products_tbl SET product_id ='$product_number', product_name='$name',product_description='$des',product_video_url='$video_url',product_category='$category',product_status='$status' WHERE product_id='$id'";

        $connect_db2 = mysqli_query($con, $sql2);

        if ($connect_db2) {
            $_SESSION['min_msg'] = "products Updated";
            header('location:products.php');
        } else {

            $_SESSION['min_msg'] = "Something went wrong";
            header('location:products.php');
        }
    }
};
