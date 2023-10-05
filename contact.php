<?php session_start();
require('./includes/header.php'); ?>
<?php require('./admin/config/dbcon.php'); ?>
<?php
if (isset($_SESSION['min_msg'])) {
    echo "<script>alert('" . $_SESSION['min_msg'] . "')</script>";
    unset($_SESSION['min_msg']);
}
?>
<section class="top_hero">
    <div class="img">
        <img src="./assets/images/mincon_hero_bg1.png" alt="">
    </div>
    <div class="top_hero_text">
        <h1 id="contact_hero_heading">
            <?php
            if (isset($content_array['contact_hero_heading'])) {
                echo $content_array['contact_hero_heading'];
            }
            ?>
        </h1>
        <p id="contact_hero_sub_heading">
            <?php
            if (isset($content_array['contact_hero_sub_heading'])) {
                echo $content_array['contact_hero_sub_heading'];
            }
            ?>
        </p>
    </div>
</section>
<section class="contact_1">
    <div class="container">
        <div class="row">
            <div class="col-md-3">
                <div class="box">
                    <div class="img">
                        <img src="./assets/images/phone.svg" alt="">
                    </div>
                    <h3 id="contact_phone">
                        <?php
                        if (isset($content_array['contact_phone'])) {
                            echo $content_array['contact_phone'];
                        }
                        ?>
                    </h3>
                    <p><a href="#!">954-372-5520</a></p>
                </div>
            </div>
            <div class="col-md-3">
                <div class="box">
                    <div class="img">
                        <img src="./assets/images/mail.svg" alt="">
                    </div>
                    <h3 id="contact_email">
                        <?php
                        if (isset($content_array['contact_email'])) {
                            echo $content_array['contact_email'];
                        }
                        ?>
                    </h3>
                    <p><a href="#!">mincontools@gmail.com</a></p>
                </div>
            </div>
            <div class="col-md-3">
                <div class="box">
                    <div class="img">
                        <img src="./assets/images/map.svg" alt="">
                    </div>
                    <h3 id="contact_address">
                        <?php
                        if (isset($content_array['contact_address'])) {
                            echo $content_array['contact_address'];
                        }
                        ?>
                    </h3>
                    <p><a href="#!">2234 N Federal Hwy Boca Raton, FL 33431</a></p>
                </div>
            </div>
            <div class="col-md-3">
                <div class="box">
                    <div class="img-logo">
                        <img src="./assets/images/Mincon Without Name Logo 1.svg" alt="">
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<section class="mincon_contact contact_2">
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
                        <span id="msg_alert2" style="color:red;"></span>
                        <input type="tel" maxlength="10" class="input-box" id="contact_input_phone_placeholder" onkeyup="validateNumber(this,'msg_alert2')" name="mobile" placeholder="<?php
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
                                    $sql = "SELECT * FROM category_tbl WHERE cat_status = 1 AND lang_id = '$lan'";
                                    $query = mysqli_query($con, $sql);

                                    if (mysqli_num_rows($query)) {
                                        foreach ($query as $result) {
                                            $_SESSION['id'] =  $result['cat_id'];
                                    ?>
                                            <option value="<?= $result['cat_id'] ?>,<?=$lan?>"><?= $result['cat_name'] ?></option>
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
<section class="about_3">
    <div class="container">
        <div class="row">
            <div class="container">
                <div class="col-md-12">
                    <div class="text">
                        <h1 id="about_3_heading">
                            <?php
                            if (isset($content_array['about_3_heading'])) {
                                echo $content_array['about_3_heading'];
                            }
                            ?>
                        </h1>
                        <p id="about_3_description">
                            <?php
                            if (isset($content_array['about_3_description'])) {
                                echo $content_array['about_3_description'];
                            }
                            ?>
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<section class="mincon_choose">
    <div class="container">
        <div class="row">
            <h1 id="about_heading_choose_content_heading">
                <?php
                if (isset($content_array['about_heading_choose_content_heading'])) {
                    echo $content_array['about_heading_choose_content_heading'];
                }
                ?> ?</h1>
            <div class="col-md-6">
                <div class="text">
                    <div class="text-box">
                        <div class="img">
                            <img src="./assets/images/right-tic.svg" alt="">
                        </div>
                        <div class="des">
                            <h2 id="about_heading_choose_sub_heading_1">
                                <?php
                                if (isset($content_array['about_heading_choose_sub_heading_1'])) {
                                    echo $content_array['about_heading_choose_sub_heading_1'];
                                }
                                ?> </h2>
                            <p id="about_heading_choose_description_1">
                                <?php
                                if (isset($content_array['about_heading_choose_description_1'])) {
                                    echo $content_array['about_heading_choose_description_1'];
                                }
                                ?>
                            </p>
                        </div>
                    </div>
                    <div class="text-box">
                        <div class="img">
                            <img src="./assets/images/right-tic.svg" alt="">
                        </div>
                        <div class="des">
                            <h2 id="about_heading_choose_sub_heading_2">
                                <?php
                                if (isset($content_array['about_heading_choose_sub_heading_2'])) {
                                    echo $content_array['about_heading_choose_sub_heading_2'];
                                }
                                ?></h2>
                            <p class="about_heading_choose_description_2">
                                <?php
                                if (isset($content_array['about_heading_choose_description_2'])) {
                                    echo $content_array['about_heading_choose_description_2'];
                                }
                                ?>
                            </p>
                        </div>
                    </div>
                    <div class="text-box">
                        <div class="img">
                            <img src="./assets/images/right-tic.svg" alt="">
                        </div>
                        <div class="des">
                            <h2 id="about_heading_choose_sub_heading_3">
                                <?php
                                if (isset($content_array['about_heading_choose_sub_heading_3'])) {
                                    echo $content_array['about_heading_choose_sub_heading_3'];
                                }
                                ?></h2>
                            <p class="about_heading_choose_description_3">
                                <?php
                                if (isset($content_array['about_heading_choose_description_3'])) {
                                    echo $content_array['about_heading_choose_description_3'];
                                }
                                ?>
                            </p>
                        </div>
                    </div>
                    <div class="text-box">
                        <div class="img">
                            <img src="./assets/images/right-tic.svg" alt="">
                        </div>
                        <div class="des">
                            <h2 id="about_heading_choose_sub_heading_4">
                                <?php
                                if (isset($content_array['about_heading_choose_sub_heading_4'])) {
                                    echo $content_array['about_heading_choose_sub_heading_4'];
                                }
                                ?></h2>
                            <p id="about_heading_choose_description_4">
                                <?php
                                if (isset($content_array['about_heading_choose_description_4'])) {
                                    echo $content_array['about_heading_choose_description_4'];
                                }
                                ?>
                            </p>
                        </div>
                    </div>
                    <div class="text-box">
                        <div class="img">
                            <img src="./assets/images/right-tic.svg" alt="">
                        </div>
                        <div class="des">
                            <h2 id="about_heading_choose_sub_heading_5">
                                <?php
                                if (isset($content_array['about_heading_choose_sub_heading_5'])) {
                                    echo $content_array['about_heading_choose_sub_heading_5'];
                                }
                                ?>
                            </h2>
                            <p id="about_heading_choose_description_5">
                                <?php
                                if (isset($content_array['about_heading_choose_description_5'])) {
                                    echo $content_array['about_heading_choose_description_5'];
                                }
                                ?>
                            </p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-6">
                <div class="bg-img">
                    <img src="./assets/images/mincon_about_bg3.png" alt="">
                </div>
            </div>
        </div>
    </div>
</section>
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
                    </h2> 
                    <img src="./assets/images/logo_1.svg" alt="">
                </div>
            </div>
        </div>
    </div>
</section>
<section class="mincon_end_text">
    <div class="container">
        <div class="end_text">
            <p>Mincon Tools: Where Compromise Has No Place. Join forces with Mincon Tools LLC to secure the tools that drive your success in mining and construction. Explore our product spectrum, embrace innovation, and witness the metamorphosis of your mining operations.</p>
        </div>
    </div>
</section>
<?php require('./includes/footer.php') ?>
<?php require('./includes/script.php') ?>