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
    $sql = "SELECT * FROM lang_products_tbl LEFT JOIN category_tbl ON lang_products_tbl.product_category = category_tbl.cat_id WHERE product_id = '$id' And lang_products_tbl.lang_id ='$lang_id' AND category_tbl.lang_id = '$lang_id'";
    $query = mysqli_query($con, $sql);
    $data = mysqli_fetch_assoc($query);
    $img = $data['product_image'];
    $img1 = $data['product_image1'];
    $img2 = $data['product_image2'];
    $img3 = $data['product_image3'];
    $img4 = $data['product_image4'];
    // echo $data['lang_id'];

    $sql2 = "SELECT * FROM product_specification WHERE product_id = '$id' and lang_id = '$lang_id'";
    $query2 = mysqli_query($con, $sql2);
    // $data2 = mysqli_fetch_assoc($query2);

?>
    <div class="container-fluid pt-4 px-4">
        <div class="bg-light rounded p-4">
            <div class="d-flex align-items-center justify-content-between mb-4">
                <h4 class="mb-0 float-start">Product Edit</h4>
                <a href="./products.php" class="btn btn-danger float-end">Back</a>
            </div>
            <form action="product_code.php" method="POST" enctype="multipart/form-data">
                <div class="row">
                    <div class="col-md-12 px-3 mb-5">
                        <h6>Product Language : <?= $data['lang_id'] == 1 ? 'English' : 'Spanish' ?></h6>
                        <input type="hidden" name="id" value="<?= $data['product_id'] ?>">
                        <input type="hidden" name="lang_id" value="<?= $data['lang_id'] ?>">
                        <div class="form-group my-2">
                            <label for="">Status</label>
                            <select name="status" class="form-select mb-3">
                                <option <?php
                                        if ($data['product_status'] == 1) {
                                            echo "Selected";
                                        }
                                        ?> value="1">Active</option>
                                <option <?php
                                        if ($data['product_status'] == 0) {
                                            echo "Selected";
                                        }
                                        ?> value="0">Inactive</option>
                            </select>
                        </div>
                        <div class="form-group my-2">
                            <label for="">Name</label>
                            <input type="text" name="name" value="<?= $data['product_name'] ?>" class="form-control " placeholder="name" required>
                        </div>
                        <div class="form-group my-2">
                            <label for="">Video Url</label>
                            <input type="url" name="video_url" value="<?= $data['product_video_url'] ?>" class="form-control " placeholder="Video Url">
                        </div>
                        <label for=''>Product Description</label>
                        <textarea name='product_description' id='' cols='30' rows='5' class='form-control'><?= $data['product_description'] ?></textarea>
                        <div class="form-group my-2">
                            <p class="m-0" style="color: red; font-weight:500;"><span style="font-weight: 700;">Current Category is :</span>
                                <?php
                                if ($data['product_category'] == $data['cat_id']) {
                                    echo $data['cat_name'];
                                }
                                ?></p>
                            <label for="">Choose new Category</label>

                            <select name="product_category" id="" class="form-select " required>
                                <option value="">Select Category</option>
                                <?php
                                $sql = "SELECT * FROM category_tbl WHERE lang_id = '$lang_id'";
                                $query = mysqli_query($con, $sql);
                                if (mysqli_num_rows($query)) {
                                    foreach ($query as $data) {
                                ?>
                                        <option value="<?= $data['cat_id'] ?>"><?= $data['cat_name'] ?></option>
                                <?php
                                    }
                                }
                                ?>
                            </select>
                        </div>

                    </div>

                    <div class="col-md-12">
                        <div class="row">
                            <div class="col-md-4">
                                <p>Old Main Image</p>
                                <img src='./products_images/<?= $img ?>' height="50%" width="100%" alt="">
                                <input type="hidden" name="img_main" value='<?= $img ?>'>
                                <input type="file" name="new_img_main" class="form-control ">
                            </div>
                            <div class="col-md-4">
                                <p>Old Image1</p>
                                <img src='./products_images/<?= $img1 ?>' height="50%" width="100%" alt="">
                                <input type="hidden" name="img1" value='<?= $img1 ?>'>
                                <input type="file" name="new_img1" class="form-control ">
                            </div>
                            <div class="col-md-4">
                                <p>Old Main Image2</p>
                                <img src='./products_images/<?= $img2 ?>' height="50%" width="100%" alt="">
                                <input type="hidden" name="img2" value='<?= $img2 ?>'>
                                <input type="file" name="new_img2" class="form-control ">
                            </div>
                            <div class="col-md-4">
                                <p>Old Main Image3</p>
                                <img src='./products_images/<?= $img3 ?>' height="50%" width="100%" alt="">
                                <input type="hidden" name="img3" value='<?= $img3 ?>'>
                                <input type="file" name="new_img3" class="form-control ">
                            </div>
                            <div class="col-md-4">
                                <p>Old Main Image4</p>
                                <img src='./products_images/<?= $img4 ?>' height="50%" width="100%" alt="">
                                <input type="hidden" name="img4" value='<?= $img4 ?>'>
                                <input type="file" name="new_img4" class="form-control ">
                            </div>
                        </div>
                    </div>
                    <div class="col-md-12 mt-5">
                        <div class="row">
                            <p>Product Specification</p>
                            <?php
                            foreach ($query2 as $data2) {
                            ?>
                                <div class="specification d-flex">
                                    <div>
                                        <input type="hidden" value="<?=$data2['s_id']?>" name="s_id">
                                        <label for="">Name</label>
                                        <input type="text" name="spec_name[]" class="form-control " value="<?= $data2['spec_name'] ?>" placeholder="Product Name" required>
                                    </div>
                                    <div>
                                        <label for="">Value</label>
                                        <input type="text" name="spec_value[]" class="form-control " value="<?= $data2['s_value'] ?>" placeholder="Product Value" required>
                                    </div>
                                </div>
                            <?php
                            }
                            ?>
                        </div>
                    </div>
                    <button type="submit" name="update-product" class="btn btn-primary my-3">Update</button>
                </div>
            </form>
        </div>
    </div>
<?php
}
?>
<!-- Recent Sales End -->

<?php require('./includes/footer.php') ?>
<?php require('./includes/script.php') ?>