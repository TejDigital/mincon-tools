<?php
require('./config/dbcon.php');

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