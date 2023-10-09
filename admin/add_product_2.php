
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
        <div class="col-md-12">
            <div class="bg-light rounded p-4">
                <div class="d-flex align-items-center justify-content-between mb-4">
                    <h4 class="mb-0">Add Product</h4>
                    <a href="./products.php" class="btn  bg-dark text-light">Home</a>
                </div>
                <div class="modal-body">
                    <form action="product_code.php" method="POST" enctype="multipart/form-data">
                        <label for="">Choose Language</label>

                        <select name="lan" id="lan" class="form-select w-25 mb-3 lanChange" id="lanChange" onchange="changeLang()">
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
                        <div class="row">
                            <div class="col-md-12 mb-5">
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="row">
                                            <div class="col-md-12">
                                                <div class="form-group my-1">
                                                    <div class="form-group my-1">
                                                        <label for="" class="text-dark">Product Name</label>
                                                        <input type="text" name="name" class="form-control" placeholder="product name">
                                                    </div>
                                                    <div class="form-group my-1">
                                                        <label for="">Select Product</label>
                                                        <span class="m-0" style="color: red; font-size:0.8rem">( <b style="font-weight:600"> NOTE:</b> When you adding new Product Do not select this ) </span>
                                                        <p class="m-0" style="color: Green; font-size:0.8rem"><span style="font-weight:600">Note:</span>Choose When you want to ADD Existing Product in other language</p>
                                                        <select name="product_num" id="" class="form-select">
                                                            <option value="">Select product</option>
                                                            <?php
                                                            $sql2 = "SELECT * FROM product_tbl";
                                                            $query2 = mysqli_query($con, $sql2);

                                                            if (mysqli_num_rows($query2)) {
                                                                foreach ($query2 as $row) {
                                                                    $product_name_lang = $row['product_name_lang_1'];
                                                                    if ($row['product_name_lang_2'] != "") {
                                                                        $product_name_lang .= " (" . $row['product_name_lang_2'] . ")";
                                                                    }
                                                            ?>
                                                                    <option value="<?= $row['product_id'] ?>">
                                                                        <?= $product_name_lang ?>
                                                                    </option>
                                                            <?php
                                                                }
                                                            }
                                                            ?>
                                                        </select>
                                                    </div>
                                                    <label for="" class="text-dark">Select Category</label>
                                                    <select name="product_category" id="" class="form-select">
                                                        <?php
                                                        $sql = "SELECT * FROM category_tbl WHERE lang_id = '$lan'";
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
                                                    <label for="" class="text-dark">Product Status</label>
                                                    <select name="status" class="form-select" id="">
                                                        <option value="1">Active</option>
                                                        <option value="0">Inactive</option>
                                                    </select>
                                                </div>

                                            </div>

                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group my-1">
                                            <label for="" class="text-dark">Product Description</label>
                                            <textarea name="product_description" cols="30" rows="7" class="form-control"></textarea>
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
                                    <div class="col-md-4">
                                        <div class="form-group my-1">
                                            <label for="" class="text-dark">Product Video Url</label>
                                            <input type="url" name="video_url" class="form-control" placeholder="Add Url ">
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <label for="">Add Product Specification</label>
                                        <div id="specification-container">
                                            <div class="specification d-flex">
                                                <input type="text" name="spec_name[]" class="form-control" placeholder="Product Name" required>
                                                <input type="text" name="spec_value[]" class="form-control" placeholder="Product Value" required>
                                                <button type="button" class="add-spec btn btn-sm btn-success mx-3">+</button>
                                            </div>
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
        </div>

    </div>
</div>
<?php require('./includes/footer.php') ?>
<?php require('./includes/script.php') ?>

<script>
    // JavaScript to add/remove specification fields
    document.addEventListener("DOMContentLoaded", function() {
        const container = document.getElementById("specification-container");

        container.addEventListener("click", function(e) {
            if (e.target.classList.contains("add-spec")) {
                addSpecificationField(container);
            } else if (e.target.classList.contains("remove-spec")) {
                removeSpecificationField(e.target.parentElement);
            }
        });

        function addSpecificationField(container) {
            const newSpecField = document.createElement("div");
            newSpecField.className = "specification  d-flex my-2";
            newSpecField.innerHTML = `
                    <input type="text" name="spec_name[]"  class="form-control" placeholder="Product Name" required>
                    <input type="text" name="spec_value[]"  class="form-control" placeholder="Product Value" required>
                    <button type="button" class="remove-spec btn-danger btn-sm ms-3"><i class="fa-solid fa-trash"></i></button>

                `;
            container.appendChild(newSpecField);
        }

        function removeSpecificationField(field) {
            container.removeChild(field);
        }
    });
</script>