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
    $sql = "SELECT * FROM lang_products_tbl  WHERE product_id = '$id'";
    $query = mysqli_query($con, $sql);
    $data = mysqli_fetch_assoc($query);
    $img = $data['product_image'];
    $img1 = $data['product_image1'];
    $img2 = $data['product_image2'];
    $img3 = $data['product_image3'];
    $img4 = $data['product_image4'];
    // echo $data['lang_id'];

    $sql2 = "SELECT * FROM product_specification WHERE product_id = '$id'";
    $query2 = mysqli_query($con, $sql2);
    // $data2 = mysqli_fetch_assoc($query2);
}
?>
<div class="container-fluid pt-4 px-4">
    <div class="bg-light rounded p-4">
        <div class="d-flex align-items-center justify-content-between mb-4">
            <h4 class="mb-0">Update Product</h4>
            <a href="./products.php" class="btn  bg-dark text-light">Home</a>
        </div>
        <form action="product_code.php" method="POST" enctype="multipart/form-data">
            <input type="hidden" value="<?= $data['product_id'] ?>" name="id">
            <div class="row">
                <div class="col-md-6">
                    <div class="modal-body">
                        <h5>For English Language</h5>
                        <div class="col-md-12">
                            <div class="form-group my-1">
                                <div class="form-group my-1">
                                    <label for="" class="text-dark">Product Name</label>
                                    <input type="text" name="en_name" class="form-control" value="<?= $data['product_name_lang_1'] ?>" placeholder="product name">
                                </div>
                                <label for="" class="text-dark">Select Category</label>
                                <select name="en_product_category" class="form-select">
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
                                <select name="en_status" class="form-select" id="">
                                    <option <?= $data['product_status_lang_1'] == 1 ? "selected" : "" ?> value="1">Active</option>
                                    <option <?= $data['product_status_lang_1'] == 0 ? "selected" : "" ?> value="0">Inactive</option>
                                </select>
                            </div>
                            <div class="form-group my-1">
                                <label for="" class="text-dark">Product Video Url </label> <span style="font-size:0.7rem; color:red">Current Video Name : <b><?= $data['product_video_url_lang_1'] ?></b></span>
                                <input type="hidden" name="en_video_url" value="<?= $data['product_video_url_lang_1'] ?>" class="form-control" placeholder="Add Url ">
                                <input type="url" name="new_en_video_url" class="form-control" placeholder="Add Url ">
                            </div>
                            <div class="form-group my-1">
                                <label for="" class="text-dark">Product Manual</label> <br>
                                <p class="m-0" style="font-size:0.7rem; color:red">Current manual : <b><?= $data['product_manual_lang_1'] ?></b></p>
                                <input type="file" name="en_product_manual" class="form-control" placeholder="Add Product Manual">
                            </div>
                            <div class="form-group my-1">
                                <label for="" class="text-dark">Product Description</label>
                                <textarea name="en_product_description" cols="30" rows="7" class="form-control"><?= $data['product_description_lang_1'] ?></textarea>
                            </div>
                            <div class="form-group my-1">
                                <label for="">Add Product Specification</label>

                                <?php

                                $sql3 = "SELECT * FROM  specification_tbl  WHERE  spec_status = 1 ";
                                $query3 = mysqli_query($con, $sql3);
                                if (mysqli_num_rows($query3) > 0) {
                                    foreach ($query3 as $data3) {
                                        $sql4 = "SELECT * FROM  product_specification   where specific_id = '" . $data3['spec_id'] . "' AND product_id = '$id'";
                                        $query4 = mysqli_query($con, $sql4);
                                        $spec_value_lang_1 = "";
                                        // $spec_value_lang_2 = "";
                                        if (mysqli_num_rows($query4) > 0) {
                                            $spec_value = mysqli_fetch_assoc($query4);
                                            $spec_value_lang_1 = $spec_value['spec_value_lang_1'];
                                            // $spec_value_lang_2 = $data3['spec_name_lang_2'] ;
                                        }
                                ?>
                                        <div class="specification d-flex">
                                            <input type="hidden" value="<?= $data3['spec_id'] ?>" name="spec_id[]">
                                            <input type="text" name="spec_name[]" class="form-control " value="<?= $data3['spec_name_lang_1'] ?>" placeholder="Specification Name" readonly>
                                            <input type="text" name="spec_value_lang_1[]" value="<?= $spec_value_lang_1 ?>" class="form-control " placeholder="Add Value">
                                        </div>
                                <?php
                                    }
                                }
                                ?>
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
                                    <input type="text" name="span_name" class="form-control" value="<?= $data['product_name_lang_2'] ?>" placeholder="product name">
                                </div>
                                <label for="" class="text-dark">Select Category</label>
                                <select name="span_product_category" class="form-select">
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
                                <select name="span_status" class="form-select" id="">
                                    <option <?= $data['product_status_lang_2'] == 1 ? "selected" : "" ?> value="1">Active</option>
                                    <option <?= $data['product_status_lang_2'] == 0 ? "selected" : "" ?> value="0">Inactive</option>
                                </select>
                            </div>
                            <div class="form-group my-1">
                                <label for="" class="text-dark">Product Video Url </label> <span style="font-size:0.7rem; color:red">Current Video Name : <b><?= $data['product_video_url_lang_2'] ?></b></span>

                                <input type="url" name="span_video_url" class="form-control" placeholder="Add Url ">
                            </div>
                            <div class="form-group my-1">
                                <label for="" class="text-dark">Product Manual</label> <br>
                                <p class="m-0" style="font-size:0.7rem; color:red">Current manual : <b><?= $data['product_manual_lang_2'] ?></b></p>
                                <input type="hidden" name="span_product_manual" value="<?= $data['product_manual_lang_2'] ?>" class="form-control" placeholder="Add Product Manual">
                                <input type="file" name="new_span_product_manual" class="form-control" placeholder="Add Product Manual">
                            </div>
                            <div class="form-group my-1">
                                <label for="" class="text-dark">Product Description</label>
                                <textarea name="span_product_description" cols="30" rows="7" class="form-control"><?= $data['product_description_lang_2'] ?></textarea>
                            </div>
                            <div class="form-group my-1">
                                <label for="">Add Product Specification</label>
                                <?php
                                $sql3 = "SELECT * FROM  specification_tbl  WHERE  spec_status = 1 ";


                                // echo $sql3 ;
                                $query3 = mysqli_query($con, $sql3);
                                if (mysqli_num_rows($query3) > 0) {
                                    foreach ($query3 as $data3) {

                                        $sql4 = "SELECT * FROM  product_specification   where specific_id = '" . $data3['spec_id'] . "' AND product_id = '$id'";
                                        $query4 = mysqli_query($con, $sql4);
                                        $spec_value_lang_2 = "";
                                        if (mysqli_num_rows($query4) > 0) {
                                            $spec_value = mysqli_fetch_assoc($query4);
                                            $spec_value_lang_2 = $spec_value['spec_value_lang_2'];
                                        }
                                ?>
                                        <div class="specification d-flex">
                                            <input type="hidden" value="<?= $data3['spec_id'] ?>" name="spec_id[]">
                                            <input type="text" name="spec_value_lang_2[]" value="<?= $spec_value_lang_2 ?>" class="form-control " placeholder="Add Value">
                                        </div>
                                <?php
                                    }
                                }
                                ?>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-12">
                    <div class="row">
                        <div class="col-md-4">
                            <div class="form-group my-1">
                                <img src="./products_images/<?= $data['product_image'] ?>" width="100px" height="100px" alt=""> <br>
                                <label for="" class="text-dark">Product Main Image</label>
                                <input type="hidden" name="img_main" value="<?= $data['product_image'] ?>" class="form-control">
                                <input type="file" name="new_img_main" class="form-control" placeholder="choose new image">
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="form-group my-1">
                                <img src="./products_images/<?= $data['product_image1'] ?>" width="100px" height="100px" alt=""> <br>
                                <label for="" class="text-dark">Product Image1</label>
                                <input type="hidden" name="img1" value="<?= $data['product_image1'] ?>" class="form-control">
                                <input type="file" name="new_img1" class="form-control">
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="form-group my-1">
                                <img src="./products_images/<?= $data['product_image2'] ?>" width="100px" height="100px" alt=""> <br>
                                <label for="" class="text-dark">Product Image2</label>
                                <input type="hidden" name="img2" value="<?= $data['product_image2'] ?>" class="form-control">
                                <input type="file" name="new_img2" class="form-control">
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="form-group my-1">
                                <img src="./products_images/<?= $data['product_image3'] ?>" width="100px" height="100px" alt=""> <br>
                                <label for="" class="text-dark">Product Image3</label>
                                <input type="hidden" name="img3" value="<?= $data['product_image3'] ?>" class="form-control">
                                <input type="file" name="new_img3" class="form-control">
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="form-group my-1">
                                <img src="./products_images/<?= $data['product_image4'] ?>" width="100px" height="100px" alt=""> <br>
                                <label for="" class="text-dark">Product Image4</label>
                                <input type="hidden" name="img4" value="<?= $data['product_image4'] ?>" class="form-control">
                                <input type="file" name="new_img4" class="form-control">
                            </div>
                        </div>
                        <div class="my-3">
                            <button type="submit" name="update-product" class="btn btn-primary">Save</button>
                        </div>
                    </div>
                </div>
            </div>
        </form>
    </div>
</div>


<!-- Recent Sales End -->

<?php require('./includes/footer.php') ?>
<?php require('./includes/script.php') ?>
<script>
    // JavaScript to add/remove specification fields
    document.addEventListener("DOMContentLoaded", function() {
        const container = document.getElementById("specification-container");

        container.addEventListener("click", function(e) {
            if (e.target.classList.contains("add-spec")) {
                addSpecificationField(container);
            } else if (e.target.classList.contains("remove-spec")) {
                removeSpecificationField(e.target.parentElement);
            }
        });

        function addSpecificationField(container) {
            const newSpecField = document.createElement("div");
            newSpecField.className = "specification  d-flex my-2";
            newSpecField.innerHTML = `
                    <input type="text" name="spec_name[]"  class="form-control" placeholder="Product Name" required>
                    <input type="text" name="spec_value[]"  class="form-control" placeholder="Product Value" required>
                    <button type="button" class="remove-spec btn-danger btn-sm ms-3"><i class="fa-solid fa-trash"></i></button>

                `;
            container.appendChild(newSpecField);
        }

        function removeSpecificationField(field) {
            container.removeChild(field);
        }
    });
</script>