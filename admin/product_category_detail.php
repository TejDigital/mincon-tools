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
    $sql = "SELECT * FROM  category_tbl  WHERE cat_id = '$id'";
    $query = mysqli_query($con, $sql);
    $data = mysqli_fetch_assoc($query);
}

?>
<div class="container-fluid pt-4 px-4">
    <div class="row">
        <div class="col-md-12">
            <div class="bg-light  rounded p-4">
                <h3 class="float-start">Category Details</h3>
                <a href="./product_category.php" class="btn btn-danger float-end">Back</a>
                <div class="row mt-5">

                    <div class="col-md-3">
                        <label for="" class="label">category language</label>
                        <p class="text-dark" style="font-size: 1rem; font-weight:700;"><?= $data['lang_id'] == 1 ?'English' :'Spanish' ?></p>
                    </div>
                    <div class="col-md-3">
                        <label for="" class="label">category Name</label>
                        <p class="text-dark" style="font-size: 1rem; font-weight:700;"><?= $data['cat_name'] ?></p>
                    </div>
                    <div class="col-md-12">
                        <label for="" class="label">category Description</label>
                        <p class="text-dark" style="font-size: 1rem; font-weight:700;"><?= $data['cat_description'] ?></p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Recent Sales End -->

<?php require('./includes/footer.php') ?>
<?php require('./includes/script.php') ?>
