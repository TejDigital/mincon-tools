<?php
require('authentication.php');
require('./config/dbcon.php');
// if (!empty($en_spec_names) && !empty($en_spec_values) && !empty($span_spec_names) && !empty($span_spec_values)) {


//     for ($i = 0; $i < count($en_spec_names); $i++) {
//         $en_spec_name = mysqli_real_escape_string($con, $en_spec_names[$i]);
//         $en_spec_value = mysqli_real_escape_string($con, $en_spec_values[$i]);
//         $span_spec_name = mysqli_real_escape_string($con, $span_spec_names[$i]);
//         $span_spec_value = mysqli_real_escape_string($con, $span_spec_values[$i]);
//         $specification_sql = "INSERT INTO product_specification (product_id,product_spec_name_lang_1,product_spec_value_lang_1,product_spec_name_lang_2,product_spec_value_lang_2)VALUES('$product_id','$en_spec_name','$en_spec_value','$span_spec_name','$span_spec_value')";
//         $specification_query = mysqli_query($con, $specification_sql);
//         if ($specification_query) {
//             $_SESSION['min_msg'] = "Product specification Added";
//         } else {
//             $_SESSION['min_msg'] = "Product specification Adding failed";
//             header('location:products.php');
//         }
//     }
// }

if (isset($_POST['add-product'])) {


    $en_status =  $_POST['en_status'];
    $en_name = $_POST['en_name'];
    $en_video_url = $_POST['en_video_url'];
    $en_category = $_POST['en_product_category'];
    $en_des = $_POST['en_product_description'];
    $en_des =  str_replace("'", "\'", "$en_des");


    $span_status =  $_POST['span_status'];
    $span_name = $_POST['span_name'];
    $span_video_url = $_POST['span_video_url'];
    $span_category = $_POST['span_product_category'];
    $span_des = $_POST['span_product_description'];
    $span_des =  str_replace("'", "\'", "$span_des");

    // $en_spec_names =  $_POST['en_spec_name'];
    // $en_spec_values =  $_POST['en_spec_value'];
    // $span_spec_names =  $_POST['span_spec_name'];
    // $span_spec_values =  $_POST['span_spec_value'];


    $en_product_manual = $_FILES['en_product_manual']['name'];
    $span_product_manual = $_FILES['span_product_manual']['name'];

    $img = $_FILES['img']['name'];
    $img1 = $_FILES['img1']['name'];
    $img2 = $_FILES['img2']['name'];
    $img3 = $_FILES['img3']['name'];
    $img4 = $_FILES['img4']['name'];

    // $spec_names =  $_POST['spec_name'];
    $spec_values_lang_1 =  $_POST['spec_value_lang_1'];
    $spec_values_lang_2 =  $_POST['spec_value_lang_2'];
    $spec_ids = $_POST['spec_id'];

    // echo "<pre>";
    // print_r($spec_ids);
    // echo "<pre>";
    // print_r($spec_values_lang_1);
    // echo "<pre>";
    // print_r($spec_values_lang_2);
    // echo "<pre>";
    // die();






    if (
        $_FILES['img']["size"] > 700000 ||
        $_FILES['img1']["size"] > 700000 ||
        $_FILES['img2']["size"] > 700000 ||
        $_FILES['img3']["size"] > 700000 ||
        $_FILES['img4']["size"] > 700000 ||
        $_FILES['span_product_manual']["size"] > 700000 ||
        $_FILES['en_product_manual']["size"] > 700000
    ) {
        $_SESSION['min_msg'] = " image size is to Big";
        header('location:products.php');
    }

    $upload_folder = 'products_images/';

    $data = false;
    if (!empty($img) || !empty($img1) || !empty($img2) || !empty($img3) || !empty($img4) || !empty($en_product_manual) || !empty($span_product_manual)) {
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
        if (!empty($en_product_manual)) {
            move_uploaded_file($_FILES['en_product_manual']['tmp_name'], $upload_folder . $en_product_manual);
        }
        if (!empty($span_product_manual)) {
            move_uploaded_file($_FILES['span_product_manual']['tmp_name'], $upload_folder . $span_product_manual);
        }

        $data = true;
    } else {
        echo "no file";
    }
    if ($data == true) {

        $sql =   "INSERT INTO lang_products_tbl(product_name_lang_1, product_name_lang_2, product_image, product_image1, product_image2, product_image3, product_image4, product_video_url_lang_1, product_video_url_lang_2, product_status_lang_1, product_status_lang_2, product_category_lang_1, product_category_lang_2, product_description_lang_1, product_description_lang_2, product_manual_lang_1, product_manual_lang_2) VALUES 

      ('$en_name','$span_name','$img','$img1','$img2','$img3','$img4','$en_video_url','$span_video_url','$en_status','$span_status','$en_category','$span_category','$en_des','$span_des','$en_product_manual','$span_product_manual')";

        $connect_db = mysqli_query($con, $sql);
        if ($connect_db) {
            $product_id = mysqli_insert_id($con);

            if (!empty($spec_values_lang_1) && !empty($spec_values_lang_2)) {
                for ($i = 0; $i < count($spec_values_lang_1); $i++) {
                    // $spec_name = mysqli_real_escape_string($con, $spec_names[$i]);
                    $spec_value_lang_1 = mysqli_real_escape_string($con, $spec_values_lang_1[$i]);
                    $spec_value_lang_2 = mysqli_real_escape_string($con, $spec_values_lang_2[$i]);
                    $spec_id = (int) $spec_ids[$i]; // Assuming specific_id is an integer

                    $specification_sql = "INSERT INTO product_specification(product_id,specific_id,spec_value_lang_1,spec_value_lang_2)VALUES('$product_id','$spec_id','$spec_value_lang_1','$spec_value_lang_2')";

                    $specification_query = mysqli_query($con, $specification_sql);
                    if ($specification_query) {
                        $_SESSION['min_msg'] = "Product specification Added";
                    } else {
                        $_SESSION['min_msg'] = "Product specification Adding failed";
                        header('location:products.php');
                    }
                }
            }
        }

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

    $query_delete = " DELETE FROM lang_products_tbl WHERE  product_id ='$id'";

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


    $en_status =  $_POST['en_status'];
    $en_name = $_POST['en_name'];
    $en_video_url = $_POST['en_video_url'];
    $en_category = $_POST['en_product_category'];
    $en_des = $_POST['en_product_description'];
    $en_des =  str_replace("'", "\'", "$en_des");


    $span_status =  $_POST['span_status'];
    $span_name = $_POST['span_name'];
    $span_video_url = $_POST['span_video_url'];
    $span_category = $_POST['span_product_category'];
    $span_des = $_POST['span_product_description'];
    $span_des =  str_replace("'", "\'", "$span_des");

    $en_product_manual = $_POST['en_product_manual'];
    $span_product_manual = $_POST['span_product_manual'];
    $img_main  = $_POST['img_main'];
    $img1 = $_POST['img1'];
    $img2 = $_POST['img2'];
    $img3 = $_POST['img3'];
    $img4 = $_POST['img4'];

    $en_new_product_manual = $_FILES['new_en_product_manual']['name'];
    $span_new_product_manual = $_FILES['new_span_product_manual']['name'];
    $new_img_main  = $_FILES['new_img_main']['name'];
    $new_img1 = $_FILES['new_img1']['name'];
    $new_img2 = $_FILES['new_img2']['name'];
    $new_img3 = $_FILES['new_img3']['name'];
    $new_img4 = $_FILES['new_img4']['name'];

    $spec_values_lang_1 =  $_POST['spec_value_lang_1'];
    $spec_values_lang_2 =  $_POST['spec_value_lang_2'];
    $spec_ids = $_POST['spec_id'];

    for ($i = 0; $i < count($spec_values_lang_1); $i++) {
        $spec_value_lang_1 = mysqli_real_escape_string($con, $spec_values_lang_1[$i]);
        $spec_value_lang_2 = mysqli_real_escape_string($con, $spec_values_lang_2[$i]);
        $spec_id = (int) $spec_ids[$i];

        $spec_check_sql = "SELECT * FROM product_specification WHERE product_id = '$id' and specific_id = '$spec_id' ";
        // echo $spec_check_sql;
        // die();
        $spec_check_query = mysqli_query($con, $spec_check_sql);

        if (mysqli_num_rows($spec_check_query) > 0) {
            $specification_sql = "UPDATE product_specification SET spec_value_lang_1 = '$spec_value_lang_1',spec_value_lang_2 ='$spec_value_lang_2' WHERE product_id = '$id' AND specific_id = '$spec_id'";

            $specification_query = mysqli_query($con, $specification_sql);
            if ($specification_query) {
                $_SESSION['min_msg'] = "Product specification Added";
            } else {
                $_SESSION['min_msg'] = "Product specification updating failed";
                header('location:products.php');
            }
        } else {
            $specification_sql1 = "INSERT INTO product_specification(product_id,specific_id,spec_value_lang_1,spec_value_lang_2)VALUES('$id','$spec_id','$spec_value_lang_1','$spec_value_lang_2')";

            $specification_query1 = mysqli_query($con, $specification_sql1);
            if ($specification_query1) {
                $_SESSION['min_msg'] = "Product specification Added";
            } else {
                $_SESSION['min_msg'] = "Product specification updating failed";
                header('location:products.php');
            }
        }
    }

    if (
        $new_img_main != '' ||
        $new_img1 != '' ||
        $new_img2 != '' ||
        $new_img3 != '' ||
        $new_img4 != '' ||
        $en_new_product_manual != '' ||
        $span_new_product_manual != ''
    ) {
        $valid = 1;
        if (
            $_FILES['new_img_main']["size"] > 700000 ||
            $_FILES['new_img1']["size"] > 700000 ||
            $_FILES['new_img2']["size"] > 700000 ||
            $_FILES['new_img3']["size"] > 700000 ||
            $_FILES['new_img4']["size"] > 700000 ||
            $_FILES['en_new_product_manual']["size"] > 1000000 ||
            $_FILES['span_new_product_manual']["size"] > 1000000
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

            if (!empty($new_img_main) || !empty($new_img1) || !empty($new_img2)  || !empty($new_img3) || !empty($new_img4) ||  !empty($en_new_product_manual) || !empty($span_new_product_manual)) {
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
                if (!empty($en_new_product_manual)) {
                    $updated_en_product_manual = $en_new_product_manual;
                    move_uploaded_file($_FILES['en_new_product_manual']['tmp_name'], $upload_folder . $en_new_product_manual);
                    unlink('products_images/' . $en_product_manual);
                } else {
                    $updated_en_product_manual = $en_product_manual;
                }
                if (!empty($span_new_product_manual)) {
                    $updated_span_product_manual = $span_new_product_manual;
                    move_uploaded_file($_FILES['span_new_product_manual']['tmp_name'], $upload_folder . $span_new_product_manual);
                    unlink('products_images/' . $span_product_manual);
                } else {
                    $updated_span_product_manual = $span_product_manual;
                }
                $data = true;
            } else {
                $_SESSION['min_msg'] = " No file selected";
                header('location:product_edit.php');
            }
            if ($data == true) {
                $sql = "UPDATE lang_products_tbl SET product_name_lang_1='$en_name',product_name_lang_2='$span_name',product_image='$updated_img_main',product_image1='$updated_img1',product_image2='$updated_img2',product_image3='$updated_img3',product_image4='$updated_img4',product_video_url_lang_1='$en_video_url',product_video_url_lang_2='$span_video_url',product_status_lang_1='$en_status',product_status_lang_2='$span_status',product_category_lang_1='$en_category',product_category_lang_2='$span_category',product_description_lang_1='$en_des',product_description_lang_2='$span_des',product_manual_lang_1='$updated_en_product_manual',product_manual_lang_2='$updated_span_product_manual' WHERE product_id = '$id'";

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
        $sql2 =  "UPDATE lang_products_tbl SET product_name_lang_1='$en_name',product_name_lang_2='$span_name',product_video_url_lang_1='$en_video_url',product_video_url_lang_2='$span_video_url',product_status_lang_1='$en_status',product_status_lang_2='$span_status',product_category_lang_1='$en_category',product_category_lang_2='$span_category',product_description_lang_1='$en_des',product_description_lang_2='$span_des' WHERE product_id = '$id'";

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
