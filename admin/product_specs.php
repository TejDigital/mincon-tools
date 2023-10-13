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
                        <input type="text" name="delete_spec_id" class="delete_spec_id">
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
        <div class="col-md-12 mb-3">
            <div class=" bg-light rounded p-3">
                <h4>Add Specification</h4>
                <form action="product_specs_code.php" method="POST" enctype="multipart/form-data">

                    <div class="row mt-4">
                        <div class="col-md-6">
                            <h5>For English</h5>
                            <div class="form-group">
                                <label for="">Add Specification Name</label>
                                <input type="text" name="en_spec_name" class="form-control" required>
                            </div>
                        </div>

                        <div class="col-md-6">
                            <h5>For Spanish</h5>
                            <div class="form-group">
                                <label for="">Add Specification Name</label>
                                <input type="text" name="span_spec_name" class="form-control" required> 
                            </div>
                        </div>
                        
                        <div class="form-group my-2">
                            <label for="">Status</label>
                            <select name="status" id="" class="form-select my-2" required>
                                <option value="">Select Status</option>
                                <option value="1">Active</option>
                                <option value="0">Inactive</option>
                            </select>
                        </div>
                        <div class="form-group my-2">
                            <button type="submit" name="add-specs" class="btn btn-primary">ADD</button>
                        </div>
                    </div>

                </form>
            </div>
        </div>
        <div class="col-md-12">
            <div class="bg-light text-center rounded p-4">
                <div class="d-flex align-items-center justify-content-between mb-4">
                    <h4 class="mb-0">Product Specifications</h4>
                    <div class="d-flex align-items-center   justify-content-end">
                        <!-- <a href="./products.php" class="btn btn-danger">Back</a> -->
                        <!-- <div class="ms-3">
                            <label for="">Choose Language</label>
                            <select name="lan" class="form-select w-100 lanChange" id="lanChange" onchange="changeLang()">
                                <option value="1" <?php if ($lan == 1) {
                                                        echo "selected";
                                                    } ?>>English</option>
                                <option value="2" <?php if ($lan == 2) {
                                                        echo "selected";
                                                    } ?>>Spanish</option>
                            </select>
                        </div> -->
                    </div>
                    <!-- <a href="">Show All</a> -->
                </div>
                <div class="table-responsive">
                    <table class="table text-start align-middle table-bordered table-hover mb-0">
                        <thead>
                            <tr class="text-dark">
                                <th scope="col">S No</th>
                                <th scope="col"> Specification Name</th>
                                <th scope="col"> Specification Status</th>
                                <th scope="col" colspan="2" class="text-center">Action</th>
                            </tr>
                        </thead>
                        <tbody class="specification_tbl">
                            <?php
                            $sql = "SELECT * FROM specification_tbl ";
                            $query = mysqli_query($con, $sql);
                            $count = 1;
                            if (mysqli_num_rows($query)) {
                                foreach ($query as $data) {

                            ?>
                                    <tr>
                                        <td><?= $count++ ?></td>
                                        <td><?php
                                            // if ($lan == "1") {
                                                echo $data['spec_name_lang_1'];
                                            // } else {
                                            //     echo $data['spec_name_lang_2'];
                                            // }
                                            ?>
                                        </td>
                                        <td><?php if($data['spec_status'] == 1){

                                            echo 'Active';
                                        }else{

                                            echo 'Inactive';
                                        }
                                            ?>
                                        <td>
                                            <button type='button' value='<?php echo $data['spec_id']?>' class='btn btn-square btn-outline-danger delete_spec btn-sm my-1'><i class="fa-solid fa-trash"></i></button>
                                        </td>
                                        <td>
                                            <a href="./product_spec_edit.php?id=<?= $data['spec_id']?>" class='btn btn-square btn-outline-primary  btn-sm my-1'><i class="fa-regular fa-pen-to-square"></i></a>
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
            <div class=" bg-light rounded p-3">
                <h4>ADD Specification</h4>
                <form action="product_specs_code.php" method="POST" enctype="multipart/form-data">
                    <label for="">Select Language</label>
                    <select name="lan" id="lan" class="form-select w-50 mb-3 ">
                        <?php
                        $sql = "SELECT * FROM language_tbl";
                        $query = mysqli_query($con, $sql);
                        if (mysqli_num_rows($query)) {
                            foreach ($query as $result) {
                                $lan_id =  $result['lan_id'];
                        ?>
                                <option <?php if ($lan == $lan_id) {
                                            echo "selected";
                                        } ?> value="<?= $result['lan_id'] ?>"><?= $result['lang_name'] ?></option>
                        <?php
                            }
                        }
                        ?>
                    </select>
                    <div class="form-group my-1">
                        <label for="" class="text-dark">Select Product </label>
                        <span class="m-0" style="color: Green; font-size:0.7rem"><b style="font-weight:600">NOTE:</b>Choose When you want to ADD Existing category in other language</span> <br>
                        <b class="m-0" style="color: red; font-size:0.7rem"><span style="font-weight:600">NOTE:</span> When you adding new category Do not select this </b>
                        <select name="product_num" id="" class="form-select">
                            <option value="">Select Product</option>
                            <?php
                            $sql2 = "SELECT * FROM product_specification";
                            $query2 = mysqli_query($con, $sql2);

                            if (mysqli_num_rows($query2)) {
                                foreach ($query2 as $row) {
                                    $product_name_lang = $row['product_name_lang_1'];
                                    if ($row['product_name_lang_2'] != "") {
                                        $product_name_lang .= " (" . $row['product_name_lang_2'] . ")";
                                    }
                            ?>
                                    <option value="<?= $row['s_id'] ?>">
                                        <?= $product_name_lang ?>
                                    </option>
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
                    <div class="form-group my-2">
                        <label for="">Status</label>
                        <select name="status" id="" class="form-select my-2" required>
                            <option value="">Select Status</option>
                            <option value="1">Active</option>
                            <option value="0">Inactive</option>
                        </select>
                    </div>
                    <div class="form-group my-2">
                        <button type="submit" name="add-specs" class="btn btn-primary">ADD</button>
                    </div>
                </form>
            </div>
        </div> -->
    </div>
</div>
<?php require('./includes/footer.php') ?>
<?php require('./includes/script.php') ?>
<script>
    // -----------------------delete------------------------
    $(document).ready(function() {
        $('.delete_spec').click(function(e) {
            e.preventDefault();
            var cart_id = $(this).val();
            $('.delete_spec_id').val(cart_id);
            $('#delete_spec_modal').modal('show');
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