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
if (isset($_GET['id']) ) {
    $id = $_GET['id'];
        $sql1 = "SELECT * FROM specification_tbl WHERE spec_id = '$id'";
    $query1 = mysqli_query($con, $sql1);
    $data = mysqli_fetch_assoc($query1);
}
?>
<div class="container-fluid pt-4 px-4">
    <div class="row">
    <div class="col-md-12 mb-3">
            <div class=" bg-light rounded p-3">
                <h4>Update Specification</h4>
                <form action="product_specs_code.php" method="POST" enctype="multipart/form-data">
                    <input type="hidden" value="<?=$data['spec_id']?>" name="id">
                    <div class="row mt-4">
                        <div class="col-md-6">
                            <h5>For English</h5>
                            <div class="form-group">
                                <label for="">Add Specification Name</label>
                                <input type="text" name="en_spec_name" value="<?=$data['spec_name_lang_1']?>" class="form-control" required>
                            </div>
                        </div>

                        <div class="col-md-6">
                            <h5>For Spanish</h5>
                            <div class="form-group">
                                <label for="">Add Specification Name</label>
                                <input type="text" name="span_spec_name" value="<?=$data['spec_name_lang_2']?>" class="form-control" required> 
                            </div>
                        </div>
                        
                        <div class="form-group my-2">
                            <label for="">Status</label>
                            <select name="status" id="" class="form-select my-2" required>
                                <option <?=$data['spec_status'] == 1 ? "selected" : ""?> value="1">Active</option>
                                <option <?=$data['spec_status'] == 0 ? "selected" : ""?> value="0">Inactive</option>
                            </select>
                        </div>
                        <div class="form-group my-2">
                            <button type="submit" name="upd-specs" class="btn btn-primary">Update</button>
                        </div>
                    </div>

                </form>
            </div>
        </div>
    </div>
</div>
<?php require('./includes/footer.php') ?>
<?php require('./includes/script.php') ?>