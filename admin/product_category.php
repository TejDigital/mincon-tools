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
<div class="container-fluid pt-4 px-4">
    <div class="row">
        <div class="modal fade" id="delete_cat_modal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">Delete Category</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close">
                            <!-- <span aria-hidden="true">&times;</span> -->
                        </button>
                    </div>
                    <form action="product_category_code.php" method="POST">
                        <div class="modal-body">
                            <input type="hidden" name="delete_cat_id" class="delete_cat_id">
                            <input type="hidden" name="delete_lang_id" class="delete_lang_id">
                            <p>Are you sure , you want to delete this data ?</p>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                            <button type="submit" name="delete_cat" class="btn btn-danger">Delete</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>

        <div class="col-md-12 mt-4">
            <div class="bg-light text-center rounded p-4">
                <div class="d-flex align-items-center justify-content-between mb-4">
                    <h4 class="mb-0">Product Category</h4>
                    <!-- <div class="d-flex align-items-end justify-content-between"> -->
                    <div class="">
                        <a href="./add_product_category.php" class="btn btn-primary">ADD</a>
                        <!-- <div class="ms-3">
                            <label for="">Choose Language</label>
                            <select name="lan" class="form-select w-100 lanChange"  onchange="changeLang()">
                                <option value="1" <?php if ($lan == 1) {
                                                        echo "selected";
                                                    } ?>>English</option>
                                <option value="2" <?php if ($lan == 2) {
                                                        echo "selected";
                                                    } ?>>Spanish</option>
                            </select>
                        </div> -->
                    </div>

                </div>
                <div class="table-responsive">
                    <table class="table text-start align-middle table-bordered table-hover mb-0">
                        <thead>
                            <tr class="text-dark">
                                <th scope="col">S. No.</th>
                                <th scope="col">Category</th>
                                <th scope="col">Status</th>
                                <th scope="col" colspan="3" class="text-center">Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                            $sql = "SELECT * FROM product_category_tbl  ORDER BY created_at DESC";
                            $query = mysqli_query($con, $sql);
                            $count = 1;
                            if (mysqli_num_rows($query)) {
                                foreach ($query as $data) {
                            ?>
                                    <tr>
                                        <td><?= $count++ ?></td>
                                        <td><?php
                                            if ($lan == "1") {
                                                echo  $data['category_name_lang_1'];
                                            } else {
                                                echo  $data['category_name_lang_2'];
                                            }
                                            ?>
                                        <td><?php if ($data['status'] == 1) {
                                                echo "Active";
                                            } else {
                                                echo "Inactive";
                                            }
                                            ?>
                                        </td>
                                        <td>
                                            <button type='button' value='<?= $data['cat_id'] ?>,<?= $lan ?>' class='btn btn-square btn-outline-danger delete_cat btn-sm my-1'><i class="fa-solid fa-trash"></i></button>
                                        </td>
                                        <td>
                                            <a href="./product_category_edit.php?id=<?= $data['cat_id'] ?>&lang_id=<?= $lan ?>" class='btn btn-square btn-outline-primary  btn-sm my-1'><i class="fa-regular fa-pen-to-square"></i></a>
                                        </td>
                                        <td>
                                            <a href="./product_category_detail.php?id=<?= $data['cat_id'] ?>&lang_id=<?= $lan ?>" class='btn btn-square btn-outline-dark  btn-sm my-1'><i class="fa-solid fa-eye"></i></a>
                                        </td>
                                    </tr>
                            <?php
                                }
                            }
                            ?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
        <!-- <div class="col-md-4">
            <div class="bg-light  rounded p-4">
                <div class="">
                    <h4>ADD Category</h4>
                    <form action="product_category_code.php" method="post">

                      <label for="">Choose Language</label>
                        <select name="lan" id="lan" class="form-select w-50 mb-3">
                            <?php
                            $sql = "SELECT * FROM language_tbl";
                            $query = mysqli_query($con, $sql);
                            if (mysqli_num_rows($query)) {
                                foreach ($query as $result) {
                            ?>
                                    <option value="<?= $result['lan_id'] ?>"><?= $result['lang_name'] ?></option>
                            <?php
                                }
                            }
                            ?>
                        </select>
                        <div class="form-group my-1">
                            <label for="" class="text-dark">Select Category </label>
                            <span class="m-0" style="color: Green; font-size:0.7rem"><b style="font-weight:600">NOTE:</b>Choose When you want to ADD Existing category in other language</span> <br>
                            <b class="m-0" style="color: red; font-size:0.7rem"><span style="font-weight:600">NOTE:</span> When you adding new category Do not select this </b>
                            <select name="category_num" id="" class="form-select">
                                <option value="">Select Category</option>
                                <?php
                                $sql2 = "SELECT * FROM product_category_tbl";
                                $query2 = mysqli_query($con, $sql2);

                                if (mysqli_num_rows($query2)) {
                                    foreach ($query2 as $row) {
                                        $category_name_lang = $row['category_name_lang_1'];
                                        if ($row['category_name_lang_2'] != "") {
                                            $category_name_lang .= " (" . $row['category_name_lang_2'] . ")";
                                        }
                                ?>
                                        <option value="<?= $row['cat_id'] ?>">
                                            <?= $category_name_lang ?>
                                        </option>
                                <?php
                                    }
                                }
                                ?>
                            </select>
                        </div>
                        <input type="text" name="name" class="my-2 form-control" placeholder="Category Name" required>
                        <textarea name="des" id="" class="form-control my-3" cols="30" rows="5" placeholder="Category Description" required></textarea>
                        <select name="status" id="" class="form-select my-2" required>
                            <option value="">Select Status</option>
                            <option value="1">Active</option>
                            <option value="0">Inactive</option>
                        </select>

                        <button type="submit" name="cat_add" class="btn btn-info my-2">Add</button>
                    </form>
                </div>
            </div>
        </div> -->

    </div>

</div>
<!-- Recent Sales End -->

<?php require('./includes/footer.php') ?>
<?php require('./includes/script.php') ?>
<script>
    // -----------------------delete------------------------
    $(document).ready(function() {
        $('.delete_cat').click(function(e) {
            e.preventDefault();
            var values = $(this).val().split(',');
            var cart_id = values[0];
            var lang_id = values[1];
            // console.log(cart_id);
            // console.log(lang_id);
            $('.delete_cat_id').val(cart_id);
            $('.delete_lang_id').val(lang_id);
            $('#delete_cat_modal').modal('show');
        });
    });
</script>
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