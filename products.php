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
$sql = "SELECT * FROM product_category_tbl WHERE status = 1 ";
$query = mysqli_query($con, $sql);
if (mysqli_num_rows($query)) {
    foreach ($query as $result) {
        $cat_id = $result['cat_id'];
?>
        <section class="home_product product_line" id="<?= $lan == 1 ?  $result['category_name_lang_1'] :  $result['category_name_lang_2'] ?>">
            <div class="container">
                <div class="head">
                    <h1><?= $lan == 1 ?  $result['category_name_lang_1'] :  $result['category_name_lang_2'] ?></h1>
                    <p><?= $lan  == 1 ? $result['category_description_lang_1'] : $result['category_description_lang_2']   ?></p>
                </div>
                <div class="boxes">
                    <div class="row form-click box-content">
                        <?php
                       if ($lan == 1) {
                        $product_status = 'product_status_lang_1';
                        $product_category = 'product_category_lang_1';
                    } else {
                        $product_status = 'product_status_lang_2';
                        $product_category = 'product_category_lang_2';
                    }   
                        $sql1 = "SELECT * FROM lang_products_tbl where $product_status = '1' and $product_category = '$cat_id'  limit 8 ";
                        $pro_query = mysqli_query($con, $sql1);
                        if (mysqli_num_rows($pro_query)) {
                            foreach ($pro_query as $pro_data) {
                        ?>
                                <div class="col-md-3 p-3 ">
                                    <form class="form_ID">
                                        <input type="hidden" value="<?= $pro_data['product_id'] ?>" class="product_id" name="p_id">
                                        <input type="hidden" value="<?= $lan == 1 ?  $pro_data['product_name_lang_1'] : $pro_data['product_name_lang_2']  ?>" class="product_name" name="p_name">
                                        <input type="hidden" value="<?= $pro_data['product_image'] ?>" name="image">
                                        <input type="hidden" value="<?= $lan ?>" name="lan_id">
                                        <input type="hidden" value="<?= $lan == 1 ? $result['category_name_lang_1']  : $result['category_name_lang_2'] ?>" name="cat_name">
                                        <div class="box">
                                            <a href="./cart_detail.php?product_id=<?= $pro_data['product_id'] ?>&lang=<?= $lan ?>">
                                                <div class="img">
                                                    <img src="./admin/products_images/<?= $pro_data['product_image'] ?>" alt="">
                                                </div>
                                            </a>
                                            <div class="text">
                                                <p><?= $lan == 1 ? $pro_data['product_name_lang_1']  : $pro_data['product_name_lang_2'] ?></p>
                                                <button type="submit" class="add" name="add" id="home_add_to_enquire">
                                                    <?php
                                                    if (isset($content_array['home_add_to_enquire'])) {
                                                        echo $content_array['home_add_to_enquire'];
                                                    }
                                                    ?>
                                                </button>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                        <?php
                            }
                        }
                        ?>
                    </div>
                    <div id="load-more" class="text-center">
                        load More
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
                    </h2> <img src="./assets/images/logo_1.svg" alt="">
                </div>
            </div>
        </div>
    </div>
</section>
<?php require('./includes/footer.php') ?>
<?php require('./includes/script.php') ?>
<script>
    document.addEventListener("DOMContentLoaded", function() {
        let loadMoreBtn = document.querySelector('#load-more');
        let currentItem = 8; // Start with 8 to show the first 8 items

        let boxes = [...document.querySelectorAll('.product_line .boxes .box-content .col-md-3')];

        // Function to toggle the visibility of the "Load More" button
        function toggleLoadMoreButton() {
            if (currentItem >= boxes.length) {
                loadMoreBtn.style.display = 'none'; // Hide the button if no more items to load
            } else {
                loadMoreBtn.style.display = 'inline-block'; // Show the button if there are more items
            }
        }

        // Hide all product boxes initially
        for (let i = 0; i < boxes.length; i++) {
            boxes[i].style.display = 'none';
        }

        // Show the first 8 items
        for (let i = 0; i < 8; i++) {
            if (i < boxes.length) {
                boxes[i].style.display = 'inline-block';
            }
        }

        toggleLoadMoreButton();

        loadMoreBtn.onclick = () => {
            for (let i = currentItem; i < currentItem + 4; i++) {
                if (i < boxes.length) {
                    boxes[i].style.display = 'inline-block';
                }
            }
            currentItem += 4;
            toggleLoadMoreButton();
        };
    });
</script>