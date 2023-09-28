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
                <label for="">Choose Language</label>
                <div>
                    <button class="btn btn-info btn-sm tab-link1 active-link1" onclick="on_tab_link('box1')">english</button>
                    <button class="btn btn-danger btn-sm tab-link" onclick="on_tab_link('box2')">spanish</button>
                </div>
                <div class="modal-body tab_box active-tab" id="box1">
                    <form action="product_code.php" method="POST" enctype="multipart/form-data">
                        <div class="row">
                            <div class="col-md-12">
                                <input type="hidden" value="1" name="lan">
                                <div class="row">
                                    <div class="col-md-4">
                                        <div class="form-group my-1">
                                            <label for="" class="text-dark">Product Main Image</label>
                                            <input type="file" name="img" class="form-control">
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
                                                        $sql = "SELECT * FROM category_tbl WHERE lang_id = 1";
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
                            </div>
                            <div class="modal-footer">
                                <button type="submit" name="add-product" class="btn btn-primary">ADD Product</button>
                            </div>
                        </div>
                    </form>
                </div>
                <div class="modal-body tab_box" id="box2">
                    <form action="product_code.php" method="POST" enctype="multipart/form-data">
                        <div class="row">
                            <h4>Product adding in a Spanish Language</h4>
                            <div class="col-md-12">
                                <div class="row">
                                    <input type="hidden" value="2" name="lan">
                                    <div class="col-md-4">
                                        <div class="form-group my-1">
                                            <label for="" class="text-dark">Product Main Image</label>
                                            <input type="file" name="img" class="form-control">
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
                                                        $sql = "SELECT * FROM category_tbl WHERE lang_id = 2";
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
</div>
<?php require('./includes/footer.php') ?>
<?php require('./includes/script.php') ?>
<script>
    let tab_links = document.getElementsByClassName("tab-link");
    let tab_contents = document.getElementsByClassName("tab_box");

    function on_tab_link(tab_name) {
        for (tab_link of tab_links) {
            tab_link.classList.remove("active-link");
        }
        for (tab_content of tab_contents) {
            tab_content.classList.remove("active-tab");
        }
        event.currentTarget.classList.add("active-link");
        document.getElementById(tab_name).classList.add("active-tab");

    };
</script>