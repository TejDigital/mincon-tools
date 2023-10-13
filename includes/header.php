<?php require('./admin/config/dbcon.php');

$lan = 1;
if (isset($_GET['lang'])) {
    $lan = $_GET['lang'];
}
$url_product_id = "";
if (isset($_GET['product_id'])) {
    $url_product_id = $_GET['product_id'];
}
$keybord = "";
if (isset($_GET['keybord'])) {
    $keybord = $_GET['keybord'];
}
$url_auth = "";
if (isset($_GET['auth'])) {
    $url_auth = $_GET['auth'];
}
$url_blog_id = "";
if (isset($_GET['blog_id'])) {
    $url_blog_id = $_GET['blog_id'];
}

$url_cat_id = "";
if (isset($_GET['blog_cat_id'])) {
    $url_cat_id = $_GET['blog_cat_id'];
}

$ul_sql = "SELECT * FROM ui_table WHERE  lang_id = '$lan'";
$ul_query = mysqli_query($con, $ul_sql);

$content_array = [];
while ($content = mysqli_fetch_assoc($ul_query)) {
    $content_array[$content['content_id']] = $content['content'];
}
?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">

    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mincon Tools</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/magnific-popup.js/1.1.0/magnific-popup.css" />

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css" integrity="sha512-tS3S5qG0BlhnQROyJXvNjeEM4UpMXHrQfTGmbQ1gKmelCxlSEBUaxhRBj/EFTzpbP4RVSrpEikbmdJobCvhE3g==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.theme.default.min.css" integrity="sha512-sMXtMNL1zRzolHYKEujM2AqCLUR9F2C4/05cdbxjjLSRvMQIciEPCQZo++nk7go3BtSuK9kfa/s+a4f4i5pLkw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick-theme.min.css" integrity="sha512-17EgCFERpgZKcm0j0fEq1YCJuyAWdz9KUtv1EjVuaOz8pDnh/0nZxmU6BBXwaaxqoi9PQXnRWqlcDB027hgv9A==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick.css" integrity="sha512-wR4oNhLBHf7smjy0K4oqzdWumd+r5/+6QO/vDda76MW5iug4PT7v86FoEkySIJft3XA0Ae6axhIvHrqwm793Nw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="./assets/css/header.css">
    <link rel="stylesheet" href="./assets/css/footer.css">
    <link rel="stylesheet" href="./assets/css/index.css">
    <link rel="stylesheet" href="./assets/css/contact.css">
    <link rel="stylesheet" href="./assets/css/products.css">
    <link rel="stylesheet" href="./assets/css/about.css">
    <link rel="stylesheet" href="./assets/css/blog.css">
    <link rel="stylesheet" href="./assets/css/blog_detail.css">
    <link rel="stylesheet" href="./assets/css/cart.css">
    <link rel="stylesheet" href="./assets/css/cart_detail.css">
    <!-- <link rel="stylesheet" href="./css/fancybox.min.css"> -->
</head>

