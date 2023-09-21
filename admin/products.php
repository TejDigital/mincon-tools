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

        <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog modal-xl" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">Add User</h5>
                        <button type="button" class="close btn  btn-sm-square btn-sm btn-danger" data-bs-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <form action="product_code.php" method="POST" enctype="multipart/form-data">
                        <div class="modal-body">
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="row">
                                        <div class="col-md-4">
                                            <div class="form-group my-1">
                                                <label for="">Product Main Image</label>
                                                <input type="file" name="img" class="form-control" required> 
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                            <div class="form-group my-1">
                                                <label for="">Product Image1</label>
                                                <input type="file" name="img1" class="form-control">
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                            <div class="form-group my-1">
                                                <label for="">Product Image2</label>
                                                <input type="file" name="img2" class="form-control">
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                            <div class="form-group my-1">
                                                <label for="">Product Image3</label>
                                                <input type="file" name="img3" class="form-control">
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                            <div class="form-group my-1">
                                                <label for="">Product Image4</label>
                                                <input type="file" name="img4" class="form-control">
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                            <div class="form-group my-1">
                                                <label for="">Product Image5</label>
                                                <input type="file" name="img5" class="form-control">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-12 my-5">
                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="form-group my-1">
                                                <label for="">Select Category</label>
                                                <select name="product_category" id="" class="form-select">
                                                    <?php
                                                    $sql = "SELECT * FROM category_tbl";
                                                    $query = mysqli_query($con, $sql);
                                                    if (mysqli_num_rows($query)) {
                                                        foreach ($query as $data) {
                                                    ?>
                                                            <option value="<?= $data['cat_id'] ?>"><?= $data['cat_name'] ?></option>
                                                    <?php
                                                        }
                                                    }
                                                    ?>
                                                </select>
                                            </div>
                                            <div class="form-group my-1">
                                                <label for="">Product Name</label>
                                                <input type="text" name="name" class="form-control" placeholder="name">
                                            </div>
                                            <div class="form-group my-1">
                                                <label for="">Product Status</label>
                                                <select name="status" class="form-select mb-3" id="">
                                                    <option value="1">Active</option>
                                                    <option value="0">Inactive</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group my-1">
                                                <label for="">Product Video Url</label>
                                                <input type="url" name="video_url" class="form-control" placeholder="Add Url ">
                                            </div>
                                            <div class="form-group my-1">
                                                <label for="">Product Description</label>
                                                <textarea name="product_description" cols="30" rows="7" class="form-control"></textarea>
                                            </div>
                                        </div>
                                    </div>


                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                    <button type="submit" name="add-product" class="btn btn-primary">ADD</button>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>


        <div class="modal fade" id="delete_pro_modal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">Delete Category</h5>
                        <button type="button" class="close" data-bs-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <form action="product_code.php" method="POST">
                        <div class="modal-body">
                            <input type="hidden" name="delete_pro_id" class="delete_pro_id">
                            <p>Are you sure , you want to delete this data ?</p>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                            <button type="submit" name="delete_pro" class="btn btn-danger">Yes,Delete.!</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
        <div class="col-md-12">
            <div class="bg-light text-center rounded p-4">
                <div class="d-flex align-items-center justify-content-between mb-4">
                    <h4 class="mb-0">Product</h4>
                    <button class="btn btn-info" data-bs-toggle="modal" data-bs-target="#exampleModal">Add</button>
                    <!-- <a href="">Show All</a> -->
                </div>
                <div class="table-responsive">
                    <table class="table text-start align-middle table-bordered table-hover mb-0">
                        <thead>
                            <tr class="text-dark">
                                <th scope="col">S No</th>
                                <th scope="col">Product Category</th>
                                <th scope="col">Product Name</th>
                                <th scope="col">Status</th>
                                <th scope="col" colspan="3" class="text-center">Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                            $sql = "SELECT * FROM products_tbl LEFT JOIN category_tbl ON products_tbl.product_category = category_tbl.cat_id ORDER BY product_created_at DESC";
                            $query = mysqli_query($con, $sql);
                            $count = 1;
                            if (mysqli_num_rows($query)) {
                                foreach ($query as $data) {

                            ?>
                                    <tr>
                                        <td><?= $count++ ?></td>

                                        <td><?php if ($data['product_category'] == $data['cat_id']) {
                                                echo $data['cat_name'];
                                            } ?></td>
                                        <td><?= $data['product_name'] ?></td>

                                        <td><?php if ($data['product_status'] == 1) {
                                                echo "Active";
                                            } else {
                                                echo "Inactive";
                                            }
                                            ?></td>
                                        <td>
                                            <button type='button' value=<?php echo $data['product_id']; ?> class='btn btn-square btn-outline-danger delete_pro btn-sm my-1'><i class="fa-solid fa-trash"></i></button>
                                        </td>
                                        <td>
                                            <a href="./product_edit.php?id=<?= $data['product_id'] ?>" class='btn btn-square btn-outline-primary  btn-sm my-1'><i class="fa-regular fa-pen-to-square"></i></a>
                                        </td>
                                        <td>
                                            <a href="./product_detail.php?id=<?= $data['product_id'] ?>" class='btn btn-square btn-outline-dark  btn-sm my-1'><i class="fa-solid fa-eye"></i></a>
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
    </div>

</div>
<!-- Recent Sales End -->

<?php require('./includes/footer.php') ?>
<?php require('./includes/script.php') ?>
<script>
    // -----------------------delete------------------------
    $(document).ready(function() {
        $('.delete_pro').click(function(e) {
            e.preventDefault();
            var user_id = $(this).val();
            // console.log(user_id);
            $('.delete_pro_id').val(user_id);
            $('#delete_pro_modal').modal('show');
        });
    });
</script>