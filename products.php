<?php
session_start();
 require('./includes/header.php'); ?>
<?php require('./admin/config/dbcon.php'); ?>

<section class="top_hero">
    <div class="img">
        <img src="./assets/images/mincon_hero_bg1.png" alt="">
    </div>
    <div class="top_hero_text">
        <h1 id="product_hero_heading">
        <?php
            if (isset($content_array['product_hero_heading'])) {
                echo $content_array['product_hero_heading'];
            }
            ?>
        </h1>
        <p id="product_hero_sub_heading">
        <?php
            if (isset($content_array['product_hero_sub_heading'])) {
                echo $content_array['product_hero_sub_heading'];
            }
            ?>
         </p>
    </div>
</section>
<?php
if (isset($_SESSION['min_msg'])) {
    echo "<script>alert('" . $_SESSION['min_msg'] . "')</script>";
    unset($_SESSION['min_msg']);
}
?>

<?php
$sql = "SELECT * FROM category_tbl WHERE cat_status = 1 and lang_id = '$lan'";
$query = mysqli_query($con, $sql);
if (mysqli_num_rows($query)) {
    foreach ($query as $result) {
        $id = $result['cat_id'] ;
?>
        <section class="home_product product_line" id="<?= $result['cat_name'] ?>">
            <div class="container">
                <div class="head">
                    <h1><?= $result['cat_name'] ?></h1>
                    <p><?= $result['cat_description'] ?></p>
                </div>
                <div class="boxes">
                    <div class="row form-click">
                        <?php
                        $sql1 = "SELECT * FROM products_tbl where product_status = '1' AND product_category = '$id' AND lang_id = '$lan' ";
                        $pro_query = mysqli_query($con, $sql1);
                        if (mysqli_num_rows($pro_query)) {
                            foreach ($pro_query as $pro_data) {
                        ?>
                                <div class="col-md-3 p-3">
                                    <form class="form_ID">
                                        <input type="hidden" value="<?= $pro_data['product_id'] ?>" class="product_id" name="p_id">
                                        <input type="hidden" value="<?= $pro_data['product_name'] ?>" class="product_name" name="p_name">
                                        <input type="hidden" value="<?= $pro_data['product_image'] ?>" name="image">
                                        <input type="hidden" value="<?= $pro_data['lang_id'] ?>" name="lan_id">
                                        <input type="hidden" value="<?= $result['cat_name'] ?>" name="cat_name">
                                        <div class="box">
                                            <a href="./cart_detail.php?id=<?=$pro_data['product_id']?>&lang=<?=$lan?>">
                                                <div class="img item_detail">
                                                    <!-- <input type="hidden" class="item_id" name="item_id" value="<?=$pro_data['product_id']?>"> -->
                                                    <img src="./admin/products_images/<?= $pro_data['product_image'] ?>" alt="">
                                                </div>
                                            </a>
                                            <div class="text">
                                                <p><?= $pro_data['product_name'] ?></p>
                                                <button type="submit" class="add" name="add">Add to Enquire</button>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                        <?php
                            }
                        }
                        ?>

                    </div>
                </div>

            </div>

        </section>
<?php
    }
}
?>


<section class="mincon_sky">
    <div class="container-fluid p-0">
        <div class="row m-0 p-0">
            <div class="col-md-12 p-0">
                <div class="img">
                    <img src="./assets/images/mincon_hero_bg2.png" alt="">
                </div>
                <div class="text">
                <h2 id="about_sky_content_heading">
                        <?php
                        if (isset($content_array['about_sky_content_heading'])) {
                            echo $content_array['about_sky_content_heading'];
                        }
                        ?>
                    </h2>                    <img src="./assets/images/logo_1.svg" alt="">
                </div>
            </div>
        </div>
    </div>
</section>
<?php require('./includes/footer.php') ?>
<?php require('./includes/script.php') ?>