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
    <div class="bg-light rounded p-4">
        <div class="d-flex align-items-center justify-content-between mb-4">
            <h4 class="mb-0">Add Product</h4>
            <a href="./products.php" class="btn  bg-dark text-light">Home</a>
        </div>
        <form action="product_code.php" method="POST" enctype="multipart/form-data">
            <div class="row">
                <div class="col-md-6">
                    <div class="modal-body">
                        <h5>For English Language</h5>
                        <div class="col-md-12">
                            <div class="form-group my-1">
                                <div class="form-group my-1">
                                    <label for="" class="text-dark">Product Name</label>
                                    <input type="text" name="en_name" class="form-control" placeholder="product name">
                                </div>
                                <label for="" class="text-dark">Select Category</label>
                                <select name="en_product_category" class="form-select">
                                    <?php
                                    $sql1 = "SELECT * FROM product_category_tbl where  status = '1'";
                                    $query1 = mysqli_query($con, $sql1);
                                    if (mysqli_num_rows($query1) > 0) {
                                        foreach ($query1 as $data1) {
                                    ?>
                                            <option value="<?= $data1['cat_id'] ?>"><?= $data1['category_name_lang_1'] ?></option>
                                    <?php
                                        }
                                    }
                                    ?>
                                </select>
                            </div>
                            <div class="form-group my-1">
                                <label for="" class="text-dark">Product Status</label>
                                <select name="en_status" class="form-select" id="">
                                    <option value="1">Active</option>
                                    <option value="0">Inactive</option>
                                </select>
                            </div>
                            <div class="form-group my-1">
                                <label for="" class="text-dark">Product Video Url</label>
                                <input type="url" name="en_video_url" class="form-control" placeholder="Add Url ">
                            </div>
                            <div class="form-group my-1">
                                <label for="" class="text-dark">Product Manual</label>
                                <input type="file" name="en_product_manual" class="form-control" placeholder="Add Product Manual" >
                            </div>
                            <div class="form-group my-1">
                                <label for="" class="text-dark">Product Description</label>
                                <textarea name="en_product_description" cols="30" rows="7" class="form-control"></textarea>
                            </div>
                            <div class="form-group my-1">
                            <label for="">Add Product Specification</label>
