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
                    <div class="col-md-6">
                        <div class="modal-body">
                            <h5>For English Language</h5>
                            <div class="col-md-12">
                                <div class="form-group my-1">
                                    <div class="form-group my-1">
                                        <label for="" class="text-dark">Product Name</label>
                                        <input type="text" name="en_name" class="form-control" value="<?= $data['product_name_lang_1'] ?>" placeholder="product name" disabled>
                                    </div>
                                    <label for="" class="text-dark">Select Category</label>
                                    <select name="en_product_category" class="form-control" disabled>
                                        <?php
                                        $sql1 = "SELECT * FROM product_category_tbl where  status = '1'";
                                        $query1 = mysqli_query($con, $sql1);
                                        if (mysqli_num_rows($query1) > 0) {
                                            foreach ($query1 as $data1) {
                                        ?>
                                                <option <?php
                                                        if ($data1['cat_id'] == $data['product_category_lang_1']) {
                                                            echo "selected";
                                                        }
                                                        ?> value="<?= $data1['cat_id'] ?>"><?= $data1['category_name_lang_1'] ?></option>
                                        <?php
                                            }
                                        }
                                        ?>
                                    </select>
                                </div>
                                <div class="form-group my-1">
                                    <label for="" class="text-dark">Product Status</label>
                                    <select name="en_status" class="form-control" id="" disabled> 
                                        <option <?= $data['product_status_lang_1'] == 1 ? "selected" : "" ?> value="1">Active</option>
                                        <option <?= $data['product_status_lang_1'] == 0 ? "selected" : "" ?> value="0">Inactive</option>
                                    </select>
                                </div>
                                <div class="form-group my-1">
                                    <label for="" class="text-dark">Product Video Url </label>
                                    <input type="url" name="en_video_url" value="<?= $data['product_video_url_lang_1'] ?>" class="form-control" placeholder="Add Url " disabled>
                                </div>
                                <div class="form-group my-1">
                                    <label for="" class="text-dark">Product Manual</label> <br>
                                    <a href="./products_images/<?=$data['product_manual_lang_1']?>" target="_blank">Click to View</a>
                                </div>
                                <div class="form-group my-1">
                                    <label for="" class="text-dark">Product Description</label>
                                    <textarea name="en_product_description" cols="30" rows="7" class="form-control" disabled><?= $data['product_description_lang_1'] ?></textarea>
                                </div>
                                <div class="form-group my-1">
                                    <label for="">Add Product Specification</label>

                                    <table class="table table-bordered ">
                                        <tbody class="spec_table">
                                            <?php
                                            $p_id = $data['product_id'];
                                            $sql4 = "SELECT * FROM product_specification INNER JOIN specification_tbl ON product_specification.specific_id = specification_tbl.spec_id WHERE product_id = '$p_id'";
                                            $query4 = mysqli_query($con, $sql4);
                                            if (mysqli_num_rows($query4) > 0) {
                                                foreach ($query4 as $specs) {
                                            ?>
                                                    <tr class="spec_row">
                                                        <?php
                                                        if (!empty($specs['spec_value_lang_1'])) {
                                                        ?>
                                                            <td>
                                                                <?php
                                                                if ($specs['spec_id'] == $specs['specific_id']) {
                                                                    echo $specs['spec_name_lang_1'];
                                                                }
                                                                ?>
                                                            </td>
                                                        <?php
                                                        }
                                                        ?>
                                                        <?php
                                                        if (!empty($specs['spec_value_lang_1'])) {
                                                        ?>
                                                            <td>
                                                                <?php
                                                                if ($specs['spec_id'] == $specs['specific_id']) {
                                                                    echo $specs['spec_value_lang_1'];
                                                                }
                                                                ?>
                                                            </td>
                                                        <?php
                                                        }
                                                        ?>
                                                    </tr>
                                            <?php

                                                }
                                            }
                                            ?>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="modal-body">
                            <h5>For Spanish Language</h5>
                            <div class="col-md-12">
                                <div class="form-group my-1">
                                    <div class="form-group my-1">
                                        <label for="" class="text-dark">Product Name</label>
                                        <input type="text" name="span_name" class="form-control" value="<?= $data['product_name_lang_2'] ?>" placeholder="product name" disabled>
                                    </div>
                                    <label for="" class="text-dark">Select Category</label>
                                    <select name="span_product_category" class="form-control" disabled>
                                        <?php
                                        $sql1 = "SELECT * FROM product_category_tbl where status = 1";
                                        $query1 = mysqli_query($con, $sql1);
                                        if (mysqli_num_rows($query1) > 0) {
                                            foreach ($query1 as $data1) {
                                        ?>
                                                <option <?php
                                                        if ($data1['cat_id'] == $data['product_category_lang_2']) {
                                                            echo "selected";
                                                        }
                                                        ?> value="<?= $data1['cat_id'] ?>"><?= $data1['category_name_lang_2'] ?></option>
                                        <?php
                                            }
                                        }
                                        ?>
                                    </select>
                                </div>
                                <div class="form-group my-1">
                                    <label for="" class="text-dark">Product Status</label>
                                    <select name="span_status" class="form-control" id="" disabled>
                                        <option <?= $data['product_status_lang_2'] == 1 ? "selected" : "" ?> value="1">Active</option>
                                        <option <?= $data['product_status_lang_2'] == 0 ? "selected" : "" ?> value="0">Inactive</option>
                                    </select>
                                </div>
                                <div class="form-group my-1">
                                    <label for="" class="text-dark">Product Video Url </label>
                                    <input type="url" name="span_video_url" value="<?= $data['product_video_url_lang_2'] ?>" class="form-control" placeholder="Add Url" disabled>
                                </div>
                                <div class="form-group my-1">
                                    <label for="" class="text-dark">Product Manual</label> <br>
                                    <a href="./products_images/<?= $data['product_manual_lang_2'] ?>" target="_blank"> Click to view</a>
                                </div>
                                <div class="form-group my-1">
                                    <label for="" class="text-dark">Product Description</label>
                                    <textarea name="span_product_description" cols="30" rows="7" class="form-control" disabled><?= $data['product_description_lang_2'] ?></textarea>
                                </div>
                                <div class="form-group my-1">
                                    <label for="">Add Product Specification</label>
                                    <table class="table table-bordered ">
                                        <tbody class="spec_table">
                                            <?php
                                            $p_id = $data['product_id'];
                                            $sql4 = "SELECT * FROM product_specification INNER JOIN specification_tbl ON product_specification.specific_id = specification_tbl.spec_id WHERE product_id = '$p_id'";
                                            $query4 = mysqli_query($con, $sql4);
                                            if (mysqli_num_rows($query4) > 0) {
                                                foreach ($query4 as $specs) {
                                            ?>
                                                    <tr class="spec_row">
                                                        <?php
                                                        if (!empty($specs['spec_value_lang_2'])) {
                                                        ?>
                                                            <td>
                                                                <?php
                                                                if ($specs['spec_id'] == $specs['specific_id']) {
                                                                    echo $specs['spec_name_lang_2'];
                                                                }
                                                                ?>
                                                            </td>
                                                        <?php

                                                        }
                                                        ?>

                                                        <?php
                                                        if (!empty($specs['spec_value_lang_2'])) {
                                                        ?>
                                                            <td>
                                                                <?php
                                                                if ($specs['spec_id'] == $specs['specific_id']) {
                                                                    echo $specs['spec_value_lang_2'];
                                                                }
                                                                ?>
                                                            </td>
                                                        <?php
                                                        }
                                                        ?>
                                                    </tr>
                                            <?php

                                                }
                                            }
                                            ?>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-12">
                        <div class="row">
                            <?php
                            if ($img_main != "") {
                            ?>
                                <div class="col-md-4 mb-4">
                                    <p for="" class="label">Product Main Image</p>
                                    <img src="./products_images/<?= $img_main ?>" width="200px" height="230px" alt="">
                                </div>
                            <?php
                            }
                            ?>
                            <?php
                            if ($img1 != "") {
                            ?>
                                <div class="col-md-4 mb-4">
                                    <p for="" class="label">Product Image1</p>
                                    <img src="./products_images/<?= $img1 ?>" width="200px" height="230px" alt="">
                                </div>
                            <?php
                            }
                            ?>
                            <?php
                            if ($img2 != "") {
                            ?>
                                <div class="col-md-4 mb-4">
                                    <p for="" class="label">Product Image2</p>
                                    <img src="./products_images/<?= $img2 ?>" width="200px" height="230px" alt="">
                                </div>
                            <?php
                            }
                            ?>
                            <?php
                            if ($img3 != "") {
                            ?>
                                <div class="col-md-4 mb-4">
                                    <p for="" class="label">Product Image3</p>
                                    <img src="./products_images/<?= $img3 ?>" width="200px" height="230px" alt="">
                                </div>
                            <?php
                            }
                            ?>
                            <?php
                            if ($img4 != "") {
                            ?>
                                <div class="col-md-4 mb-4">
                                    <p for="" class="label">Product Image4</p>
                                    <img src="./products_images/<?= $img4 ?>" width="200px" height="230px" alt="">
                                </div>
                            <?php
                            }
                            ?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Recent Sales End -->

<?php require('./includes/footer.php') ?>
<?php require('./includes/script.php') ?>