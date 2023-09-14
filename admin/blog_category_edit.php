<?php
include('authentication.php');
require('includes/header.php');
require('includes/top-bar.php');
require('includes/sidebar.php');
require('config/dbcon.php');
?>
<div class="content-wrapper m-3 bg-light  rounded p-4">
    <div class="container">
        <div class="row">
            <form action="blog_category_code.php" method="post">
                <?php
                if (isset($_SESSION['min_msg'])) {
                    echo "<script>alert('".$_SESSION['min_msg'] ."')</script>";
                    unset($_SESSION['min_msg']);
                }
                ?>
                <?php
                if (isset($_GET['id'])) {
                    $id = $_GET['id'];
                    $sql = "SELECT * FROM blog_category_tbl WHERE blog_cat_id='$id' LIMIT 1";
                    $query = mysqli_query($con, $sql);
                    if (mysqli_num_rows($query) > 0) {
                        foreach ($query as $row) {
                ?>
                            <div class="col-md-6">
                                <label for="">Add Category Name</label>
                                <input type="hidden" name="id" value="<?= $row['blog_cat_id'] ?>">

                                <input class="form-control  m-0" type="text" value="<?= $row['blog_cat_name'] ?>" name="cat_upl" placeholder="enter category">
                                    <label for="">Status</label>
                                    <select class="form-select" class="py-2 w-100" value="<?php echo $row['blog_cat_status'] ?>" name="status">
                                        <option value="1" <?php

                                                            if ($row['blog_cat_status'] == 1) {
                                                                echo "Selected";
                                                            }

                                                            ?>>Active</option>
                                        <option value="0" <?php

                                                            if ($row['blog_cat_status'] == 0) {
                                                                echo "Selected";
                                                            }

                                                            ?>>inactive</option>
                                    </select>
                                <button type="submit" class="btn btn-info my-2 w-100 " name="update">Update</button>
                            </div>
                <?php
                        }
                    }
                }
                ?>
            </form>
        </div>
    </div>
</div>
<?php require('includes/script.php'); ?>
<?php require('includes/footer.php'); ?>