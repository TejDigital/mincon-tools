<?php
session_start();
require('./includes/header.php'); ?>
<?php require('./admin/config/dbcon.php'); ?>
<?php
if (isset($_SESSION['min_msg'])) {
    echo "<script>alert('" . $_SESSION['min_msg'] . "')</script>";
    unset($_SESSION['min_msg']);
}
?>
<section class="home_top">
    <div class="box">
        <div class="img">
            <img src="./assets/images/mincon_home_bg1.png" alt="">
        </div>
    </div>
    <div class="text">
        <div class="container">
            <div class="row">
                <div class="col-md-12 main_box">
                    <h1 id="home_hero_content"> <?php
                                                if (isset($content_array['home_hero_content'])) {
                                                    echo $content_array['home_hero_content'];
                                                }
                                                ?>
                    </h1>

                    <p id="home_hero_sub_content"> <?php
                                                    if (isset($content_array['home_hero_sub_content'])) {
                                                        echo $content_array['home_hero_sub_content'];
                                                    }
                                                    ?>
                    </p>
                    <a href="./products.php" id="home_hero_btn">
                        <?php
                        if (isset($content_array['home_hero_btn'])) {
                            echo $content_array['home_hero_btn'];
                        }
                        ?>
                    </a>
                </div>
            </div>
        </div>
    </div>
    </div>
</section>
<section class="nav-product">
    <div class="container-fluid p-0">
        <div class="Sponsors_slider_area_2 text-center owl-carousel owl-theme" id="category-bar">
            <?php
            $sql = "SELECT * FROM product_category_tbl WHERE status = 1  ";
            $query = mysqli_query($con, $sql);
            if (mysqli_num_rows($query)) {
                foreach ($query as $result) {
                    $cat_id = $result['cat_id'];
            ?>
                    <div class="box">
                        <a href="#pro_id<?= $result['cat_id'] ?>"><?= $result['category_name_lang_1'] ?></a>
                        <!-- <a href="#pro_id<?= $result['cat_id'] ?>"><?php
                                                                    if ($category_name_lang == $lan) {
                                                                        echo $result[$category_name_lang];
                                                                    }
                                                                    ?></a> -->
                    </div>
            <?php
                }
            }
            ?>
        </div>
    </div>
