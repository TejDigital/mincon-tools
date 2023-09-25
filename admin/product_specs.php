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
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog " role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">ADD Specification Of Product </h5>
                        <button type="button" class="close btn  btn-sm-square btn-sm btn-danger" data-bs-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <form action="product_specs_code.php" method="POST" enctype="multipart/form-data">
                        <div class="modal-body">
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="row">
                                        <div class="col-md-12">
                                            <div class="form-group">
                                                <label for="">Choose Product</label>
                                                <select name="p_name" id="" class="form-select">
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
                                                <input type="text" name="spec_name" class="form-control">
                                            </div>
                                            <div class="form-group my-2">
                                                <label for="">Add Specification Value</label>
                                                <input type="text" name="spec_value" class="form-control">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                    <button type="submit" name="add-specs" class="btn btn-primary">ADD</button>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
        <div class="modal fade" id="delete_spec_modal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">Delete Product Specification</h5>
                        <button type="button" class="close" data-bs-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <form action="product_specs_code.php" method="POST">
                        <div class="modal-body">
                            <input type="hidden" name="delete_spec_id" class="delete_spec_id">
                            <p>Are you sure , you want to delete this data ?</p>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                            <button type="submit" name="delete_spec" class="btn btn-danger">Yes,Delete.!</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    <div class="row">
    <div class="col-md-12">
            <div class="bg-light text-center rounded p-4">
                <div class="d-flex align-items-center justify-content-between mb-4">
                    <h4 class="mb-0">Product Specifications</h4>
                    <div>
                        <a href="#!" data-bs-toggle="modal" data-bs-target="#exampleModal" class="btn btn-primary">Add Product Specification </a>
                        <a href="./products.php" class="btn btn-danger">Back</a>
                    </div>
                    <!-- <a href="">Show All</a> -->
                </div>
                <div class="table-responsive">
                    <table class="table text-start align-middle table-bordered table-hover mb-0">
                        <thead>
                            <tr class="text-dark">
                                <th scope="col">S No</th>
                                <th scope="col">Product Name</th>
                                <th scope="col">Product Spec Name</th>
                                <th scope="col">Product Spec Value</th>
                                <th scope="col" colspan="2" class="text-center">Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                            $sql = "SELECT * FROM product_specification ";
                            $query = mysqli_query($con, $sql);
                            $count = 1;
                            if (mysqli_num_rows($query)) {
                                foreach ($query as $data) {

                            ?>
                                    <tr>
                                        <td><?= $count++ ?></td>
                                        <td><?= $data['product_name'] ?></td>
                                        <td><?= $data['s_name'] ?></td>
                                        <td><?= $data['s_value'] ?></td>
                                        <td>
                                            <button type='button' value=<?php echo $data['s_id']; ?> class='btn btn-square btn-outline-danger delete_spec btn-sm my-1'><i class="fa-solid fa-trash"></i></button>
                                        </td>
                                        <td>
                                            <a href="./product_spec_edit.php?id=<?= $data['s_id'] ?>" class='btn btn-square btn-outline-primary  btn-sm my-1'><i class="fa-regular fa-pen-to-square"></i></a>
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
<?php require('./includes/footer.php') ?>
<?php require('./includes/script.php') ?>
<script>
    // -----------------------delete------------------------
    $(document).ready(function() {
        $('.delete_spec').click(function(e) {
            e.preventDefault();
            var user_id = $(this).val();
            // console.log(user_id);
            $('.delete_spec_id').val(user_id);
            $('#delete_spec_modal').modal('show');
        });
    });
</script>