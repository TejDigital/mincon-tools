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
if (isset($_GET['id']) && isset($_GET['lang_id'])) {
    $id = $_GET['id'];
    $lang_id = $_GET['lang_id'];
    $sql = "SELECT * FROM lang_products_tbl  WHERE product_id = '$id' ";
    $query = mysqli_query($con, $sql);
    $data = mysqli_fetch_assoc($query);

    if ($lang_id == 1) {
        $product_status = $data['product_status_lang_1'];
        $product_description = $data['product_description_lang_1'];
        $product_video = $data['product_video_url_lang_1'];
        $product_manual = $data['product_manual_lang_1'];
        $product_category = $data['product_category_lang_1'];
    } else {
        $product_status = $data['product_status_lang_2'];
        $product_description = $data['product_description_lang_2'];
        $product_video = $data['product_video_url_lang_2'];
        $product_manual = $data['product_manual_lang_2'];
        $product_category = $data['product_category_lang_2'];
    }

    $sql2 = "SELECT * FROM product_category_tbl where cat_id = '$product_category'";
    $query2 = mysqli_query($con, $sql2);
    $data2 = mysqli_fetch_assoc($query2);

    if ($lang_id == 1) {
        $category_name = $data2['category_name_lang_1'];
    } else {
        $category_name = $data2['category_name_lang_2'];
    }

    $img_main = $data['product_image'];
    $img1 = $data['product_image1'];
    $img2 = $data['product_image2'];
    $img3 = $data['product_image3'];
    $img4 = $data['product_image4'];
}

?>
<div class="container-fluid pt-4 px-4">
    <div class="row">
        <div class="col-md-12">
            <div class="bg-light  rounded p-4">
                <h3 class="float-start">Product Details</h3>
                <a href="./products.php" class="btn btn-danger float-end">Back</a>
                <div class="row mt-5">
                    <div class="col-md-3">
                        <label for="" class="label">Product Name</label>
                        <p class="text-dark" style="font-size: 1rem; font-weight:700;"><?= $lang_id == 1 ? $data['product_name_lang_1'] : $data['product_name_lang_2'] ?></p>
                    </div>
                    <div class="col-md-3">
                        <label for="" class="label">Product Category</label>
                        <p class="text-dark" style="font-size: 1rem; font-weight:700;"><?=$category_name
                                                                                        ?></p>
                    </div>

                    <div class="col-md-3">
                        <label for="" class="label">Product language</label>
                        <p class="text-dark" style="font-size: 1rem; font-weight:700;">
                            <?= $lang_id == 1 ? 'English' : 'Spanish' ?></p>
                    </div>
                    <div class="col-md-3">
                        <label for="" class="label">Product status</label>
                        <p class="text-dark" style="font-size: 1rem; font-weight:700;">
                            <?php
                            if ($product_status == 1) {
                                echo "Active";
                            } else {
                                echo "Inactive";
                            } ?></p>
                    </div>
                    <?php
                    if ($product_manual != "") {
                    ?>
                        <div class="col-md-3">
                            <label for="">Product Manual</label><br>
                            <a href="./products_images/<?= $product_manual ?>" target="_blank">Click To View</a>
                        </div>
                    <?php
                    }
                    ?>


                    <div class="col-md-12 mt-4">
                        <label for="" class="label">Product Description</label>
                        <p class="text-dark" style="font-size: 1rem; font-weight:700;"><?= $product_description ?></p>
                    </div>

                    <div class="col-md-12 my-4">
                        <label for="" class="label">Product Specification</label>
                        <?php
                            $sql3 = "SELECT * FROM product_specification INNER JOIN specification_tbl ON product_specification.specific_id = specification_tbl.spec_id WHERE product_id = '$id'";
                            $query3 = mysqli_query($con, $sql3);
                            if (mysqli_num_rows($query3) > 0) {
                                foreach ($query3 as $data3) {
                            ?>
                                    <div class="specification d-flex">
                                        <input type="text" name="spec_name[]" class="form-control " value="<?= $lang_id == 1 ? $data3['spec_name_lang_1'] :  $data3['spec_name_lang_2'] ?>" placeholder="Specification Name" readonly>
                                        <input type=" text" name="spec_value[]" class="form-control " value="<?= $lang_id == 1 ? $data3['spec_value_lang_1'] : $data3['spec_value_lang_2'] ?>" placeholder="Specification Value" readonly>
                                    </div>
                            <?php
                                }
                            }
                            ?>
                        <!-- <p class="text-dark" style="font-size: 1rem; font-weight:700;"><?php ?></p> -->
                    </div>


                    <?php
                    if ($product_video != "") {
                    ?>
                        <div class="col-md-4 mb-4">
                            <label for="">Video Url</label>
                            <p class="text-dark" style="font-size: 1rem; font-weight:700;"><?= $product_video ?></p>
                        </div>
                    <?php
                    }
                    ?>
                    <?php
                    if ($img_main != "") {
                    ?>
                        <div class="col-md-4 mb-4">
                            <p for="" class="label">Product Main Image</p>
                            <img src="./products_images/<?= $img_main ?>" width="200px" alt="">
                        </div>
                    <?php
                    }
                    ?>
                    <?php
                    if ($img1 != "") {
                    ?>
                        <div class="col-md-4 mb-4">
                            <p for="" class="label">Product Image1</p>
                            <img src="./products_images/<?= $img1 ?>" width="200px" alt="">
                        </div>
                    <?php
                    }
                    ?>
                    <?php
                    if ($img2 != "") {
                    ?>
                        <div class="col-md-4 mb-4">
                            <p for="" class="label">Product Image2</p>
                            <img src="./products_images/<?= $img2 ?>" width="200px" alt="">
                        </div>
                    <?php
                    }
                    ?>
                    <?php
                    if ($img3 != "") {
                    ?>
                        <div class="col-md-4 mb-4">
                            <p for="" class="label">Product Image3</p>
                            <img src="./products_images/<?= $img3 ?>" width="200px" alt="">
                        </div>
                    <?php
                    }
                    ?>
                    <?php
                    if ($img4 != "") {
                    ?>
                        <div class="col-md-4 mb-4">
                            <p for="" class="label">Product Image4</p>
                            <img src="./products_images/<?= $img4 ?>" width="200px" alt="">
                        </div>
                    <?php
                    }
                    ?>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Recent Sales End -->

<?php require('./includes/footer.php') ?>
<?php require('./includes/script.php') ?>