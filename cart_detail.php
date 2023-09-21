<?php
require('./includes/header.php'); ?>
<?php require('./admin/config/dbcon.php'); ?>
<?php
if (isset($_GET['id'])) {
    $id = $_GET['id'];
    $sql2 = "SELECT * FROM products_tbl WHERE product_id = '$id'";
    $query2 = mysqli_query($con, $sql2);
    if (mysqli_num_rows($query2)) {
        $data = mysqli_fetch_assoc($query2);
    }
}
?>
<section class="cart_details1_1">
    <div class="container">
        <div class="row">
            <div class="col-md-6 pb-3">
                <div class="image_gallery flex-change">
                    <div class="side_img">
                        <?php
                        if ($data['product_image1'] != "") {
                        ?>
                            <div class="sm_img">

                                <img src="./assets/images/<?= $data['product_image1'] ?>" onclick="change(this.src)" alt="">
                            </div>
                        <?php
                        }
                        ?>
                        <?php
                        if ($data['product_image2'] != "") {
                        ?>
                            <div class="sm_img">

                                <img src="./assets/images/<?= $data['product_image2'] ?>" onclick="change(this.src)" alt="">
                            </div>
                        <?php
                        }
                        ?>
                        <?php
                        if ($data['product_image3'] != "") {
                        ?>
                            <div class="sm_img">

                                <img src="./assets/images/<?= $data['product_image3'] ?>" onclick="change(this.src)" alt="">
                            </div>
                        <?php
                        }
                        ?>
                        <?php
                        if ($data['product_image4'] != "") {
                        ?>
                            <div class="sm_img">

                                <img src="./assets/images/<?= $data['product_image4'] ?>" onclick="change(this.src)" alt="">
                            </div>
                        <?php
                        }
                        ?>
                        <?php
                        if ($data['product_image5'] != "") {
                        ?>
                            <div class="sm_img">

                                <img src="./assets/images/<?= $data['product_image5'] ?>" onclick="change(this.src)" alt="">
                            </div>
                        <?php
                        }
                        ?>

                        <?php
                        if ($data['product_video_url'] != "") {
                        ?>
                            <div class="sm_img">
                                <a  href="<?= $data['product_video_url'] ?>" class="popup">Watch <i class="fa-solid fa-video"></i></a>
                            </div>
                        <?php
                        }
                        ?>

                    </div>
                    <div class="main_img">
                        <div class="img">
                            <img id="main" src="./admin/products_images/<?= $data['product_image'] ?>" alt="">
                        </div>

                    </div>
                </div>
                <div class="btn_area">
                    <button class="btn1">Add to Enquire</button>
                </div>
            </div>
            <div class="col-md-6">
                <div class="text_head">
                    <h1><?= $data['product_name'] ?></h1>
                    <?php
                    $sql3 = "SELECT * FROM category_tbl ";
                    $query3 = mysqli_query($con, $sql3);
                    if (mysqli_num_rows($query3)) {
                        foreach ($query3 as $row) {
                            $cat_id  = $row['cat_id'];
                    ?>
                            <h1><?php
                                if ($data['product_category'] == $cat_id) {
                                    echo $row['cat_name'];
                                }
                                ?></h1>
                    <?php
                        }
                    }
                    ?>
                </div>
                <div class="des">
                    <p>Description</p>
                    <p><?= $data['product_description'] ?></p>
                </div>
                <div class="specs">
                    <div class="head">
                        <p>Specification</p>
                        <div class="btn1">
                            <button>MG</button>
                            <button>KG</button>
                        </div>
                    </div>
                    <table class="table table-bordered">
                        <tbody>
                            <tr>
                                <td>Weight</td>
                                <td>8.5kg</td>
                            </tr>
                            <tr>
                                <td>Length</td>
                                <td>640mm</td>
                            </tr>
                            <tr>
                                <td>Air Consumption</td>
                                <td>18.33 l/s</td>
                            </tr>
                            <tr>
                                <td>Rod Size</td>
                                <td>23mm x 14mm</td>
                            </tr>
                            <tr>
                                <td>Strokes x mins</td>
                                <td>2650</td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</section>
<section class="cart_detail_2">
    <div class="container">
        <h1>Related Products</h1>
        <div class="row">
            <?php
            $sql = "SELECT * FROM products_tbl ORDER BY product_created_at DESC limit 4";
            $query = mysqli_query($con, $sql);
            if (mysqli_num_rows($query)) {
                foreach ($query as $result) {
            ?>
                    <div class="col-md-3 p-3">
                        <div class="box">
                            <div class="img">
                                <img src="./admin/products_images/<?= $result['product_image'] ?>" alt="">
                            </div>
                            <div class="text">
                                <div class="head">
                                    <p><?= $result['product_name'] ?></p>
                                    <?php
                                    $sql3 = "SELECT * FROM category_tbl ";
                                    $query3 = mysqli_query($con, $sql3);
                                    if (mysqli_num_rows($query3)) {
                                        foreach ($query3 as $row) {
                                            $cat_id  = $row['cat_id'];
                                    ?>
                                            <p><?php
                                                if ($result['product_category'] == $cat_id) {
                                                    echo $row['cat_name'];
                                                }
                                                ?></p>
                                    <?php
                                        }
                                    }
                                    ?>
                                </div>
                                <button type="submit" class="add" name="add">Add to Enquire</button>
                            </div>
                        </div>
                    </div>
            <?php

                }
            }
            ?>
        </div>
    </div>
</section>
<?php require('./includes/footer.php'); ?>
<?php require('./includes/script.php'); ?>