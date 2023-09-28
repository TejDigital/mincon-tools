<?php
include('authentication.php');
require('includes/header.php');
require('includes/top-bar.php');
require('includes/sidebar.php');
require('config/dbcon.php');
?>
<div class="content-wrapper">
    <?php
    if (isset($_SESSION['min_msg'])) {
        echo "<script>alert('" . $_SESSION['min_msg'] . "')</script>";
        unset($_SESSION['min_msg']);
    }


    ?>

    <div class="card">
        <div class="card-title">
            <h3>Edit Blog</h3>
        </div>
        <div class="card-body">
            <?php
            if (isset($_GET['blog_id']) && isset($_GET['lang'])) {
                $id = $_GET['blog_id'];
                $lan = $_GET['lang'];
                $query = "SELECT * FROM blog_tbl WHERE blog_id ='$id' AND blog_lang_id = '$lan' LIMIT 1";
                $qurey_run = mysqli_query($con, $query);
                if (mysqli_num_rows($qurey_run) > 0) {
                    foreach ($qurey_run as $row) {
            ?>
                        <form action="blog_des_code.php" method="post" enctype="multipart/form-data">

                            <h5>BLog Language <span style="color: red;"> <?=$lan == 1 ? 'English' : 'Spanish'?></span></h5>

                            <div class="form-group">
                                <div class="row">
                                    <input type="hidden" name="id" value="<?php echo $row['blog_id'] ?>">
                                    <div class="col-md-12">
                                        <img src="./blog_des_files/<?php echo $row['image'] ?>" alt="" width="200px" height="150px">
                                        <br>
                                        <!-- <label for="">New Image <span style="color:red; font-size:0.5rem;" class="p-0 m-0">(Image width=[870px],Height=[355px])</span></label> -->
                                        <input type="file" class="form-control" name="new_img">
                                        <input type="hidden" class="form-control" name="img" value="<?php echo $row['image'] ?>">
                                    </div>
                                    <div class="col-md-4">
                                        <label for="">Title</label>
                                        <input type="text" class="form-control" value="<?php echo $row['title'] ?>" name="heading">
                                    </div>
                                    <div class="col-md-4">
                                        <label for="">Date</label>
                                        <input type="date" class="form-control" value="<?php echo $row['date'] ?>" name="date">
                                    </div>

                                    <div class="col-md-4">
                                        <label for="">Status</label>
                                        <select class="form-select" name="status" class="py-2">
                                            <option value="1" <?php

                                                                if ($row['blog_status'] == 1) {
                                                                    echo "Selected";
                                                                }

                                                                ?>>Active</option>
                                            <option value="0" <?php

                                                                if ($row['blog_status'] == 0) {
                                                                    echo "Selected";
                                                                }

                                                                ?>>inactive</option>
                                        </select>
                                    </div>
                                    <div class="col-md-6">
                                        <label for="">Category</label>
                                        <select class="form-select" name="category" class="py-2">

                                            <?php
                                            $sql1 = "SELECT * FROM blog_category_tbl WHERE lang_id = '$lan'";
                                            $query2 = mysqli_query($con, $sql1);
                                            if (mysqli_num_rows($query2)) {
                                                while ($result = mysqli_fetch_assoc($query2)) {
                                            ?>
                                                    <option value="<?= $result['blog_cat_id'] ?>" <?php
                                                                                                if ($row['category'] == $result['blog_cat_id']) {
                                                                                                    echo "Selected";
                                                                                                }
                                                                                                ?>>
                                                        <?= $result['blog_cat_name'] ?></option>
                                            <?php
                                                }
                                            }
                                            ?>
                                        </select>
                                    </div>
                                    <div class="col-md-6">
                                        <label for="">Author Name</label>
                                        <input type="text" name="name" class="form-control  m-0" value="<?= $row['A_name'] ?>" placeholder="Author Name">
                                    </div>
                                </div>
                                <br>
                                <div class="row">
                                    <div class="col-md-12">
                                        <label for="">Description</label>
                                        <textarea class="form-control p-0 m-0" name="sm_blog" cols="30" maxlength="300" rows="3" placeholder="Type Description"><?php echo $row['b_des_mini'] ?></textarea>
                                    </div>
                                    <div class="col-md-12">
                                        <label for="">Full Blog</label>
                                        <textarea class="form-control p-0 m-0 textarea" name="des_msg" cols="30" rows="5" placeholder="Type Description"><?php echo $row['b_des_full'] ?></textarea>
                                    </div>
                                </div>
                            </div>
                            <button type="submit" name="upd_blog" class="btn btn-primary">UPDATE</button>
                <?php
                    }
                } else {
                    echo "No Record Found";
                }
            }
                ?>
                        </form>
        </div>
    </div>
</div>

<?php require('includes/footer.php'); ?>
<?php require('includes/script.php'); ?>