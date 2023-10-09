<?php require('./admin/config/dbcon.php'); ?>
<!-- <section id="remove_sec"> -->
<?php
require('./includes/header.php'); ?>
<?php
$data = [];
if (isset($_GET['product_id']) && isset($_GET['lang'])) {
    $product_id = $_GET['product_id'];
    $lang_id = $_GET['lang'];
    $sql2 = "SELECT * FROM lang_products_tbl WHERE product_id = '$product_id'";
    $query2 = mysqli_query($con, $sql2);
    if (mysqli_num_rows($query2)) {
        $data = mysqli_fetch_assoc($query2);
        // $id = $data['product_category'];
    }
}
?>
<?php
$sql3 = "SELECT * FROM product_category_tbl WHERE cat_id = '$product_id'";
$query3 = mysqli_query($con, $sql3);
$data2 = mysqli_fetch_assoc($query3);
?>


<section class="cart_details1_1">
    <div class="container">
        <div class="row">
            <div class="col-md-6 pb-3">
                <div class="image_gallery flex_column">
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
                        if ($lang_id == 1) {
                            $video_url = 'product_video_url_lang_1';
                        } else {
                            $video_url = 'product_video_url_lang_2';
                        }
                        if ($video_url != "") {
                        ?>
                            <div class="sm_img">
                                <a href="<?= $video_url ?>" class="popup" id="cart_details_product_video_watch">
                                    <?php
                                    if (isset($content_array['cart_details_product_video_watch'])) {
                                        echo $content_array['cart_details_product_video_watch'];
                                    }
                                    ?>
                                    <i class="fa-solid fa-video"></i></a>
                            </div>
                        <?php
                        }
                        ?>

                    </div>
                    <div class="main_img">
                        <div class="img">
                            <img id="main" src="./admin/products_images/<?= $data['product_image'] ?>" alt="">
                        </div>
                        <div class="btn_area form-click">
                            <form class="form_ID">
                                <input type="hidden" value="<?= $data['product_id'] ?>" class="product_id" name="p_id">
                                <input type="hidden" value="<?= $lang_id == 1 ? $data['product_name_lang_1'] : $data['product_name_lang_2']  ?>" class="product_name" name="p_name">
                                <input type="hidden" value="<?= $data['product_image'] ?>" name="image">
                                <input type="hidden" value="<?= $lang_id ?>" name="lan_id">
                                <input type="hidden" value="<?php if ($lang_id == 1) {
                                                                echo $data2['category_name_lang_1'];
                                                            } else {
                                                                echo $data2['category_name_lang_2'];
                                                            }
                                                            ?>" name="cat_name">
                                <button type="submit" class="btn1" id="home_add_to_enquire">
                                    <?php
                                    if (isset($content_array['home_add_to_enquire'])) {
                                        echo $content_array['home_add_to_enquire'];
                                    }
                                    ?>
                                </button>
                            </form>
                        </div>
                    </div>
                </div>

            </div>
            <div class="col-md-6">
                <div class="text_head">
                    <?php
                    if ($lang_id == 1) {
                        $category_name = 'category_name_lang_1';
                    } else {
                        $category_name = 'category_name_lang_2';
                    }
                    $sql3 = "SELECT * FROM product_category_tbl where cat_id = '$product_id'";
                    $query3 = mysqli_query($con, $sql3);
                    if (mysqli_num_rows($query3)) {
                        foreach ($query3 as $row) {
                    ?>
                            <h1><?php
                                if ($lang_id == 1) {
                                    echo $row['category_name_lang_1'];
                                } else {
                                    echo $row['category_name_lang_2'];
                                }
                                ?></h1>
                    <?php
                        }
                    }
                    ?>
                    <h2><?= $lang_id == 1 ? $data['product_name_lang_1'] : $data['product_name_lang_2']  ?></h2>
                </div>
                <div class="des">
                    <p id="cart_details_description_name">
                        <?php
                        if (isset($content_array['cart_details_description_name'])) {
                            echo $content_array['cart_details_description_name'];
                        }
                        ?>
                    </p>
                    <p><?= $lang_id == 1 ? $data['product_description_lang_1'] : $data['product_description_lang_2'] ?></p>
                </div>
                <div class="specs">
                    <div class="head">
                        <p id="cart_details_specification_name">
                            <?php
                            if (isset($content_array['cart_details_specification_name'])) {
                                echo $content_array['cart_details_specification_name'];
                            }
                            ?>
                        </p>
                        <div class="btn1">
                            <button class="tab-link active-link" onclick="on_tab_link('box1')">MG</button>
                            <button class="tab-link " onclick="on_tab_link('box2')">KG</button>
                        </div>
                    </div>
                    <table class="table table-bordered ">
                        <!-- <thead>
                            <tr>
                                <th>Name</th>
                                <th>Value</th>
                            </tr>
                        </thead> -->
                        <tbody>
                            <!-- <tr>
                                <td>Weight</td>
                                <td>60Kg</td>
                            </tr> -->
                            <?php
                            $p_id = $data['product_id'];
                            $sql4 = "SELECT * FROM product_specification  WHERE product_id = '$p_id'";
                            $query4 = mysqli_query($con, $sql4);
                            if (mysqli_num_rows($query4)) {
                                foreach ($query4 as $specs) {
                            ?>
                                    <tr>
                                        <td>
                                            <?php
                                           
                                                echo  $specs['product_spec_name'];
                                            
                                            ?>
                                        </td>
                                        <td>
                                            <?php
                                            
                                                echo $specs['product_spec_value'];
                                            
                                            ?>
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
</section>
<section class="cart_detail_2">
    <div class="container">
        <h1 id="cart_details_related_product">
            <?php
            if (isset($content_array['cart_details_related_product'])) {
                echo $content_array['cart_details_related_product'];
            }
            ?>
        </h1>
        <div class="row">
            <?php
            $sql = "SELECT * FROM lang_products_tbl  ORDER BY product_created_at DESC limit 4";
            $query = mysqli_query($con, $sql);
            if (mysqli_num_rows($query)) {
                foreach ($query as $result) {
            ?>
                    <div class="col-md-3 p-3">
                        <div class="box">
                            <div class="img">
                                <a href="./cart_detail.php?product_id=<?= $result['product_id'] ?>&lang=<?= $lang_id ?>" class="view-details">
                                    <img src="./admin/products_images/<?= $result['product_image'] ?>" alt="">
                                </a>
                            </div>
                            <div class="text">
                                <div class="head">
                                    <p><?= $lan == 1 ? $result['product_name_lang_1']  : $result['product_name_lang_2'] ?></p>
                                    <?php
                                    $sql3 = "SELECT * FROM product_category_tbl ";
                                    $query3 = mysqli_query($con, $sql3);
                                    if (mysqli_num_rows($query3)) {
                                        foreach ($query3 as $row) {

                                    ?>
                                            <p><?php
                                                if ($result['product_category_lang_1'] == $cat_id) {
                                                    echo $row['cat_name'];
                                                }
                                                ?></p>
                                    <?php
                                        }
                                    }
                                    ?>
                                </div>
                                <button type="submit" class="add" name="add" id="home_add_to_enquire">
                                    <?php
                                    if (isset($content_array['home_add_to_enquire'])) {
                                        echo $content_array['home_add_to_enquire'];
                                    }
                                    ?>
                                </button>
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