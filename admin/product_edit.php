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
<?php
if (isset($_GET['id']) && isset($_GET['lang_id'])) {
    $id = $_GET['id'];
    $lang_id = $_GET['lang_id'];

    $sql = "SELECT * FROM lang_products_tbl  WHERE product_id = '$id'";
    $query = mysqli_query($con, $sql);
    $data = mysqli_fetch_assoc($query);
    $img = $data['product_image'];
    $img1 = $data['product_image1'];
    $img2 = $data['product_image2'];
    $img3 = $data['product_image3'];
    $img4 = $data['product_image4'];
    // echo $data['lang_id'];

    $sql2 = "SELECT * FROM product_specification WHERE product_id = '$id'";
    $query2 = mysqli_query($con, $sql2);
    // $data2 = mysqli_fetch_assoc($query2);

?>
    <div class="container-fluid pt-4 px-4">
        <div class="bg-light rounded p-4">
            <div class="d-flex align-items-center justify-content-between mb-4">
                <h4 class="mb-0 float-start">Product Edit</h4>
                <a href="./products.php" class="btn btn-danger float-end">Back</a>
            </div>
            <form action="product_code.php" method="POST" enctype="multipart/form-data">
                <div class="row">
                    <div class="col-md-12 px-3 mb-5">
                        <h6>Product Language : <?= $lang_id == 1 ? 'English' : 'Spanish' ?></h6>
                        <input type="hidden" name="id" value="<?= $data['product_id'] ?>">
                        <input type="hidden" name="lang_id" value="<?= $lang_id ?>">
                        <div class="form-group my-2">
                            <label for="">Status</label>
                            <select name="status" class="form-select mb-3">
                                <option <?php
                                        if ($data['product_status_lang_1'] == 1) {
                                            echo "selected";
                                        }
                                        ?> value="1">Active</option>
                                <option <?php
                                        if ($data['product_status_lang_2'] == 0) {
                                            echo "selected";
                                        }
                                        ?> value="0">Inactive</option>
                            </select>
                        </div>
                        <div class="form-group my-2">
                            <label for="">Name</label>
                            <input type="text" name="name" value="<?=  $lang_id == 1? $data['product_name_lang_1'] : $data['product_name_lang_2']; ?>" class="form-control " placeholder="name" required>
                        </div>
                        <div class="form-group my-2">
                            <label for="">Video Url</label>
                            <input type="url" name="video_url" value="<?= $lang_id == 1 ? $data['product_video_url_lang_1'] : $data['product_video_url_lang_2'];  ?>" class="form-control " placeholder="Video Url">
                        </div>
                        <div class="form-group my-2">
                            <label for="">Product Manual <span style="color: red; font-size:0.8rem">Current manual Name: <b><?=  $lang_id == 1 ? $data['product_manual_lang_1'] : $data['product_manual_lang_2'];  ?></b>
                                </span></label>
                            <input type="hidden" name="product_manual" value="<?= $lang_id == 1 ? $data['product_manual_lang_1'] : $data['product_manual_lang_2'];  ?>" class="form-control " placeholder="product_manual">

                            <input type="file" name="new_product_manual" value="<?= $lang_id == 1 ? $data['product_manual_lang_1'] : $data['product_manual_lang_2'];  ?>" class="form-control " placeholder="product_manual">
                        </div>
                        <label for=''>Product Description</label>
                        <textarea name='product_description' id='' cols='30' rows='5' class='form-control'><?= $lang_id == 1 ? $data['product_description_lang_1'] : $data['product_description_lang_2']; ?></textarea>
                        <div class="form-group my-2">
                            <label for="">Choose new Category</label>
                            <select name="product_category" id="" class="form-select " required>
                                <?php
                                if ($lang_id == 1) {
                                    $product_cat_id =  $data['product_category_lang_1'];
                                } else {
                                    $product_cat_id =  $data['product_category_lang_2'];
                                }
                                $sql = "SELECT * FROM product_category_tbl ";
                                $query = mysqli_query($con, $sql);

                                if (mysqli_num_rows($query)) {
                                    foreach ($query as $data2) {
                                        $cat_id = $data2['cat_id'];
                                ?>
                                        <option <?php
                                                if ($product_cat_id == $cat_id) {
                                                    echo "selected";
                                                }
                                                ?> value="<?= $data2['cat_id'] ?>"><?= $lang_id == 1 ? $data2['category_name_lang_1'] : $data2['category_name_lang_2']; ?></option>
                                <?php
                                    }
                                }
                                ?>
                            </select>
                        </div>
                        <label for="">Add Product Specification</label>
                        <div class="form-control my-2">

                            <?php
                            $sql3 = "SELECT * FROM  product_specification where product_id =$id";
                            $query3 = mysqli_query($con, $sql3);
                            if (mysqli_num_rows($query3) > 0) {
                                foreach ($query3 as $data3) {
                            ?>
                                    <div class="specification d-flex">
                                        <input type="hidden" name="s_id[]" value="<?=$data3['s_id']?>">
                                        <input type="text" name="spec_name[]" class="form-control " value="<?= $lang_id == 1 ? $data3['product_spec_name'] :  $data3['product_spec_name_lang_2'] ?>" placeholder="Specification Name" readonly>
                                        <input type=" text" name="spec_value[]" class="form-control " value="<?= $lang_id == 1 ? $data3['product_spec_value'] : $data3['product_spec_value_lang_2'] ?>" placeholder="Specification Value">
                                    </div>
                            <?php
                                }
                            }
                            ?>
                                <?php
                                if($lan ==1 ){
                                    $spec_name = 'spec_id';
                                }else{
                                    $spec_name = 'spec_id';
                                }
                                    $sql3 = "SELECT * FROM  specification_tbl WHERE  spec_status = 1 and $spec_name = '".$data3['specific_id']."'";
                                    $query3 = mysqli_query($con,$sql3);
                                    if(mysqli_num_rows($query3)> 0){
                                        foreach($query3 as $data4){
                                            ?>
                                            <div class="specification d-flex">
                                                <input type="text" value="<?=$data4['spec_id']?>" name="spec_id[]">
                                        <input type="text" name="spec_name[]" class="form-control " value="<?=$data4['spec_name_lang_2']?>" placeholder="Specification Name" readonly>
                                        <input type="text" name="spec_value[]" class="form-control " placeholder="Specification Value" >
                                        </div>
                                            <?php
                                        }
                                    }
                                    ?>
                        </div>

                    </div>

                    <div class="col-md-12">
                        <div class="row">
                            <div class="col-md-4">
                                <p>Old Main Image</p>
                                <img src='./products_images/<?= $img ?>' height="50%" width="100%" alt="">
                                <input type="hidden" name="img_main" value='<?= $img ?>'>
                                <input type="file" name="new_img_main" class="form-control ">
                            </div>
                            <div class="col-md-4">
                                <p>Old Image1</p>
                                <img src='./products_images/<?= $img1 ?>' height="50%" width="100%" alt="">
                                <input type="hidden" name="img1" value='<?= $img1 ?>'>
                                <input type="file" name="new_img1" class="form-control ">
                            </div>
                            <div class="col-md-4">
                                <p>Old Main Image2</p>
                                <img src='./products_images/<?= $img2 ?>' height="50%" width="100%" alt="">
                                <input type="hidden" name="img2" value='<?= $img2 ?>'>
                                <input type="file" name="new_img2" class="form-control ">
                            </div>
                            <div class="col-md-4">
                                <p>Old Main Image3</p>
                                <img src='./products_images/<?= $img3 ?>' height="50%" width="100%" alt="">
                                <input type="hidden" name="img3" value='<?= $img3 ?>'>
                                <input type="file" name="new_img3" class="form-control ">
                            </div>
                            <div class="col-md-4">
                                <p>Old Main Image4</p>
                                <img src='./products_images/<?= $img4 ?>' height="50%" width="100%" alt="">
                                <input type="hidden" name="img4" value='<?= $img4 ?>'>
                                <input type="file" name="new_img4" class="form-control ">
                            </div>
                        </div>
                    </div>
                    
                    <button type="submit" name="update-product" class="btn btn-primary my-3">Update</button>
                </div>
            </form>
        </div>
    </div>
<?php
}
?>
<!-- Recent Sales End -->

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