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
        $sql1 = "SELECT * FROM specification_tbl WHERE spec_id = '$id'";
    $query1 = mysqli_query($con, $sql1);
    $data = mysqli_fetch_assoc($query1);
}
?>
<div class="container-fluid pt-4 px-4">
    <div class="row">
        <div class="col-md-12">
            <div class="bg-light  rounded p-4">
                <form action="product_specs_code.php" method="POST" enctype="multipart/form-data">
                    <input type="hidden" name="id" value="<?=$id?>">
                    <input type="hidden" name="lang_id" value="<?=$lang_id?>">
                    <div class="row mt-4">
                        <h5>Update Specification</h5>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="">Add Specification Name</label>
                                <input type="text" name="spec_name" value="<?=$lang_id == 1 ? $data['spec_name_lang_1']  : $data['spec_name_lang_2'] ?>" class="form-control">
                            </div>

                            <div class="form-group my-2">
                                <label for="">Status</label>
                                <select name="status" id="" class="form-select my-2" required>
                                    <option value="1" <?php
                                    if($data['spec_status'] == 1){
                                        echo "Selected";
                                    }
                                    ?>>Active</option>
                                    <option value="0" 
                                    <?php
                                    if($data['spec_status'] == 0){
                                        echo "Selected";
                                    }
                                    ?>
                                    >Inactive</option>
                                </select>
                            </div>
                        </div>
                        <div class="form-group my-2">
                            <button type="submit" name="upd-specs" class="btn btn-primary">ADD</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
<?php require('./includes/footer.php') ?>
<?php require('./includes/script.php') ?>