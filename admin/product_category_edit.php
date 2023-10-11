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
    $sql = "SELECT * FROM product_category_tbl  WHERE cat_id = '$id' ";
    $query = mysqli_query($con, $sql);
    $data = mysqli_fetch_assoc($query);
}
?>
<div class="container my-3">
    <div class="bg-light  rounded p-4">
        <div class="d-flex justify-content-between align-item-center">
        <h4 class="float_start">Update Category</h4>
            <a href="./product_category.php" class="btn btn-danger float-end">Back</a>
        </div>
        <form action="product_category_code.php" method="post" class="mt-4">
            <div class="row mt-5">
                <div class="col-md-6">
                    <h6>For English Entry</h6>
                    <input type="hidden" value="<?=$data['cat_id']?>" name="id">
                    <input type="text" name="en_name" value="<?=$data['category_name_lang_1']?>" class="my-2 form-control" placeholder="Category Name">
                    <textarea name="en_des" id="" class="form-control my-3" cols="30" rows="5" placeholder="Category Description" required><?=$data['category_description_lang_1']?></textarea>
                </div>
                <div class="col-md-6">
                    <h6>For Spanish Entry</h6>
                    <input type="text" name="span_name"  value="<?=$data['category_name_lang_2']?>"  class="my-2 form-control" placeholder="Category Name">
                    <textarea name="span_des" id="" class="form-control my-3" cols="30" rows="5" placeholder="Category Description" required><?=$data['category_description_lang_2']?></textarea>
                </div>
                <div class="col-md-12">
                <select name="status" id="" class="form-select my-2" required>
                        <option <?=$data['status'] == 1 ? "selected" : ""?> value="1">Active</option>
                        <option <?=$data['status'] == 0 ? "selected" : ""?> value="0">Inactive</option>
                    </select>
                </div>
            </div>
            <button type="submit" name="cat_upd" class="btn btn-info my-2">Add</button>
        </form>
    </div>
</div>
<!-- Recent Sales End -->

<?php require('./includes/footer.php') ?>
<?php require('./includes/script.php') ?>
