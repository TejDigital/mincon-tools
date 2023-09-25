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
    $sql1 = "SELECT * FROM product_specification WHERE s_id = '$id'";
    $query1 = mysqli_query($con, $sql1);
    $data = mysqli_fetch_assoc($query1);
}
?>
<div class="container-fluid pt-4 px-4">
    <div class="row">
        <div class="col-md-12">
            <div class="bg-light  rounded p-4">
                <form action="product_specs_code.php" method="POST" enctype="multipart/form-data">
                    <div class="modal-body">
                        <div class="row">
                            <div class="col-md-12">
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <input type="hidden" value="<?=$data['s_id']?>" name="id">
                                            <label for="">Choose Product <span style="color: red; font-weight:700">Current Product : <?= $data['product_name'] ?></span></label>
                                            <select name="p_name" id="" class="form-select" required>
                                                <option value="">Select Product</option>
                                                <?php
                                                $sql = "SELECT * FROM products_tbl";
                                                $query = mysqli_query($con, $sql);
                                                if (mysqli_num_rows($query)) {
                                                    foreach ($query as $result) {
                                                ?>
                                                        <option value="<?= $result['product_name'] ?>"><?= $result['product_name'] ?></option>
                                                <?php
                                                    }
                                                }
                                                ?>
                                            </select>
                                        </div>
                                        <div class="form-group">
                                            <label for="">Add Specification Name</label>
                                            <input type="text" name="spec_name" class="form-control" value="<?= $data['s_name'] ?>">
                                        </div>
                                        <div class="form-group my-2">
                                            <label for="">Add Specification Value</label>
                                            <input type="text" name="spec_value" class="form-control" value="<?= $data['s_value'] ?>">
                                        </div>
                                        <div class="form-group my-2">
                                            
                                            <button type="submit" name="upd-specs" class="btn btn-primary">ADD</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="modal-footer">
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