<?php require('./admin/config/dbcon.php'); ?>
<!-- <section id="remove_sec"> -->
<?php
require('./includes/header.php'); ?>
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
<?php
$sql3 = "SELECT * FROM category_tbl ";
$query3 = mysqli_query($con, $sql3);
$data2 = mysqli_fetch_assoc($query3);
if ($data2['cat_id'] == $data['product_category']) {
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
                                    <a href="<?= $data['product_video_url'] ?>" class="popup">Watch <i class="fa-solid fa-video"></i></a>
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
                    <div class="btn_area form-click">
                        <form class="form_ID">

                            <input type="hidden" value="<?= $data['product_id'] ?>" class="product_id" name="p_id">
                            <input type="hidden" value="<?= $data['product_name'] ?>" class="product_name" name="p_name">
                            <input type="hidden" value="<?= $data['product_image'] ?>" name="image">

                            <input type="hidden" value="<?= $data2['cat_name'] ?>" name="cat_name">
                        <?php
                    }
                        ?>
                        <button type="submit" class="btn1">Add to Enquire</button>
                        </form>
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
                                <button class="tab-link active-link" onclick="on_tab_link('box1')">MG</button>
                                <button class="tab-link " onclick="on_tab_link('box2')">KG</button>
                            </div>
                        </div>
                        <table class="table table-bordered table_box active-tab" id="box1">
                            <tbody>
                            <?php
                            $p_name = $data['product_name'];
                            $sql4 = "SELECT * FROM product_specification WHERE product_name = '$p_name'";
                            $query4 = mysqli_query($con,$sql4);
                            if(mysqli_num_rows($query4)){
                                foreach($query4 as $specs){
                                    ?>
                                    <tr>
                                    <td><?=$specs['s_name']?></td>
                                    <td><?= $specs['s_value'] ?></td>
                                </tr>
                                    <?php
                                }
                            }
                            ?>
                                <!-- <tr>
                                    <td>Weight</td>
                                    <td><?= $data['en_weight'] ?></td>
                                </tr>
                                <tr>
                                    <td>Length</td>
                                    <td><?= $data['en_length'] ?></td>
                                </tr>
                                <tr>
                                    <td>Air Consumption</td>
                                    <td><?= $data['en_air_consumption'] ?></td>
                                </tr>
                                <tr>
                                    <td>Rod Size</td>
                                    <td><?= $data['en_rod_size'] ?></td>
                                </tr>
                                <tr>
                                    <td>Strokes x mins</td>
                                    <td><?= $data['en_strokes_x_mins'] ?></td>
                                </tr> -->
                            </tbody>
                        </table>
                        <table class="table table-bordered  table_box" id="box2">
                            <tbody>
                                <!-- <tr>
                                    <td>Weight</td>
                                    <td><?= $data['spn_weight'] ?></td>
                                </tr>
                                <tr>
                                    <td>Length</td>
                                    <td><?= $data['spn_length'] ?></td>
                                </tr>
                                <tr>
                                    <td>Air Consumption</td>
                                    <td><?= $data['spn_air_consumption'] ?></td>
                                </tr>
                                <tr>
                                    <td>Rod Size</td>
                                    <td><?= $data['spn_rod_size'] ?></td>
                                </tr>
                                <tr>
                                    <td>Strokes x mins</td>
                                    <td><?= $data['spn_strokes_x_mins'] ?></td>
                                </tr> -->
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="cart_detail_2">
        <!-- <div class="container">
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
                                    <a href="#" class="view-details" data-product-id="<?= $result['product_id'] ?>">
                                        <img src="./admin/products_images/<?= $result['product_image'] ?>" alt="">
                                    </a>
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
        </div> -->
    </section>
    <?php require('./includes/footer.php'); ?>
    <?php require('./includes/script.php'); ?>
    <script>
        let tab_links = document.getElementsByClassName("tab-link");
        let tab_contents = document.getElementsByClassName("table_box");

        function on_tab_link(tab_name) {
            for (tab_link of tab_links) {
                tab_link.classList.remove("active-link");
                tab_link.style.background = "";
            }
            for (tab_content of tab_contents) {
                tab_content.classList.remove("active-tab");
            }
            event.currentTarget.classList.add("active-link");
            document.getElementById(tab_name).classList.add("active-tab");

            event.currentTarget.style.background = "#EBAB56";

        };
    </script>
    <!-- </section> -->

    <section id="product-details-container">
    </section>