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
    $sql = "SELECT * FROM products_tbl  LEFT JOIN category_tbl ON products_tbl.product_category = category_tbl.cat_id WHERE product_id = '$id'";
    $query = mysqli_query($con, $sql);
    $data = mysqli_fetch_assoc($query);
}
?>
<div class="container-fluid pt-4 px-4">
    <div class="bg-light rounded p-4">
        <div class="d-flex align-items-center justify-content-between mb-4">
            <h4 class="mb-0 float-start">Product Edit</h4>
            <a href="./products.php" class="btn btn-danger float-end">Back</a>
        </div>
        <div class="row">
            <div class="col-md-6">
                <p>Old Image</p>
                <img src="./products_images/<?= $data['product_image'] ?>" height="100%" alt="">
            </div>
            <div class="col-md-6 px-3">
                <form action="product_code.php" method="POST" enctype="multipart/form-data">
                    <input type="hidden" name="id" value="<?= $data['product_id'] ?>">
                    <div class="form-group my-2">
                        <label for="">Name</label>
                        <input type="text" name="name" value="<?= $data['product_name'] ?>" class="form-control " placeholder="name" required>
                    </div>
                    <div class="form-group my-2">
                        <label for="">New Image</label>
                        <input type="hidden" name="old_img" value="<?= $data['product_image'] ?>">
                        <input type="file" name="new_img" class="form-control " >
                    </div>
                    <div class="form-group my-2">
                        <p class="m-0" style="color: red; font-weight:500;"><span style="font-weight: 700;">Current Category is :</span> <?php 
                        if($data['product_category'] == $data['cat_id']){
                            echo $data['cat_name'];
                        }
                        ?></p>
                        <label for="">Choose new Category</label>

                        <select name="product_category" id="" class="form-select " required>
                            <option value="">Select Category</option>
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
                    <div class="form-group my-2">
                        <label for="">Status</label>
                        <select name="status" class="form-select mb-3" id="" required>
                            <option <?php
                                    if ($data['cat_status'] == 1) {
                                        echo "Selected";
                                    }
                                    ?> value="1">Active</option>
                            <option <?php
                                    if ($data['cat_status'] == 0) {
                                        echo "Selected";
                                    }
                                    ?> value="0">Inactive</option>
                        </select>
                    </div>
                    <button type="submit" name="update-product" class="btn btn-primary">Update</button>
                </form>
            </div>
        </div>
    </div>

</div>
<!-- Recent Sales End -->

<?php require('./includes/footer.php') ?>
<?php require('./includes/script.php') ?>