<!-- 
                                <div class="specification d-flex my-3">
                                    <input type="text" name="spec_name[]" value="Weight" class="form-control" placeholder="Product specification" disabled>
                                    <input type="number" name="spec_value[]" class="form-control" placeholder="ADD Weight Value in KG" >
                                </div> -->
                                <?php
                                    $sql3 = "SELECT * FROM  specification_tbl WHERE  spec_status = 1";
                                    $query3 = mysqli_query($con,$sql3);
                                    if(mysqli_num_rows($query3)> 0){
                                        foreach($query3 as $data3){
                                            ?>
                                            <div class="specification d-flex">
                                            <input type="text" value="<?=$data3['spec_id']?>" name="spec_id[]">
                                        <input type="text" name="spec_name[]" class="form-control " value="<?=$data3['spec_name_lang_1']?>" placeholder="Specification Name" readonly>
                                        <input type="text" name="spec_value[]" class="form-control " placeholder="Specification Value" >
                                        </div>
                                            <?php
                                        }
                                    }
                                    ?>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="modal-body">
                        <h5>For Spanish Language</h5>
                        <div class="col-md-12">
                            <div class="form-group my-1">
                                <div class="form-group my-1">
                                    <label for="" class="text-dark">Product Name</label>
                                    <input type="text" name="span_name" class="form-control" placeholder="product name">
                                </div>
                                <label for="" class="text-dark">Select Category</label>
                                <select name="span_product_category" id="" class="form-select">
                                    <?php
                                    $sql2 = "SELECT * FROM product_category_tbl where status = '1'";
                                    $query2 = mysqli_query($con, $sql2);
                                    if (mysqli_num_rows($query2) > 0) {
                                        foreach ($query2 as $data2) {
                                    ?>
                                            <option value="<?= $data2['cat_id'] ?>"><?= $data2['category_name_lang_2'] ?></option>
                                    <?php
                                        }
                                    }
                                    ?>
                                </select>
                            </div>
                            <div class="form-group my-1">
                                <label for="" class="text-dark">Product Status</label>
                                <select name="span_status" class="form-select" id="">
                                    <option value="1">Active</option>
                                    <option value="0">Inactive</option>
                                </select>
                            </div>
                            <div class="form-group my-1">
                                <label for="" class="text-dark">Product Video Url</label>
                                <input type="url" name="span_video_url" class="form-control" placeholder="Add Url ">
                            </div>
                            <div class="form-group my-1">
                                <label for="" class="text-dark">Product Manual</label>
                                <input  type="file" name="span_product_manual" class="form-control" placeholder="Add Product Manual">
                            </div>
                            <div class="form-group my-1">
                                <label for="" class="text-dark">Product Description</label>
                                <textarea name="span_product_description" cols="30" rows="7" class="form-control"></textarea>
                            </div>
                            <div class="form-group my-1">
                                <label for="">Add Product Specification</label>
                                <?php
                                    $sql3 = "SELECT * FROM  specification_tbl WHERE  spec_status = 1";
                                    $query3 = mysqli_query($con,$sql3);
                                    if(mysqli_num_rows($query3)> 0){
                                        foreach($query3 as $data3){
                                            ?>
                                            <div class="specification d-flex">
                                                <input type="text" value="<?=$data3['spec_id']?>" name="spec_id[]">
                                        <input type="text" name="spec_name" class="form-control " value="<?=$data3['spec_name_lang_2']?>" placeholder="Specification Name" readonly>
                                        <input type="text" name="spec_value[]" class="form-control " placeholder="Specification Value" >
                                        </div>
                                            <?php
                                        }
                                    }
                                    ?>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-12">
                    <div class="row">
                        <div class="col-md-4">
                            <div class="form-group my-1">
                                <label for="" class="text-dark">Product Main Image</label>
                                <input type="file" name="img" class="form-control">
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="form-group my-1">
                                <label for="" class="text-dark">Product Image1</label>
                                <input type="file" name="img1" class="form-control">
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="form-group my-1">
                                <label for="" class="text-dark">Product Image2</label>
                                <input type="file" name="img2" class="form-control">
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="form-group my-1">
                                <label for="" class="text-dark">Product Image3</label>
                                <input type="file" name="img3" class="form-control">
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="form-group my-1">
                                <label for="" class="text-dark">Product Image4</label>
                                <input type="file" name="img4" class="form-control">
                            </div>
                        </div>
                        <div class="my-3">
                            <button type="submit" name="add-product" class="btn btn-primary">Save</button>
                        </div>
                    </div>
                </div>
            </div>
        </form>
    </div>
</div>





<?php require('./includes/footer.php') ?>
<?php require('./includes/script.php') ?>

<script>
    // JavaScript to add/remove specification fields
    // document.addEventListener("DOMContentLoaded", function() {
    //     const container = document.getElementById("specification-container");

    //     container.addEventListener("click", function(e) {
    //         if (e.target.classList.contains("add-spec")) {
    //             addSpecificationField(container);
    //         } else if (e.target.classList.contains("remove-spec")) {
    //             removeSpecificationField(e.target.parentElement);
    //         }
    //     });

    //     function addSpecificationField(container) {
    //         const newSpecField = document.createElement("div");
    //         newSpecField.className = "specification  d-flex my-2";
    //         newSpecField.innerHTML = `
    //                 <input type="text" name="spec_name[]"  class="form-control" placeholder="Product Name" required>
    //                 <input type="text" name="spec_value[]"  class="form-control" placeholder="Product Value" required>
    //                 <button type="button" class="remove-spec btn-danger btn-sm ms-3"><i class="fa-solid fa-trash"></i></button>

    //             `;
    //         container.appendChild(newSpecField);
    //     }

    //     function removeSpecificationField(field) {
    //         container.removeChild(field);
    //     }
    // });
</script>