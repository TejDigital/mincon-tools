<?php require('authentication.php'); ?>
<?php require('./config/dbcon.php'); ?>
<?php require('./includes/header.php') ?>
<?php require('./includes/top-bar.php') ?>
<?php require('./includes/sidebar.php') ?>
<!-- Recent Sales Start -->
<?php
if (isset($_SESSION['min_msg'])) {
    echo "<script>alert('" . $_SESSION['min_msg'] . "')</script>";
    unset($_SESSION['min_msg']);
}
?>
<?php
if (isset($_GET['id'])) {
    $id = $_GET['id'];
    $sql = "SELECT * FROM products_tbl LEFT JOIN category_tbl ON products_tbl.product_category = category_tbl.cat_id WHERE product_id = '$id'";
    $query = mysqli_query($con, $sql);
    $data = mysqli_fetch_assoc($query);
}

?>
<div class="container-fluid pt-4 px-4">
    <div class="row">
        <div class="col-md-12">
            <div class="bg-light  rounded p-4">
                <h3 class="float-start">Product Details</h3>
                <a href="./products.php" class="btn btn-danger float-end">Back</a>
                <div class="row mt-5">
                    <div class="col-md-4 mb-4">
                        <p for="" class="label">Product Main Image</p>
                        <img src="./products_images/<?= $data['product_image'] ?>" width="200px" alt="">
                    </div>
                    <div class="col-md-4 mb-4">
                        <p for="" class="label">Product Image1</p>
                        <img src="./products_images/<?= $data['product_image1'] ?>" width="200px" alt="">
                    </div>
                    <div class="col-md-4 mb-4">
                        <p for="" class="label">Product Image2</p>
                        <img src="./products_images/<?= $data['product_image2'] ?>" width="200px" alt="">
                    </div>
                    <div class="col-md-4 mb-4">
                        <p for="" class="label">Product Image3</p>
                        <img src="./products_images/<?= $data['product_image3'] ?>" width="200px" alt="">
                    </div>
                    <div class="col-md-4 mb-4">
                        <p for="" class="label">Product Image4</p>
                        <img src="./products_images/<?= $data['product_image4'] ?>" width="200px" alt="">
                    </div>
                    <div class="col-md-4 mb-4">
                        <p for="" class="label">Product Image5</p>
                        <img src="./products_images/<?= $data['product_image5'] ?>" width="200px" alt="">
                    </div>
                    <div class="col-md-3">
                        <label for="" class="label">Product Name</label>
                        <p class="text-dark" style="font-size: 1rem; font-weight:700;"><?= $data['product_name'] ?></p>
                    </div>
                    <div class="col-md-3">
                        <label for="" class="label">Product Category</label>
                        <p class="text-dark" style="font-size: 1rem; font-weight:700;">
                         <?php if ($data['product_category'] == $data['cat_id']) {
                        echo $data['cat_name'];
                        } ?></p>
                    </div>
                    <div class="col-md-3">
                        <label for="" class="label">Product status</label>
                        <p class="text-dark" style="font-size: 1rem; font-weight:700;">
                        <?php if ($data['product_status'] == 1) {
                             echo "Active";
                                } else {
                                echo "Inactive";
                        } ?></p>
                    </div>
                    <div class="col-md-12">
                        <label for="" class="label">Product Description</label>
                        <p class="text-dark" style="font-size: 1rem; font-weight:700;"><?=$data['product_description']?></p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Recent Sales End -->

<?php require('./includes/footer.php') ?>
<?php require('./includes/script.php') ?>
