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
<section class="top_hero">
    <div class="img">
        <img src="./assets/images/mincon_hero_bg1.png" alt="">
    </div>
    <div class="top_hero_text">
        <h1 id="about_hero_main_heading">
            <?php
            if (isset($content_array['about_hero_main_heading'])) {
                echo $content_array['about_hero_main_heading'];
            }
            ?>
        </h1>
        <p id="about_hero_nav_heading">
            <?php
            if (isset($content_array['about_hero_nav_heading'])) {
                echo $content_array['about_hero_nav_heading'];
            }
            ?>
        </p>
    </div>
</section>
<section class="about_2">
    <div class="container">
        <div class="row flex-change">
            <div class="col-md-6">
                <div class="text">
                    <h1 id="about_heading">
                        <?php
                        if (isset($content_array['about_heading'])) {
                            echo $content_array['about_heading'];
                        }
                        ?>
                    </h1>
                    <p id="about_sub_heading">
                        <?php
                        if (isset($content_array['about_sub_heading'])) {
                            echo $content_array['about_sub_heading'];
                        }
                        ?>
                        !</p>
                    <p id="about_description_1">
                        <?php
                        if (isset($content_array['about_description_1'])) {
                            echo $content_array['about_description_1'];
                        }
                        ?>
                    </p>
                </div>
            </div>
            <div class="col-md-6">
                <div class="img">
                    <img src="./assets/images/mincon_about_bg1.svg" alt="">
                </div>
            </div>
        </div>
        <div class="row about_2_click">
            <div class="col-md-6">
                <div class="img">
                    <img src="./assets/images/mincon_about_bg2.png" alt="">
                </div>
            </div>
            <div class="col-md-6">
                <div class="text">
                    <p id="about_description_2">
                        <?php
                        if (isset($content_array['about_description_2'])) {
                            echo $content_array['about_description_2'];
                        }
                        ?>
                    </p>
                    <div class="btn1">
                        <a href="./contact.php" id="about_btn1">
                            <?php
                            if (isset($content_array['about_btn1'])) {
                                echo $content_array['about_btn1'];
                            }
                            ?>
                        </a>
                    </div>
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
            <p id="about_end_text_content">
                <?php
                if (isset($content_array['about_end_text_content'])) {
                    echo $content_array['about_end_text_content'];
                }
                ?>
            </p>
        </div>
    </div>
</section>
<?php require('./includes/footer.php') ?>
<?php require('./includes/script.php') ?>