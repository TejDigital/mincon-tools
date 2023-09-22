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
<div class="container-fluid pt-4 px-4">
    <div class="row">
        <div class="col-md-12">
            <div class="bg-light rounded p-4">
                <div class="d-flex align-items-center justify-content-between mb-4">
                    <h4 class="mb-0">Product</h4>
                    <a href="./products.php" class="btn btn-light">Home</a>
                </div>
                <form action="product_code.php" method="POST" enctype="multipart/form-data">
                    <div class="modal-body">
                        <div class="row">
                            <div class="col-md-12">
                                <div class="row">
                                    <div class="col-md-4">
                                        <div class="form-group my-1">
                                            <label for="" class="text-dark">Product Main Image</label>
                                            <input type="file" name="img" class="form-control" required>
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="form-group my-1">
                                            <label for="" class="text-dark">Product Image1</label>
                                            <input type="file" name="img1" class="form-control">
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="form-group my-1">
                                            <label for="" class="text-dark">Product Image2</label>
                                            <input type="file" name="img2" class="form-control">
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="form-group my-1">
                                            <label for="" class="text-dark">Product Image3</label>
                                            <input type="file" name="img3" class="form-control">
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="form-group my-1">
                                            <label for="" class="text-dark">Product Image4</label>
                                            <input type="file" name="img4" class="form-control">
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="form-group my-1">
                                            <label for="" class="text-dark">Product Video Url</label>
                                            <input type="url" name="video_url" class="form-control" placeholder="Add Url ">
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-12 my-5">
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="row">
                                            <div class="col-md-12">
                                                <div class="form-group my-1">
                                                    <label for="" class="text-dark">Select Category</label>
                                                    <select name="product_category" id="" class="form-select">
                                                        <?php
                                                        $sql = "SELECT * FROM category_tbl";
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
                                                <div class="form-group my-1">
                                                    <label for="" class="text-dark">Product Name</label>
                                                    <input type="text" name="name" class="form-control" placeholder="product name">
                                                </div>
                                                <div class="form-group my-1">
                                                    <label for="" class="text-dark">Product Status</label>
                                                    <select name="status" class="form-select" id="">
                                                        <option value="1">Active</option>
                                                        <option value="0">Inactive</option>
                                                    </select>
                                                </div>

                                            </div>

                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group my-1">
                                            <label for="" class="text-dark">Product Description</label>
                                            <textarea name="product_description" cols="30" rows="7" class="form-control"></textarea>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <div class="row rounded mt-3" style="background-color:#d7d7d7;">
                                        <div class="col-md-6 p-2">
                                            <h5>For MG</h5>
                                            <div class="form-group my-1">
                                                <label for="" class="text-dark">Product Weight</label><span style="color: red; font-size:0.8rem"> ( Only in MG )</span>
                                                <input type="text" name="en_weight" class="form-control" placeholder="eg: 100kg">
                                            </div>
                                            <div class="form-group my-1">
                                                <label for="" class="text-dark">Product Length</label>
                                                <input type="text" name="en_length" class="form-control" placeholder="eg: 100mm">
                                            </div>
                                            <div class="form-group my-1">
                                                <label for="" class="text-dark">Product Air Consumption</label>
                                                <input type="text" name="en_air_consumption" class="form-control" placeholder="Air Consumption">
                                            </div>
                                            <div class="form-group my-1">
                                                <label for="" class="text-dark">Product Strokes x mins</label>
                                                <input type="text" name="en_strokes_x_mins" class="form-control" placeholder="Strokes x mins">
                                            </div>
                                            <div class="form-group my-1">
                                                <label for="" class="text-dark">Product Rod Size</label>
                                                <input type="text" name="en_rod_size" class="form-control" placeholder="Rod Size">
                                            </div>
                                        </div>
                                        <div class="col-md-6 p-2">
                                            <h5>For KG</h5>
                                            <div class="form-group my-1">
                                                <label for="" class="text-dark">Product Weight</label><span style="color: red; font-size:0.8rem"> ( Only in KG )</span>
                                                <input type="text" name="spn_weight" class="form-control" placeholder="eg: 100kg">
                                            </div>
                                            <div class="form-group my-1">
                                                <label for="" class="text-dark">Product Length</label>
                                                <input type="text" name="spn_length" class="form-control" placeholder="eg: 100mm">
                                            </div>
                                            <div class="form-group my-1">
                                                <label for="" class="text-dark">Product Air Consumption</label>
                                                <input type="text" name="spn_air_consumption" class="form-control" placeholder="Air Consumption">
                                            </div>
                                            <div class="form-group my-1">
                                                <label for="" class="text-dark">Product Strokes x mins</label>
                                                <input type="text" name="spn_strokes_x_mins" class="form-control" placeholder="Strokes x mins">
                                            </div>
                                            <div class="form-group my-1">
                                                <label for="" class="text-dark">Product Rod Size</label>
                                                <input type="text" name="spn_rod_size" class="form-control" placeholder="Rod Size">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="modal-footer">
                                <button type="submit" name="add-product" class="btn btn-primary">ADD Product</button>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>

    </div>
</div>
<?php require('./includes/footer.php') ?>
<?php require('./includes/script.php') ?>