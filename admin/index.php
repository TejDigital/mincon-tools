<?php require('authentication.php'); ?>
<?php require('./config/dbcon.php'); ?>
<?php require('./includes/header.php') ?>
<?php require('./includes/top-bar.php') ?>
<?php require('./includes/sidebar.php') ?>
<!-- Recent Sales Start -->
<?php
if (isset($_SESSION['alert_msg'])) {
?>
    <div class="alert alert-warning alert-dismissible fade show" role="alert">
        <strong>Hey!</strong> <?php echo $_SESSION['alert_msg'] ?>
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close">
            <!-- <span aria-hidden="true">&times;</span> -->
        </button>
    </div>
<?php
    unset($_SESSION['alert_msg']);
}
?>
<?php
if (isset($_SESSION['auth_msg'])) {
?>
    <div class="alert alert-warning alert-dismissible fade show" role="alert">
        <strong>Hey!</strong> <?php echo $_SESSION['auth_msg'] ?>
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close">
            <!-- <span aria-hidden="true">&times;</span> -->
        </button>
    </div>
<?php
    unset($_SESSION['auth_msg']);
}
?>
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
            <h6 class="mb-0">Contact Details</h6>
        </div>
        <div class="modal fade" id="delete_con_modal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">Delete Message</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close">
                            <!-- <span aria-hidden="true">&times;</span> -->
                        </button>
                    </div>
                    <form action="connect.php" method="POST">
                        <div class="modal-body">
                            <input type="hidden" name="delete_con_id" class="delete_con_id">
                            <p>Are you sure , you want to delete this data ?</p>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                            <button type="submit" name="delete_con" class="btn btn-danger">Delete</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
        <div class="table-responsive">
            <table class="table text-start align-middle table-bordered table-hover mb-0">
                <thead>
                    <tr class="text-dark">
                        <th>S.No.</th>
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
                    $sql = "SELECT * FROM contact_tbl
                     LEFT JOIN lang_products_tbl ON contact_tbl.contact_product = lang_products_tbl.product_id    
                     LEFT JOIN product_category_tbl ON contact_tbl.contact_product_category = product_category_tbl.cat_id ORDER BY contact_tbl.created_at DESC";
                    $query = mysqli_query($con, $sql);
                    $count = 1;
                    if (mysqli_num_rows($query)) {
                        foreach ($query as $data) {

                            if($lan == 1){
                                $product_name = $data['product_name_lang_1'];
                            }else{
                                $product_name = $data['product_name_lang_2'];
                            }

                    ?>
                            <tr>
                                <td><?= $count++ ?></td>
                                <td><?= $data['name'] ?></td>
                                <td><?= $data['email'] ?></td>
                                <td><?= $data['mobile'] ?></td>
                                <td><?= $data['company_name'] ?></td>
                                <td><?= $data['country'] ?></td>
                                <td>
                                    <?=
                                    $lan == 1 ? $data['category_name_lang_1'] : $data['category_name_lang_2']  
                                    ?>
                                </td>
                                <td>
                                    <?php 
                                     if($product_name){
                                       echo $product_name;
                                     }else{
                                       echo "Product Not Found";
                                     }
                                    ?>
                                </td>
                                <td>
                                    <button type='button' value=<?php echo $data['id']; ?> class='btn btn-square btn-outline-danger delete_con btn-sm my-1'><i class="fa-solid fa-trash"></i></button>
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
        $('.delete_con').click(function(e) {
            e.preventDefault();
            var user_id = $(this).val();
            // console.log(user_id);
            $('.delete_con_id').val(user_id);
            $('#delete_con_modal').modal('show');
        });
    });
</script>