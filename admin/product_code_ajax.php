<?php
require('./config/dbcon.php');

if (isset($_POST['category_id']) && isset($_POST['lang_id'])) {
    $categoryId = $_POST['category_id'];
    $lang_id = $_POST['lang_id'];
    if($categoryId != 'all'){
        if ($lang_id == 1) {
            $product_cat_id = 'product_category_lang_1';
            $product_status = 'product_status_lang_1';
        } else {
            $product_status = 'product_status_lang_2';
            $product_cat_id = 'product_category_lang_2';
        }
        $sql = "SELECT * FROM lang_products_tbl WHERE $product_cat_id =' $categoryId ' AND $product_status = 1";
        $query = mysqli_query($con, $sql);
    
        if ($query && mysqli_num_rows($query) > 0) {
            while ($result = mysqli_fetch_assoc($query)) {
                $productId = $result['product_id'];
                if ($lang_id == 1) {
                    $productName = $result['product_name_lang_1'];
                } else {
                    $productName = $result['product_name_lang_2'];
                }
                echo "<option value='$productId'>$productName</option>";
            }
        } else {
            echo "<option value=''>No products found</option>";
        }
    }else{
        if ($lang_id == 1) {
            $product_status = 'product_status_lang_1';
        } else {
            $product_status = 'product_status_lang_2';
        }
        $sql = "SELECT * FROM lang_products_tbl WHERE $product_status = 1";
        $query = mysqli_query($con, $sql);
        if ($query && mysqli_num_rows($query) > 0) {
            while ($result = mysqli_fetch_assoc($query)) {
                $productId = $result['product_id'];
                if ($lang_id == 1) {
                    $productName = $result['product_name_lang_1'];
                } else {
                    $productName = $result['product_name_lang_2'];
                }
                echo "<option value='$productId'>$productName</option>";
            }
        } else {
            echo "<option value=''>No products found</option>";
        }
    }
   
} 


// Check if the category_id and lang_id are set in the POST request
// if (isset($_POST['category_id']) && isset($_POST['lang_id'])) {
//     $categoryId = $_POST['category_id'];
//     $lang_id = $_POST['lang_id'];

//     // Check if "All" is selected in the category dropdown
//     if ($categoryId === 'all') {
//         // Fetch all products for the selected language
//         $product_cat_id = ($lang_id == 1) ? 'product_category_lang_1' : 'product_category_lang_2';
//         $sql = "SELECT * FROM lang_products_tbl WHERE $product_cat_id IS NOT NULL";
//     } else {
//         // Fetch products based on the selected category
//         if ($lang_id == 1) {
//             $product_cat_id = 'product_category_lang_1';
//         } else {
//             $product_cat_id = 'product_category_lang_2';
//         }
//         $sql = "SELECT * FROM lang_products_tbl WHERE $product_cat_id = '$categoryId'";
//     }

//     $query = mysqli_query($con, $sql);

//     if ($query && mysqli_num_rows($query) > 0) {
//         while ($result = mysqli_fetch_assoc($query)) {
//             $productId = $result['product_id'];
//             if ($lang_id == 1) {
//                 $productName = $result['product_name_lang_1'];
//             } else {
//                 $productName = $result['product_name_lang_2'];
//             }
//             echo "<option value='$productId'>$productName</option>";
//         }
//     } else {
//         echo "<option value=''>No products found</option>";
//     }
// } else {
//     // Handle the case when "All" is selected or no category is selected
//     $lang_id = $_POST['lang_id'];
//     $product_cat_id = ($lang_id == 1) ? 'product_category_lang_1' : 'product_category_lang_2';
//     $sql = "SELECT * FROM lang_products_tbl WHERE $product_cat_id IS NOT NULL";
//     $query = mysqli_query($con, $sql);

//     if ($query && mysqli_num_rows($query) > 0) {
//         while ($result = mysqli_fetch_assoc($query)) {
//             $productId = $result['product_id'];
//             if ($lang_id == 1) {
//                 $productName = $result['product_name_lang_1'];
//             } else {
//                 $productName = $result['product_name_lang_2'];
//             }
//             echo "<option value='$productId'>$productName</option>";
//         }
//     } else {
//         echo "<option value=''>No products found</option>";
//     }
// }

