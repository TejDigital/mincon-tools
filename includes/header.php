<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">

    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mincon Tools</title>
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
    <link rel="stylesheet" href="./assets/css/blogs.css">
    <link rel="stylesheet" href="./assets/css/about.css">
    <!-- <link rel="stylesheet" href="./css/fancybox.min.css"> -->
</head>

<body>
    <header class="header">
        <div class="header-inner">
            <nav class="top_nav" id="top_nav">
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
                        <!-- <div class="col-md-4 d-flex align-items-center justify-content-end">
                            <div class="top_nav_social d-flex align-items-center justify-content-evenly gap-3">
                               <a href="#"> <i class="fa-brands fa-facebook"></i></a>
                               <a href="#">  <i class="fa-brands fa-instagram"></i></a>
                               <a href="#">  <i class="fa-brands fa-twitter"></i></a>
                            </div>
                        </div> -->
                    </div>
                </div>
            </nav>
            <div class="container-fluid px-lg-5">
                <nav class="navbar navbar-expand-lg my-navbar">
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
                                <a class="nav-link" href="./blogs.php">Blogs</a>
                            </li>

                            <li class="nav-item">
                                <a class="nav-link" href="./contact.php">Contact </a>
                            </li>
                        </ul>
                    </div>
                </nav>

            </div>
        </div>
    </header>
  