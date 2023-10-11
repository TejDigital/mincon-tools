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
        <div class="modal fade" id="delete_pro_modal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">Delete Product</h5>
                        <button type="button" class="close" data-bs-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <form action="product_code.php" method="POST">
                        <div class="modal-body">
                            <input type="hidden" name="delete_pro_id" class="delete_pro_id">
                            <input type="hidden" name="delete_lang_id" class="delete_lang_id">
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
            <div class="bg-light rounded p-4">
                <h4 class="mb-0">Product</h4>
                <div class="d-flex align-items-start justify-content-between mb-4 mx-auto">
                    <p></p>
                    <!-- <div class="d-flex align-items-end justify-content-even  w-25"> -->
                    <div class="">
                        <a href="./add_product.php" class="btn btn-info">Add</a>
                        <!-- <div class="w-75 ms-auto">
                            <label for="">Choose Language</label>
                            <select name="lan" class="form-select lanChange" onchange="changeLang()">
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
                                <th scope="col">S No</th>
                                <th scope="col">Product Category</th>
                                <th scope="col">Product Name</th>
                                <th scope="col">Status</th>
                                <th scope="col" colspan="3" class="text-center">Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                            $sql = "SELECT * FROM lang_products_tbl  ORDER BY product_created_at DESC";
                            $query = mysqli_query($con, $sql);
                            $count = 1;
                            if (mysqli_num_rows($query)) {
                                foreach ($query as $data) {
                                    $cat_id =  $data['product_category_lang_1'];
                                    // if ($lan == 1) {
                                    //     $cat_id =  $data['product_category_lang_1'];
                                    // } else {
                                    //     $cat_id = $data['product_category_lang_2'];
                                    // }
                            ?>
                                    <tr>
                                        <td><?= $count++ ?></td>
                                        <td><?php
                                            $sql2 = "SELECT * FROM product_category_tbl where cat_id = '$cat_id'";
                                            $query2 = mysqli_query($con, $sql2);
                                            if (mysqli_num_rows($query2) > 0) {
                                                foreach ($query2 as $row) {
                                                    // if ($lan == '1') {
                                                    //     echo $row['category_name_lang_1'];
                                                    // } elseif ($lan == '2') {
                                                    //     echo $row['category_name_lang_2'];
                                                    // }
                                                    echo $row['category_name_lang_1'];
                                                }
                                            }
                                            ?>
                                        </td>
                                        <td> <?php
                                                // if ($lan == "1") {
                                                //     echo $data['product_name_lang_1'];
                                                // } elseif ($lan == "2") {
                                                //     echo $data['product_name_lang_2'];
                                                // }
                                                echo $data['product_name_lang_1'];
                                                ?>
                                        </td>

                                        <td><?php
                                        // if($lan == 1){
                                            if ($data['product_status_lang_1'] == 1) {
                                                echo "Active";
                                            } else {
                                                echo "Inactive";
                                            }
                                        // }else{
                                        //     if ($data['product_status_lang_2'] == 1) {
                                        //         echo "Active";
                                        //     } else {
                                        //         echo "Inactive";
                                        //     }
                                        // }
                                            
                                            ?>
                                        </td>
                                        <td>
                                            <button type='button' value='<?= $data['product_id'] ?>' class='btn btn-square btn-outline-danger delete_pro btn-sm my-1'><i class="fa-solid fa-trash"></i></button>
                                        </td>
                                        <td>
                                            <a href="./product_edit.php?id=<?= $data['product_id'] ?>&lang_id=<?= $lan ?>" class='btn btn-square btn-outline-primary  btn-sm my-1'><i class="fa-regular fa-pen-to-square"></i></a>
                                        </td>
                                        <td>
                                            <a href="./product_detail.php?id=<?= $data['product_id'] ?>&lang_id=<?=$lan?>" class='btn btn-square btn-outline-dark  btn-sm my-1'><i class="fa-solid fa-eye"></i></a>
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
            var values = $(this).val().split(',');
            var cart_id = values[0];
            var lang_id = values[1];
            $('.delete_pro_id').val(cart_id);
            $('.delete_lang_id').val(lang_id);
            $('#delete_pro_modal').modal('show');

        });
    });
</script>