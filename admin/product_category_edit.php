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
    $sql = "SELECT * FROM category_tbl  WHERE cat_id = '$id'";
    $query = mysqli_query($con, $sql);
    $data = mysqli_fetch_assoc($query);
}
?>
<div class="container-fluid pt-4 px-4">
    <div class="row">
   
        <div class="col-md-12">
        <div class="bg-light  rounded p-4">
            <h6>For Language : <?= $data['lang_id'] == 1 ?'English' : 'Spanish' ?></h6>
            <h4>ADD Category</h4>
            <form action="product_category_code.php" method="post">
                <input type="hidden" name="id" value="<?=$data['cat_id']?>">
                <input type="text" name="name" class="my-2 form-control" value="<?=$data['cat_name']?>" placeholder="Category Name">
                <textarea name="des" id="" class="form-control my-3" cols="30" rows="10"><?=$data['cat_description']?></textarea>
                <select name="status" id="" class="form-select my-2">
                    <option
                    <?php
                    if($data['cat_status'] == 1){
                        echo "selected";
                    }
                    ?>
                     value="1">Active</option>
                    <option
                    <?php
                    if($data['cat_status'] == 2){
                        echo "selected";
                    }
                    ?>
                     value="0">Inactive</option>
                </select>
                <button type="submit" name="cat_upd" class="btn btn-info my-2">Add</button>
            </form>
        </div>
        </div>
    </div>

</div>
<!-- Recent Sales End -->

<?php require('./includes/footer.php') ?>
<?php require('./includes/script.php') ?>
