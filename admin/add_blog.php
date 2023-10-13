<?php
include('authentication.php');
require('includes/header.php');
require('includes/top-bar.php');
require('includes/sidebar.php');
require('config/dbcon.php');
?>

<div class="content-wrapper m-3 bg-light  rounded p-4">
    </select>
    <div class="card p-2 tab_box active-tab">
        <form action="blog_des_code.php" method="POST" enctype="multipart/form-data">
            <div class="row">
                <div class="col-md-4">
                    <label for="">Choose Image</label>
                    <input type="file" name="img" class="form-control" required>
                </div>

                <div class="col-md-4">
                    <label for="">Blog title</label>
                    <input type="text" class="form-control" placeholder="Give Heading" name="heading" required>
                </div>

                <div class="col-md-4">
                    <label for="">Date</label>
                    <input type="date" name="date" class="form-control p-0 m-0" required>
                </div>
                <div class="col-md-4">
                    <label for="">Category</label>
                    <select class="form-select" name="category" class="py-2" required>
                        <option value="0">Select Categoty</option>
                        <?php
                        $sql = "SELECT * FROM blog_category_tbl";
                        $query = mysqli_query($con, $sql);
                        while ($row = mysqli_fetch_assoc($query)) {
                        ?>
                            <option value="<?= $row['blog_cat_id'] ?>"><?= $row['blog_cat_name_lang_1'] ?></option>
                        <?php
                        } ?>
                    </select>
                </div>

                <div class="col-md-4">
                    <label for="">Status</label>
                    <select class="form-select" name="status" class="py-2">
                        <option value="1">Active</option>
                        <option value="0">inactive</option>
                    </select>
                </div>
                <div class="col-md-4">
                    <label for="">Author Name</label>
                    <input type="text" name="name" class="form-control  m-0" placeholder="Author Name" required>
                </div>
                <div class="col-md-12">
                    <label for="">Add blog Description</label>
                    <textarea name="sm_blog" class="form-control m-0" maxlength="300" cols="30" rows="3" placeholder="Type blog Description" required></textarea>
                </div>
                <div class="col-md-12">
                    <label for="">Full blog Details </label>
                    <textarea name="des_msg" class="form-control m-0 textarea" cols="30" rows="10"></textarea>
                </div>
            </div>
            <button type="submit" class="btn btn-info my-2 w-100 " name="add_des">Add Blog</button>
        </form>
    </div>
</div>


<?php require('includes/footer.php'); ?>
<?php require('includes/script.php') ?>
<script>
    let tab_links = document.getElementsByClassName("tab-link");
    let tab_contents = document.getElementsByClassName("tab_box");

    function on_tab_link(tab_name) {
        for (tab_link of tab_links) {
            tab_link.classList.remove("active-link");
        }
        for (tab_content of tab_contents) {
            tab_content.classList.remove("active-tab");
        }
        event.currentTarget.classList.add("active-link");
        document.getElementById(tab_name).classList.add("active-tab");

    };
</script>