<?php require('./includes/header.php'); ?>
<?php require('./admin/config/dbcon.php');


$product_search = $_GET['product_search'];
$lan = $lan;
if (empty($product_search)) {
    header("location:blog.php");
}
?>
<section class="home_product" id="pro_id<?= $result['cat_id'] ?>">
            <div class="container">
                <div class="head">
                    <h5 id="blog_search_title"><?php
                                if (isset($content_array['blog_search_title'])) {
                                    echo $content_array['blog_search_title'];
                                }
                                ?>: <span style="color: #EBAB56; font-weight:600"> <?=$product_search?></span></h5>
                </div>
                <div class="boxes">
                    <div class="row form-click">
                        <?php
                        if ($lan == 1) {
                            $product_status = 'product_status_lang_1';
                            $product_category = 'product_category_lang_1';
                            $product_name = 'product_name_lang_1';
                        } else {
                            $product_name = 'product_name_lang_2';
                            $product_status = 'product_status_lang_2';
                            $product_category = 'product_category_lang_2';
                        }
                        $sql1 = "SELECT * FROM lang_products_tbl where $product_status = '1' AND $product_name like '%$product_search%'";
                        $pro_query = mysqli_query($con, $sql1);

                        if (mysqli_num_rows($pro_query)) {
                            foreach ($pro_query as $pro_data) {
                                
                        ?>
                                    <div class="col-md-3 p-3">
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
                            }else{
                                echo "<h5 class='text-danger'>No Record found</h5>
                                <b class='text-dark'>Suggestions</b>
                                <ul>
                                    <li>Make sure that all words are spelled correctly.</li>
                                    <li>Try different keywords.</li>
                                    <li>Try more general keywords.</li>
                                </ul>"
;                            }
                        
                        ?>
                    </div>
                </div>
                <?php
                if (mysqli_num_rows($pro_query) > 8) {
                ?>
                    <div class="product_btn">
                        <a class="see_more" href="./products.php?=#<?= $lan == 1 ?  $result['category_name_lang_1'] :  $result['category_name_lang_2'] ?>" id="home_content_see_more">
                            <?php
                            if (isset($content_array['home_content_see_more'])) {
                                echo $content_array['home_content_see_more'];
                            }
                            ?>
                        </a>
                    </div>
                <?php
                }
                ?>
            </div>
            <div class="product_foot_img">
                <img src="./assets/images/mincon_product_bg1.png" alt="">
            </div>
        </section>
<?php require('./includes/footer.php') ?>
<?php require('./includes/script.php') ?>