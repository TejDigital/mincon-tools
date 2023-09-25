<?php require('./admin/config/dbcon.php');
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
                                    <p class="m-0 view_display"><a href="tel:9876543210 "> <span class="pe-1"> <i class="fa-solid fa-phone-volume"></i></span>+91 98765 43210 </a></p>
                                    <p class="m-0 none_display"><a href="tel:9876543210 "> <span class="pe-1"> <i class="fa-solid fa-phone-volume"></i></span></a></p>
                                </div>
                                <div class="div top_nav_item px-2">
                                    <p class="m-0 view_display"> <a href="mailto:info.theemanager@gmail.com "> <span class="pe-1"> <i class="fa-regular fa-envelope"></i></span> info.theemanager@gmail.com </a></p>
                                    <p class="m-0 none_display"> <a href="mailto:info.theemanager@gmail.com "> <span class="pe-1"> <i class="fa-regular fa-envelope"></i></span> </a></p>
                                </div>
                            </div>
                            <div class="head_end">
                                <div class="dropdown-area">
                                    <p class="m-0 p-0 pe-2">Language:</p>
                                    <select name="" id="languageSelect">
                                        <option value="en">English</option>
                                        <option value="hi">Hindi</option>
                                        <option value="ur">Urdu</option>
                                    </select>
                                    <!-- <div id="google_translate_element"></div> -->
                                </div>
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
                                <a class="nav-link" href="./index.php">Home </a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="./about.php">About Us</a>
                            </li>

                            <li class="nav-item">
                                <a class="nav-link" href="./products.php">Products</a>
                            </li>

                            <li class="nav-item">
                                <a class="nav-link" href="./blog.php">Blogs</a>

                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="./contact.php">Contact </a>
                            </li>
                        </ul>
                    </div>
                </nav>
                <nav class="">
                    <div class="Sponsors_slider_area_1 owl-carousel owl-theme">
                        <ul class="drop-Down">
                            <?php
                            $sql2 = "SELECT * FROM category_tbl WHERE cat_status = 1 ";
                            $query2 = mysqli_query($con, $sql2);
                            if (mysqli_num_rows($query2)) {
                                foreach ($query2 as $result1) {
                                    $cat_id1 = $result1['cat_id'];
                            ?>
                                    <li class="drop-list">
                                        <p class="click-link"><?= $result1['cat_name'] ?></p>
                                        <ul class="drop_item">
                                            <?php
                                            $sql3 = "SELECT * FROM products_tbl where product_status = '1' AND product_category = '$cat_id1'";
                                            $pro_query1 = mysqli_query($con, $sql3);
                                            if (mysqli_num_rows($pro_query1)) {
                                                foreach ($pro_query1 as $pro_data1) {
                                            ?>
                                                    <li><a href="./cart_detail.php?id=<?=$pro_data1['product_id']?>"><?= $pro_data1['product_name']?></a></li>
                                            <?php
                                                }
                                            }
                                            ?>
                                        </ul>
                                    </li>
                                    <!-- <li class="drop-list">
                            <p class="click-link">Link1</p>
                            <ul class="drop_item">
                                <li><a href="#!">link1</a></li>
                                <li><a href="#!">link1</a></li>
                                <li><a href="#!">link1</a></li>
                                <li><a href="#!">link1</a></li>
                            </ul>
                        </li> 
                         <li class="drop-list">
                            <p class="click-link">Link1</p>
                            <ul class="drop_item">
                                <li><a href="#!">link1</a></li>
                                <li><a href="#!">link1</a></li>
                                <li><a href="#!">link1</a></li>
                                <li><a href="#!">link1</a></li>
                            </ul>
                        </li>
                        <li class="drop-list">
                            <p class="click-link">Link1</p>
                            <ul class="drop_item">
                                <li><a href="#!">link1</a></li>
                                <li><a href="#!">link1</a></li>
                                <li><a href="#!">link1</a></li>
                                <li><a href="#!">link1</a></li>
                            </ul>
                        </li>
                        <li class="drop-list">
                            <p class="click-link">Link1</p>
                            <ul class="drop_item">
                                <li><a href="#!">link1</a></li>
                                <li><a href="#!">link1</a></li>
                                <li><a href="#!">link1</a></li>
                                <li><a href="#!">link1</a></li>
                            </ul>
                        </li> -->
                            <?php
                                }
                            }
                            ?>
                        </ul>
                    </div>
                </nav>
            </div>

        </div>
    </header>
    <section class="sticky-icon">
        <a href="#!"><i class="fa-brands fa-whatsapp"></i></a>
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
                                            <span id="msg_alert2" style="color:red;"></span>
                                            <input type="text" class="input-box" onkeyup="validateNumber(this,'msg_alert2')" name="mobile" placeholder="Contact Number">
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