<body>
    <header class="header">
        <div class="header-inner">
            <nav class="top_nav " id="top_nav">
                <div class="container-fluid">
                    <div class="row d-flex align-items-center justify-content-between">
                        <div class="col-md-12 d-flex align-items-center justify-content-between flex-wrap">
                            <div class="address d-flex align-items-center justify-content-between flex-wrap">
                                <div class="div top_nav_item px-2">
                                    <p class="m-0 view_display"><a href="tel:+19543725520"> <span class="pe-1"> <i class="fa-solid fa-phone-volume"></i></span>+1 (954) 372 5520</a></p>
                                    <p class="m-0 none_display"><a href="tel:+19543725520"> <span class="pe-1"> <i class="fa-solid fa-phone-volume"></i></span></a></p>
                                </div>
                                <div class="div top_nav_item px-2">
                                    <p class="m-0 view_display"> <a href="mailto:info@mincontools.com "> <span class="pe-1"> <i class="fa-regular fa-envelope"></i></span> info@mincontools.com </a></p>
                                    <p class="m-0 none_display"> <a href="mailto:info@mincontools.com "> <span class="pe-1"> <i class="fa-regular fa-envelope"></i></span> </a></p>
                                </div>
                            </div>
                            <div class="head_end">
                                <!-- <div class="dropdown-area">
                                    <p class="m-0 p-0 pe-2">Language:</p>
                                    <select name="" id="languageSelect" onchange="changeLanguage()">
                                        <option value="1" >English</option>
                                        <option value="2" >Spanish</option>
                                    </select>
                                </div> -->
                                <div class="top_nav_social d-flex align-items-center justify-content-evenly gap-4">
                                    <a href="#"> <i class="fa-brands fa-facebook"></i></a>
                                    <a href="#"> <i class="fa-brands fa-instagram"></i></a>
                                    <a href="#"> <i class="fa-brands fa-twitter"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </nav>
            <div class="container-fluid px-lg-5">
                <nav class="navbar navbar-expand-lg border-bottom my-navbar">
                    <a class="navbar-brand" href="index.php">
                        <img src="./assets/images/logo_1.svg" class="img-fluid logo1">
                        <img src="./assets/images/logo_1.svg" class="img-fluid logo2">
                    </a>
                    <div class="toggel_btns">
                        <button class="navbar-toggler toggel_btn1" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                            <span class=""><i class="fas fa-bars" style="margin:5px 0px 0px 0px;"></i></span>
                        </button>

                        <button class="navbar-toggler toggel_btn2" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                            <span class=""><i class="fas fa-bars" style="margin:5px 0px 0px 0px;"></i></span>
                        </button>
                    </div>
                    <div class="collapse navbar-collapse navbar_mobile" id="navbarSupportedContent">
                        <ul class="navbar-nav ms-auto px-5">
                            <li class="nav-item">
                                <a class="nav-link" href="./index.php?lang=<?= $lan ?>" id="header_link_home">
                                    <?php
                                    if (isset($content_array['header_link_home'])) {
                                        echo $content_array['header_link_home'];
                                    }
                                    ?>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="./about.php?lang=<?= $lan ?>" id="">
                                    <?php
                                    if (isset($content_array['header_link_about'])) {
                                        echo $content_array['header_link_about'];
                                    }
                                    ?>
                                </a>
                            </li>

                            <li class="nav-item">
                                <a class="nav-link" href="./products.php?lang=<?= $lan ?>" id="header_link_product">
                                    <?php
                                    if (isset($content_array['header_link_product'])) {
                                        echo $content_array['header_link_product'];
                                    }
                                    ?></a>
                            </li>

                            <li class="nav-item">
                                <a class="nav-link" href="./blog.php?lang=<?= $lan ?>" id="header_link_blog"> <?php
                                                                                                                if (isset($content_array['header_link_blog'])) {
                                                                                                                    echo $content_array['header_link_blog'];
                                                                                                                }
                                                                                                                ?></a>

                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="./contact.php?lang=<?= $lan ?>" id="header_link_contact"> <?php
                                                                                                                    if (isset($content_array['header_link_contact'])) {
                                                                                                                        echo $content_array['header_link_contact'];
                                                                                                                    }
                                                                                                                    ?> </a>
                            </li>
                            <input type="hidden" value="<?= $url_product_id ?>" id="url_product_id">
                            <input type="hidden" value="<?= $url_blog_id ?>" id="url_blog_id">
                            <input type="hidden" value="<?= $url_cat_id ?>" id="url_cat_id">
                            <input type="hidden" value="<?= $url_auth ?>" id="auth">
                            <input type="hidden" value="<?= $keybord ?>" id="keybord">
                            <li class="nav-item lang_switch">
                                <!-- <div class="dropdown-area">
                                    <p class="p-0 m-0" id="header_link_language"> <?php
                                                                                    if (isset($content_array['header_link_language'])) {
                                                                                        echo $content_array['header_link_language'];
                                                                                    }
                                                                                    ?></p>


                                    <select id="languageSelect" onchange="changeLanguage()">

                                        <option value="1" <?php if ($lan == 1) {
                                                                echo "selected";
                                                            } ?>>English</option>
                                        <option value="2" <?php if ($lan == 2) {
                                                                echo "selected";
                                                            } ?>>Spanish</option>
                                    </select>
                                </div> -->
                                <div class="lang">
                                    <img src="./assets/images/usa_flag.png" alt="" class="lang_1 languageSelect" data-value = "1" onclick="changeLanguage(this)">
                                    <img src="./assets/images/spain_flag.png" alt="" class="lang_2 languageSelect" data-value = "2" onclick="changeLanguage(this)">
                                </div>
                            </li>
                        </ul>
                    </div>
                </nav>
                    <nav class="">
                        <ul class="drop-Down"> 
                        <div class="Sponsors_slider_area_1 owl-carousel owl-theme" id="nav_drop">
                            <?php
                            $sql2 = "SELECT * FROM product_category_tbl WHERE status = 1  limit 4";
                            $query2 = mysqli_query($con, $sql2);
                            if (mysqli_num_rows($query2)) {
                                foreach ($query2 as $result1) {
                            ?>
                                    <li class="drop-list">
                                        <p class="click-link"><?= $lan == 1 ? $result1['category_name_lang_1'] : $result1['category_name_lang_2'] ?> <i class="fa-solid fa-chevron-down rotate180"></i></p>
                                        <ul class="drop_item">
                                            <?php

                                            if ($lan == 1) {
                                                $product_status = 'product_status_lang_1';
                                                $product_category = 'product_category_lang_1';
                                            } else {
                                                $product_status = 'product_status_lang_2';
                                                $product_category = 'product_category_lang_2';
                                            }      
                                            $cat_id = $result1['cat_id'];
                                            
                                            $sql3 = "SELECT * FROM lang_products_tbl WHERE $product_status = 1 AND  $product_category = '$cat_id'";
                                             
                                            $pro_query1 = mysqli_query($con, $sql3);
                                            if (mysqli_num_rows($pro_query1)) {
                                                foreach ($pro_query1 as $pro_data1) {
                                            ?>
                                                    <li> 
                                                        <a href="./cart_detail.php?product_id=<?= $pro_data1['product_id'] ?>&lang=<?= $lan ?>">
                                                            <?= $lan == 1 ? $pro_data1['product_name_lang_1'] : $pro_data1['product_name_lang_2']  ?>
                                                        </a>
                                                    </li>
                                            <?php
                                                }
                                            }
                                            ?>
                                        </ul>
                                    </li>
                            <?php
                                }
                            }
                            ?>
                        </div>
                    </ul>
                    </nav>
            </div>

        </div>
    </header>
    <section class="sticky-icon">
        <a href="https://wa.me/19543725520" aria-label="Chat on WhatsApp" ><i class="fa-brands fa-whatsapp"></i></a>
        <img src="./assets/images/cart.svg" alt="" onclick="getDATA();" data-bs-toggle="modal" data-bs-target="#exampleModal">
        <span class="count"><b class="count_item" id="count_item">0</b></span>
    </section>

    <!-- Modal -->
    <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-xl">
            <div class="modal-content">
                <div class="modal-header">
                    <p>&nbsp;</p>
                    <button type="button" class="btn text-dark me-5 float-end" data-bs-dismiss="modal" aria-label="Close">Close X</button>
                </div>
                <div class="modal-body cart form_data_cart">
                    <form action="./admin/enquire_code.php" method="post" id="form_cart">
                        <div class="container">
                            <div class="row">
                                <div class="col-md-4">
                                    <h6>CART( <b id="count_cart">0</b> items)</h6>
                                    <div id="added">

                                    </div>
                                </div>
                                <div class="col-md-8 box_area">
                                    <section class="mincon_contact p-0">
                                        <div class="head pb-5">
                                            <p class="float-start"> Submit your Enquiry Below, and We'll be in Touch.</p>
                                        </div>
                                        <div class="form-group">
                                            <input type="text" class="input-box " name="name" placeholder="Name">
                                        </div>
                                        <div class="form-group">
                                            <input type="text" class="input-box" name="email" placeholder="Email Address">
                                        </div>
                                        <div class="form-group">
                                            <span id="msg_alert3" style="color:red;"></span>
                                            <input type="text" class="input-box" onkeyup="validateNumber(this,'msg_alert3')" name="mobile" placeholder="Contact Number">
                                        </div>
                                        <div class="form-group">
                                            <input type="text" class="input-box" name="company" placeholder="Company Name">
                                        </div>
                                        <div class="form-group">
                                            <input type="text" class="input-box" name="country" placeholder="Country Name">
                                        </div>
                                        <input type="hidden" class="referrer" id="referrer" name="referrer" value="">
                                        <input type="hidden" id="cart_count" name="cart_count" value="">
                                        <div class="form-group">
                                            <button class="sub-btn" name="cart_add">Submit</button>
                                        </div>
                                    </section>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>