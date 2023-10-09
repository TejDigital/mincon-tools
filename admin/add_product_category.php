<?php require('authentication.php'); ?>
<?php require('./config/dbcon.php'); ?>
<?php require('./includes/header.php') ?>
<?php require('./includes/top-bar.php') ?>
<?php require('./includes/sidebar.php') ?>

<div class="container my-3">
    <div class="bg-light  rounded p-4">
        <div class="d-flex justify-content-between align-item-center">
        <h4 class="float_start">ADD Category</h4>
            <a href="./product_category.php" class="btn btn-danger float-end">Back</a>
        </div>
        <form action="product_category_code.php" method="post" class="mt-4">
            <div class="row mt-5">
                <div class="col-md-6">
                    <h6>For English Entry</h6>
                    <input type="text" name="en_name" class="my-2 form-control" placeholder="Category Name" required>
                    <textarea name="en_des" id="" class="form-control my-3" cols="30" rows="5" placeholder="Category Description" required></textarea>
                </div>
                <div class="col-md-6">
                    <h6>For Spanish Entry</h6>
                    <input type="text" name="span_name" class="my-2 form-control" placeholder="Category Name" required>
                    <textarea name="span_des" id="" class="form-control my-3" cols="30" rows="5" placeholder="Category Description" required></textarea>
                </div>
                <div class="col-md-12">
                <select name="status" id="" class="form-select my-2" required>
                        <option value="">Select Status</option>
                        <option value="1">Active</option>
                        <option value="0">Inactive</option>
                    </select>
                </div>
            </div>
            <button type="submit" name="cat_add" class="btn btn-info my-2">Add</button>
        </form>
    </div>
</div>



<?php require('./includes/footer.php') ?>
<?php require('./includes/script.php') ?>