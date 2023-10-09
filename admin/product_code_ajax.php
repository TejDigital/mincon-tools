<?php
require('./config/dbcon.php');

if (isset($_POST['category_id']) && isset($_POST['lang_id'])) {
    $categoryId = $_POST['category_id'];
    $lang_id = $_POST['lang_id'];
    if($lang_id == 1){
        $product_cat_id = 'product_category_lang_1';
    }else{
        $product_cat_id = 'product_category_lang_2';
    }
    // Query to fetch products based on the selected category
    $sql = "SELECT * FROM lang_products_tbl WHERE $product_cat_id =' $categoryId '";
    $query = mysqli_query($con, $sql);

    if ($query && mysqli_num_rows($query) > 0) {
        while ($result = mysqli_fetch_assoc($query)) {
            $productId = $result['product_id'];
            if($lang_id == 1){
                $productName = $result['product_name_lang_1'];
            }else{
                $productName = $result['product_name_lang_2'];
            }
            echo "<option value='$productId'>$productName</option>";
        }
    } else {
        echo "<option value=''>No products found</option>";
    }
}
?>