</section>
<?php
$sql = "SELECT * FROM product_category_tbl WHERE status = 1 ";
$query = mysqli_query($con, $sql);
if (mysqli_num_rows($query)) {
    foreach ($query as $result) {
        $cat_id = $result['cat_id'];
?>
        <section class="home_product" id="pro_id<?= $result['cat_id'] ?>">
            <div class="container">
                <div class="head">
                    <h1><?= $lan == 1 ?  $result['category_name_lang_1'] : $result['category_name_lang_2'] ?></h1>
                    <p><?= $lan  == 1 ? $result['category_description_lang_1'] : $result['category_description_lang_2']  ?></p>
                </div>
                <div class="boxes">
                    <div class="row form-click">
                        <?php
                         if ($lan == 1) {
                            $product_status = 'product_status_lang_1';
                            $product_category = 'product_category_lang_1';
                        } else {
                            $product_status = 'product_status_lang_2';
                            $product_category = 'product_category_lang_2';
                        }   
                        $sql1 = "SELECT * FROM lang_products_tbl where $product_status = '1'  AND $product_category = '$cat_id' limit 8 ";
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
                                                <p><?= $lan == 1 ? $pro_data['product_name_lang_1']  : $pro_data['product_name_lang_2']?></p>
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
                </div>
                <div class="product_btn">
                    <a href="./products.php?=#<?= $lan == 1 ?  $result['category_name_lang_1'] :  $result['category_name_lang_2']?>" id="home_content_see_more">
                        <?php
                        if (isset($content_array['home_content_see_more'])) {
                            echo $content_array['home_content_see_more'];
                        }
                        ?>
                    </a>
                </div>
            </div>
            <div class="product_foot_img">
                <img src="./assets/images/mincon_product_bg1.png" alt="">
            </div>
        </section>
<?php
    }
}
?>
<section class="mincon_contact">
    <div class="container">
        <div class="row flex-change">
            <div class="col-md-6">
                <div class="head">
                    <h1 id="contact_contact_us_name">
                        <?php
                        if (isset($content_array['contact_contact_us_name'])) {
                            echo $content_array['contact_contact_us_name'];
                        }
                        ?>
                    </h1>
                    <p id="contact_us_sub_description">
                        <?php
                        if (isset($content_array['contact_us_sub_description'])) {
                            echo $content_array['contact_us_sub_description'];
                        }
                        ?>
                        !</p>
                </div>
                <form action="./admin/connect.php" method="POST">
                    <div class="form-group">
                        <input type="text" class="input-box" id="contact_input_name_placeholder" name="name" placeholder="<?php
                                                                                                                            if (isset($content_array['contact_input_name_placeholder'])) {
                                                                                                                                echo $content_array['contact_input_name_placeholder'];
                                                                                                                            }
                                                                                                                            ?>">
                    </div>
                    <div class="form-group">
                        <input type="text" class="input-box" id="contact_input_email_placeholder" name="email" placeholder="<?php
                                                                                                                            if (isset($content_array['contact_input_email_placeholder'])) {
                                                                                                                                echo $content_array['contact_input_email_placeholder'];
                                                                                                                            }
                                                                                                                            ?>">
                    </div>
                    <div class="form-group">
                        <span id="msg_alert1" style="color:red;"></span>
                        <input type="tel" maxlength="10" class="input-box" id="contact_input_phone_placeholder" onkeyup="validateNumber(this,'msg_alert1')" name="mobile" placeholder="<?php
                                                                                                                                                                                        if (isset($content_array['contact_input_phone_placeholder'])) {
                                                                                                                                                                                            echo $content_array['contact_input_phone_placeholder'];
                                                                                                                                                                                        }
                                                                                                                                                                                        ?>">
                    </div>
                    <div class="form-group">
                        <input type="text" class="input-box" name="company" id="contact_input_company_placeholder" placeholder="<?php
                                                                                                                                if (isset($content_array['contact_input_company_placeholder'])) {
                                                                                                                                    echo $content_array['contact_input_company_placeholder'];
                                                                                                                                }
                                                                                                                                ?>">
                    </div>
                    <div class="form-group">
                        <input type="text" class="input-box" name="country" id="contact_input_country_placeholder" placeholder="<?php
                                                                                                                                if (isset($content_array['contact_input_country_placeholder'])) {
                                                                                                                                    echo $content_array['contact_input_country_placeholder'];
                                                                                                                                }
                                                                                                                                ?>">
                    </div>
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <select name="product_category" id="product_category" class="input-box">
                                    <option value="" id="contact_input_category_placeholder"><?php
                                                                                                if (isset($content_array['contact_input_category_placeholder'])) {
                                                                                                    echo $content_array['contact_input_category_placeholder'];
                                                                                                }
                                                                                                ?></option>
                                    <?php
                                    $sql = "SELECT * FROM product_category_tbl WHERE status = 1 ";
                                    $query = mysqli_query($con, $sql);

                                    if (mysqli_num_rows($query)) {
                                        foreach ($query as $result) {
                                            $_SESSION['id'] =  $result['cat_id'];
                                    ?>
                                            <option value="<?= $result['cat_id'] ?>,<?= $lan ?>"><?= $lan == 1 ?  $result['category_name_lang_1'] : $result['category_name_lang_2']  ?></option>
                                    <?php
                                        }
                                    }
                                    ?>
                                </select>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <select name="product" id="product" class="input-box">
                                    <option value="" id="contact_input_product_placeholder"><?php
                                                                                            if (isset($content_array['contact_input_product_placeholder'])) {
                                                                                                echo $content_array['contact_input_product_placeholder'];
                                                                                            }
                                                                                            ?></option>
                                </select>
                            </div>
                        </div>
                    </div>
                    <div class="form-group">
                        <button class="sub-btn" id="contact_submit_button_name" name="submit">
                            <?php
                            if (isset($content_array['contact_submit_button_name'])) {
                                echo $content_array['contact_submit_button_name'];
                            }
                            ?>
                        </button>
                    </div>
                </form>
            </div>
            <div class="col-md-6">
                <div class="img">
                    <img src="./assets/images/mincon_contact_bg2.png" alt="">
                </div>
            </div>
        </div>
    </div>
</section>
<?php require('./includes/footer.php') ?>
<?php require('./includes/script.php') ?>
<script>
    const productSections = document.querySelectorAll(".home_product");
    const navbarLinks = document.querySelectorAll(".nav-product a");

    function highlightProduct() {
        productSections.forEach((section, index) => {
            const position = section.getBoundingClientRect();

            if (position.top <= 100 && position.bottom >= 100) {
                navbarLinks.forEach((link) => link.classList.remove("active-product"));
                navbarLinks[index].classList.add("active-product");
            }
        });
    }

    function scrollToSection(e) {
        e.preventDefault();
        const targetId = e.target.getAttribute("href").substring(1); // Remove the # from the href
        const targetSection = document.getElementById(targetId);

        if (targetSection) {
            window.scrollTo({
                top: targetSection.offsetTop - 65, // Account for navbar height
                behavior: "smooth",
            });
        }
    }

    window.addEventListener("scroll", highlightProduct);

    navbarLinks.forEach((link) => {
        link.addEventListener("click", scrollToSection);
    });
</script>