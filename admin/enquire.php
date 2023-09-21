<?php require('authentication.php'); ?>
<?php require('./config/dbcon.php'); ?>
<?php require('./includes/header.php') ?>
<?php require('./includes/top-bar.php') ?>
<?php require('./includes/sidebar.php') ?>
<!-- Recent Sales Start -->
<?php
if (isset($_SESSION['cons_msg'])) {
    echo "<script>alert('" . $_SESSION['cons_msg'] . "')</script>";
    unset($_SESSION['cons_msg']);
}
?>
<?php
if (isset($_SESSION['min_msg'])) {
    echo "<script>alert('" . $_SESSION['min_msg'] . "')</script>";
    unset($_SESSION['min_msg']);
}
?>
<div class="container-fluid pt-4 px-4">
    <div class="bg-light text-center rounded p-4">
        <div class="d-flex align-items-center justify-content-between mb-4">
            <h6 class="mb-0">Enquire Details</h6>
        </div>
        <div class="modal fade" id="delete_en_modal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">Delete Enquire</h5>
                        <button type="button" class="btn close" data-bs-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <form action="enquire_code.php" method="POST">
                        <div class="modal-body">
                            <input type="hidden" name="delete_en_id" class="delete_en_id">
                            <p>Are you sure , you want to delete this data ?</p>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                            <button type="submit" name="delete_en" class="btn btn-danger">Yes,Delete.!</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
        <div class="table-responsive">
            <table class="table text-start align-middle table-bordered table-hover mb-0">
                <thead>
                    <tr class="text-dark">
                        <th>S No.</th>
                        <th>Name</th>
                        <th>Email</th>
                        <th>Mobile</th>
                        <th>Company</th>
                        <th>Country</th>
                        <th>Product category Name</th>
                        <th>Product Name</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    $sql = "SELECT * FROM cart_tbl ORDER BY created_at DESC";
                    $query = mysqli_query($con, $sql);
                    $count = 1;
                    if (mysqli_num_rows($query)) {
                        foreach ($query as $data) {

                    ?>
                            <tr>
                                <td><?= $count++ ?></td>
                                <td><?= $data['user_name'] ?></td>
                                <td><?= $data['user_email'] ?></td>
                                <td><?= $data['user_mobile'] ?></td>
                                <td><?= $data['user_company_name'] ?></td>
                                <td><?= $data['user_country_name'] ?></td>
                                <td><?= $data['p_cat_name'] ?></td>
                                <td><?= $data['p_name'] ?></td>
                                <td>
                                    <button type='button' value=<?php echo $data['cart_id']; ?> class='btn btn-square btn-outline-danger delete_en btn-sm my-1'><i class="fa-solid fa-trash"></i></button>
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
<!-- Recent Sales End -->





<?php require('./includes/footer.php') ?>
<?php require('./includes/script.php') ?>
<script>
    // -----------------------delete------------------------
    $(document).ready(function() {
        $('.delete_en').click(function(e) {
            e.preventDefault();
            var user_id = $(this).val();
            // console.log(user_id);
            $('.delete_en_id').val(user_id);
            $('#delete_en_modal').modal('show');
        });
    });
</script>