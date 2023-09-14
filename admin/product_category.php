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
                        <button type="button" class="close" data-bs-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <form action="product_category_code.php" method="POST">
                        <div class="modal-body">
                            <input type="hidden" name="delete_cat_id" class="delete_cat_id">
                            <p>Are you sure , you want to delete this data ?</p>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                            <button type="submit" name="delete_cat" class="btn btn-danger">Yes,Delete.!</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
        <div class="col-md-8">
            <div class="bg-light text-center rounded p-4">
                <div class="d-flex align-items-center justify-content-between mb-4">
                    <h4 class="mb-0">Category</h4>
                </div>
                <div class="table-responsive">
                    <table class="table text-start align-middle table-bordered table-hover mb-0">
                        <thead>
                            <tr class="text-dark">
                                <th scope="col">S No</th>
                                <th scope="col">Category</th>
                                <th scope="col">Status</th>
                                <th scope="col" colspan="3" class="text-center">Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                            $sql = "SELECT * FROM  category_tbl ORDER BY created_at DESC";
                            $query = mysqli_query($con, $sql);
                            $count = 1;
                            if (mysqli_num_rows($query)) {
                                foreach ($query as $data) {

                            ?>
                                    <tr>
                                        <td><?= $count++ ?></td>
                                        
                                        <td><?= $data['cat_name'] ?></td>

                                        <td><?php if ($data['cat_status'] == 1) {
                                                echo "Active";
                                            } else {
                                                echo "Inactive";
                                            }
                                            ?></td>
                                        <td>
                                            <button type='button' value=<?php echo $data['cat_id']; ?> class='btn btn-square btn-outline-danger delete_cat btn-sm my-1'><i class="fa-solid fa-trash"></i></button>
                                        </td>
                                        <td>
                                            <a href="./product_category_edit.php?id=<?= $data['cat_id'] ?>" class='btn btn-square btn-outline-primary  btn-sm my-1'><i class="fa-regular fa-pen-to-square"></i></a>
                                        </td>
                                        <td>
                                            <a href="./product_category_detail.php?id=<?= $data['cat_id'] ?>" class='btn btn-square btn-outline-dark  btn-sm my-1'><i class="fa-solid fa-eye"></i></a>
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
        <div class="col-md-4">
        <div class="bg-light  rounded p-4">
            <h4>ADD Category</h4>
            <form action="product_category_code.php" method="post">
                <input type="text" name="name" class="my-2 form-control" placeholder="Category Name" required>
                <textarea name="des" id="" class="form-control my-3" cols="30" rows="5" placeholder="Category Description" required></textarea>
                <select name="status" id="" class="form-select my-2" required>
                    <option value="" >Select Status</option>
                    <option value="1">Active</option>
                    <option value="0">Inactive</option>
                </select>
                <button type="submit" name="cat_add" class="btn btn-info my-2">Add</button>
            </form>
        </div>
        </div>
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
            var user_id = $(this).val();
            // console.log(user_id);
            $('.delete_cat_id').val(user_id);
            $('#delete_cat_modal').modal('show');
        });
    });
</script>