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
                    <h1>Building Progress, Mining Success</h1>
                    <p>Your Partner in Tools for Mining and Construction Excellence."</p>
                    <a href="#!">Explore our Products</a>
                </div>
            </div>
        </div>
    </div>
    </div>
</section>
<section class="nav-product">
    <div class="container-fluid p-0">
        <div class="Sponsors_slider_area_2 text-center owl-carousel owl-theme">
            <?php
            $sql = "SELECT * FROM category_tbl WHERE cat_status = 1 ";
            $query = mysqli_query($con, $sql);
            if (mysqli_num_rows($query)) {
                foreach ($query as $result) {
                    $cat_id = $result['cat_id'];
            ?>
                    <div class="box" >
                        <a href="#pro_id<?=$result['cat_id']?>"><?=$result['cat_name']?></a>
                    </div>
            <?php
                }
            }
            ?>
        </div>
    </div>
</section>
<?php
$sql = "SELECT * FROM category_tbl WHERE cat_status = 1 ";
$query = mysqli_query($con, $sql);
if (mysqli_num_rows($query)) {
    foreach ($query as $result) {
        $cat_id = $result['cat_id'];
?>
        <!-- <h1>Cat_name : <span><?= $result['cat_name'] ?></span></h1> -->
        <section class="home_product" id="pro_id<?=$result['cat_id']?>">
            <div class="container" >
                <div class="head">
                    <h1><?= $result['cat_name'] ?></h1>
                    <p><?= $result['cat_description'] ?></p>
                </div>
                <div class="boxes">
                    <div class="row">
                        <?php
                        $sql1 = "SELECT * FROM products_tbl where product_status = '1' AND product_category = '$cat_id' limit 8 ";
                        $pro_query = mysqli_query($con, $sql1);
                        if (mysqli_num_rows($pro_query)) {
                            foreach ($pro_query as $pro_data) {
                        ?>
                                <div class="col-md-3 p-3">
                                    <div class="box">
                                        <div class="img">
                                            <img src="./admin/products_images/<?= $pro_data['product_image'] ?>" alt="">
                                        </div>
                                        <div class="text">
                                            <p><?= $pro_data['product_name'] ?></p>
                                            <a href="#!">Add to Enquire</a>
                                        </div>
                                    </div>
                                </div>
                        <?php
                            }
                        }
                        ?>
                        <!-- 
                <div class="col-md-3 p-3">
                    <div class="box">
                        <div class="img">
                            <img src="./assets/images/mincon_product_img_1.png" alt="">
                        </div>
                        <div class="text">
                            <p>Chipping Hammer 1</p>
                            <a href="#!">Add to Enquire</a>
                        </div>
                    </div>
                </div>
                <div class="col-md-3 p-3">
                    <div class="box">
                        <div class="img">
                            <img src="./assets/images/mincon_product_img_1.png" alt="">
                        </div>
                        <div class="text">
                            <p>Chipping Hammer 1</p>
                            <a href="#!">Add to Enquire</a>
                        </div>
                    </div>
                </div>
                <div class="col-md-3 p-3">
                    <div class="box">
                        <div class="img">
                            <img src="./assets/images/mincon_product_img_1.png" alt="">
                        </div>
                        <div class="text">
                            <p>Chipping Hammer 1</p>
                            <a href="#!">Add to Enquire</a>
                        </div>
                    </div>
                </div>
                <div class="col-md-3 p-3">
                    <div class="box">
                        <div class="img">
                            <img src="./assets/images/mincon_product_img_1.png" alt="">
                        </div>
                        <div class="text">
                            <p>Chipping Hammer 1</p>
                            <a href="#!">Add to Enquire</a>
                        </div>
                    </div>
                </div>
                <div class="col-md-3 p-3">
                    <div class="box">
                        <div class="img">
                            <img src="./assets/images/mincon_product_img_1.png" alt="">
                        </div>
                        <div class="text">
                            <p>Chipping Hammer 1</p>
                            <a href="#!">Add to Enquire</a>
                        </div>
                    </div>
                </div>
                <div class="col-md-3 p-3">
                    <div class="box">
                        <div class="img">
                            <img src="./assets/images/mincon_product_img_1.png" alt="">
                        </div>
                        <div class="text">
                            <p>Chipping Hammer 1</p>
                            <a href="#!">Add to Enquire</a>
                        </div>
                    </div>
                </div>
                <div class="col-md-3 p-3">
                    <div class="box">
                        <div class="img">
                            <img src="./assets/images/mincon_product_img_1.png" alt="">
                        </div>
                        <div class="text">
                            <p>Chipping Hammer 1</p>
                            <a href="#!">Add to Enquire</a>
                        </div>
                    </div>
                </div>
                <div class="col-md-3 p-3">
                    <div class="box">
                        <div class="img">
                            <img src="./assets/images/mincon_product_img_1.png" alt="">
                        </div>
                        <div class="text">
                            <p>Chipping Hammer 1</p>
                            <a href="#!">Add to Enquire</a>
                        </div>
                    </div>
                </div> -->
                    </div>
                </div>
                <div class="product_btn">
                    <a href="./products.php?=#Chipping">See More</a>
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
<!-- <section class="home_product">
    <div class="container">
        <div class="head">
            <h1>Chipping Hammer</h1>
            <p>Lorem ipsum dolor sit amet consectetur. Lectus mus sagittis id quis imperdiet sollicitudin. Et tempus pulvinar fames ut in vestibulum gravida risus. Sodales duis consequat enim mauris. Maecenas tellus sagittis egestas velit sit egestas. Adipiscing vitae blandit venenatis tincidunt ultricies pulvinar. Leo amet metus sit leo. Viverra felis volutpat cras quam id. Viverra in lorem quisque viverra integer elementum eget. Etiam orci id mattis nisl consectetur augue quis convallis.</p>
        </div>
        <div class="boxes">
            <div class="row">
                <?php

                $cat = "SELECT * FROM category_tbl WHERE cat_status = 1";
                $cat_query = mysqli_query($con, $cat);
                $cat_data = mysqli_fetch_assoc($cat_query);
                $sql = "SELECT * FROM products_tbl where product_status = '1' AND product_category ";
                ?>
                <div class="col-md-3 p-3">
                    <div class="box">
                        <div class="img">
                            <img src="./assets/images/mincon_product_img_1.png" alt="">
                        </div>
                        <div class="text">
                            <p>Chipping Hammer 1</p>
                            <a href="#!">Add to Enquire</a>
                        </div>
                    </div>
                </div>
                <?php
                ?>
                <div class="col-md-3 p-3">
                    <div class="box">
                        <div class="img">
                            <img src="./assets/images/mincon_product_img_1.png" alt="">
                        </div>
                        <div class="text">
                            <p>Chipping Hammer 1</p>
                            <a href="#!">Add to Enquire</a>
                        </div>
                    </div>
                </div>
                <div class="col-md-3 p-3">
                    <div class="box">
                        <div class="img">
                            <img src="./assets/images/mincon_product_img_1.png" alt="">
                        </div>
                        <div class="text">
                            <p>Chipping Hammer 1</p>
                            <a href="#!">Add to Enquire</a>
                        </div>
                    </div>
                </div>
                <div class="col-md-3 p-3">
                    <div class="box">
                        <div class="img">
                            <img src="./assets/images/mincon_product_img_1.png" alt="">
                        </div>
                        <div class="text">
                            <p>Chipping Hammer 1</p>
                            <a href="#!">Add to Enquire</a>
                        </div>
                    </div>
                </div>
                <div class="col-md-3 p-3">
                    <div class="box">
                        <div class="img">
                            <img src="./assets/images/mincon_product_img_1.png" alt="">
                        </div>
                        <div class="text">
                            <p>Chipping Hammer 1</p>
                            <a href="#!">Add to Enquire</a>
                        </div>
                    </div>
                </div>
                <div class="col-md-3 p-3">
                    <div class="box">
                        <div class="img">
                            <img src="./assets/images/mincon_product_img_1.png" alt="">
                        </div>
                        <div class="text">
                            <p>Chipping Hammer 1</p>
                            <a href="#!">Add to Enquire</a>
                        </div>
                    </div>
                </div>
                <div class="col-md-3 p-3">
                    <div class="box">
                        <div class="img">
                            <img src="./assets/images/mincon_product_img_1.png" alt="">
                        </div>
                        <div class="text">
                            <p>Chipping Hammer 1</p>
                            <a href="#!">Add to Enquire</a>
                        </div>
                    </div>
                </div>
                <div class="col-md-3 p-3">
                    <div class="box">
                        <div class="img">
                            <img src="./assets/images/mincon_product_img_1.png" alt="">
                        </div>
                        <div class="text">
                            <p>Chipping Hammer 1</p>
                            <a href="#!">Add to Enquire</a>
                        </div>
                    </div>
                </div>
                <div class="col-md-3 p-3">
                    <div class="box">
                        <div class="img">
                            <img src="./assets/images/mincon_product_img_1.png" alt="">
                        </div>
                        <div class="text">
                            <p>Chipping Hammer 1</p>
                            <a href="#!">Add to Enquire</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="product_btn">
            <a href="./products.php?=#Chipping">See More</a>
        </div>
    </div>
    <div class="product_foot_img">
        <img src="./assets/images/mincon_product_bg1.png" alt="">
    </div>
</section>
<section class="home_product">
    <div class="container">
        <div class="head">
            <h1>Rock Drills</h1>
            <p>Lorem ipsum dolor sit amet consectetur. Lectus mus sagittis id quis imperdiet sollicitudin. Et tempus pulvinar fames ut in vestibulum gravida risus. Sodales duis consequat enim mauris. Maecenas tellus sagittis egestas velit sit egestas. Adipiscing vitae blandit venenatis tincidunt ultricies pulvinar. Leo amet metus sit leo. Viverra felis volutpat cras quam id. Viverra in lorem quisque viverra integer elementum eget. Etiam orci id mattis nisl consectetur augue quis convallis.</p>
        </div>
        <div class="boxes">
            <div class="row">
                <div class="col-md-3 p-3">
                    <div class="box">
                        <div class="img">
                            <img src="./assets/images/mincon_product_img_1.png" alt="">
                        </div>
                        <div class="text">
                            <p>Rock Drills 1</p>
                            <a href="#!">Add to Enquire</a>
                        </div>
                    </div>
                </div>
                <div class="col-md-3 p-3">
                    <div class="box">
                        <div class="img">
                            <img src="./assets/images/mincon_product_img_1.png" alt="">
                        </div>
                        <div class="text">
                            <p>Rock Drills 1</p>
                            <a href="#!">Add to Enquire</a>
                        </div>
                    </div>
                </div>
                <div class="col-md-3 p-3">
                    <div class="box">
                        <div class="img">
                            <img src="./assets/images/mincon_product_img_1.png" alt="">
                        </div>
                        <div class="text">
                            <p>Rock Drills 1</p>
                            <a href="#!">Add to Enquire</a>
                        </div>
                    </div>
                </div>
                <div class="col-md-3 p-3">
                    <div class="box">
                        <div class="img">
                            <img src="./assets/images/mincon_product_img_1.png" alt="">
                        </div>
                        <div class="text">
                            <p>Rock Drills 1</p>
                            <a href="#!">Add to Enquire</a>
                        </div>
                    </div>
                </div>
                <div class="col-md-3 p-3">
                    <div class="box">
                        <div class="img">
                            <img src="./assets/images/mincon_product_img_1.png" alt="">
                        </div>
                        <div class="text">
                            <p>Rock Drills 1</p>
                            <a href="#!">Add to Enquire</a>
                        </div>
                    </div>
                </div>
                <div class="col-md-3 p-3">
                    <div class="box">
                        <div class="img">
                            <img src="./assets/images/mincon_product_img_1.png" alt="">
                        </div>
                        <div class="text">
                            <p>Rock Drills 1</p>
                            <a href="#!">Add to Enquire</a>
                        </div>
                    </div>
                </div>
                <div class="col-md-3 p-3">
                    <div class="box">
                        <div class="img">
                            <img src="./assets/images/mincon_product_img_1.png" alt="">
                        </div>
                        <div class="text">
                            <p>Rock Drills 1</p>
                            <a href="#!">Add to Enquire</a>
                        </div>
                    </div>
                </div>
                <div class="col-md-3 p-3">
                    <div class="box">
                        <div class="img">
                            <img src="./assets/images/mincon_product_img_1.png" alt="">
                        </div>
                        <div class="text">
                            <p>Rock Drills 1</p>
                            <a href="#!">Add to Enquire</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="product_btn">
            <a href="./products.php?=#Rock">See More</a>
        </div>
    </div>
    <div class="product_foot_img">
        <img src="./assets/images/mincon_product_bg1.png" alt="">
    </div>
</section>
<section class="home_product">
    <div class="container">
        <div class="head">
            <h1>Breaker</h1>
            <p>Lorem ipsum dolor sit amet consectetur. Lectus mus sagittis id quis imperdiet sollicitudin. Et tempus pulvinar fames ut in vestibulum gravida risus. Sodales duis consequat enim mauris. Maecenas tellus sagittis egestas velit sit egestas. Adipiscing vitae blandit venenatis tincidunt ultricies pulvinar. Leo amet metus sit leo. Viverra felis volutpat cras quam id. Viverra in lorem quisque viverra integer elementum eget. Etiam orci id mattis nisl consectetur augue quis convallis.</p>
        </div>
        <div class="boxes">
            <div class="row">
                <div class="col-md-3 p-3">
                    <div class="box">
                        <div class="img">
                            <img src="./assets/images/mincon_product_img_1.png" alt="">
                        </div>
                        <div class="text">
                            <p>Breaker 1</p>
                            <a href="#!">Add to Enquire</a>
                        </div>
                    </div>
                </div>
                <div class="col-md-3 p-3">
                    <div class="box">
                        <div class="img">
                            <img src="./assets/images/mincon_product_img_1.png" alt="">
                        </div>
                        <div class="text">
                            <p>Breaker 1</p>
                            <a href="#!">Add to Enquire</a>
                        </div>
                    </div>
                </div>
                <div class="col-md-3 p-3">
                    <div class="box">
                        <div class="img">
                            <img src="./assets/images/mincon_product_img_1.png" alt="">
                        </div>
                        <div class="text">
                            <p>Breaker 1</p>
                            <a href="#!">Add to Enquire</a>
                        </div>
                    </div>
                </div>
                <div class="col-md-3 p-3">
                    <div class="box">
                        <div class="img">
                            <img src="./assets/images/mincon_product_img_1.png" alt="">
                        </div>
                        <div class="text">
                            <p>Breaker 1</p>
                            <a href="#!">Add to Enquire</a>
                        </div>
                    </div>
                </div>
                <div class="col-md-3 p-3">
                    <div class="box">
                        <div class="img">
                            <img src="./assets/images/mincon_product_img_1.png" alt="">
                        </div>
                        <div class="text">
                            <p>Breaker 1</p>
                            <a href="#!">Add to Enquire</a>
                        </div>
                    </div>
                </div>
                <div class="col-md-3 p-3">
                    <div class="box">
                        <div class="img">
                            <img src="./assets/images/mincon_product_img_1.png" alt="">
                        </div>
                        <div class="text">
                            <p>Breaker 1</p>
                            <a href="#!">Add to Enquire</a>
                        </div>
                    </div>
                </div>
                <div class="col-md-3 p-3">
                    <div class="box">
                        <div class="img">
                            <img src="./assets/images/mincon_product_img_1.png" alt="">
                        </div>
                        <div class="text">
                            <p>Breaker 1</p>
                            <a href="#!">Add to Enquire</a>
                        </div>
                    </div>
                </div>
                <div class="col-md-3 p-3">
                    <div class="box">
                        <div class="img">
                            <img src="./assets/images/mincon_product_img_1.png" alt="">
                        </div>
                        <div class="text">
                            <p>Breaker 1</p>
                            <a href="#!">Add to Enquire</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="product_btn">
            <a href="./products.php?=#Breaker">See More</a>
        </div>
    </div>
    <div class="product_foot_img">
        <img src="./assets/images/mincon_product_bg1.png" alt="">
    </div>
</section>
<section class="home_product">
    <div class="container">
        <div class="head">
            <h1>Pick Hammer</h1>
            <p>Lorem ipsum dolor sit amet consectetur. Lectus mus sagittis id quis imperdiet sollicitudin. Et tempus pulvinar fames ut in vestibulum gravida risus. Sodales duis consequat enim mauris. Maecenas tellus sagittis egestas velit sit egestas. Adipiscing vitae blandit venenatis tincidunt ultricies pulvinar. Leo amet metus sit leo. Viverra felis volutpat cras quam id. Viverra in lorem quisque viverra integer elementum eget. Etiam orci id mattis nisl consectetur augue quis convallis.</p>
        </div>
        <div class="boxes">
            <div class="row">
                <div class="col-md-3 p-3">
                    <div class="box">
                        <div class="img">
                            <img src="./assets/images/mincon_product_img_1.png" alt="">
                        </div>
                        <div class="text">
                            <p>Pick Hammer 1</p>
                            <a href="#!">Add to Enquire</a>
                        </div>
                    </div>
                </div>
                <div class="col-md-3 p-3">
                    <div class="box">
                        <div class="img">
                            <img src="./assets/images/mincon_product_img_1.png" alt="">
                        </div>
                        <div class="text">
                            <p>Pick Hammer 1</p>
                            <a href="#!">Add to Enquire</a>
                        </div>
                    </div>
                </div>
                <div class="col-md-3 p-3">
                    <div class="box">
                        <div class="img">
                            <img src="./assets/images/mincon_product_img_1.png" alt="">
                        </div>
                        <div class="text">
                            <p>Pick Hammer 1</p>
                            <a href="#!">Add to Enquire</a>
                        </div>
                    </div>
                </div>
                <div class="col-md-3 p-3">
                    <div class="box">
                        <div class="img">
                            <img src="./assets/images/mincon_product_img_1.png" alt="">
                        </div>
                        <div class="text">
                            <p>Pick Hammer 1</p>
                            <a href="#!">Add to Enquire</a>
                        </div>
                    </div>
                </div>
                <div class="col-md-3 p-3">
                    <div class="box">
                        <div class="img">
                            <img src="./assets/images/mincon_product_img_1.png" alt="">
                        </div>
                        <div class="text">
                            <p>Pick Hammer 1</p>
                            <a href="#!">Add to Enquire</a>
                        </div>
                    </div>
                </div>
                <div class="col-md-3 p-3">
                    <div class="box">
                        <div class="img">
                            <img src="./assets/images/mincon_product_img_1.png" alt="">
                        </div>
                        <div class="text">
                            <p>Pick Hammer 1</p>
                            <a href="#!">Add to Enquire</a>
                        </div>
                    </div>
                </div>
                <div class="col-md-3 p-3">
                    <div class="box">
                        <div class="img">
                            <img src="./assets/images/mincon_product_img_1.png" alt="">
                        </div>
                        <div class="text">
                            <p>Pick Hammer 1</p>
                            <a href="#!">Add to Enquire</a>
                        </div>
                    </div>
                </div>
                <div class="col-md-3 p-3">
                    <div class="box">
                        <div class="img">
                            <img src="./assets/images/mincon_product_img_1.png" alt="">
                        </div>
                        <div class="text">
                            <p>Pick Hammer 1</p>
                            <a href="#!">Add to Enquire</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="product_btn">
            <a href="./products.php?=#Pick">See More</a>
        </div>
    </div>
    <div class="product_foot_img">
        <img src="./assets/images/mincon_product_bg1.png" alt="">
    </div>
</section>
<section class="home_product">
    <div class="container">
        <div class="head">
            <h1>Lubricator</h1>
            <p>Lorem ipsum dolor sit amet consectetur. Lectus mus sagittis id quis imperdiet sollicitudin. Et tempus pulvinar fames ut in vestibulum gravida risus. Sodales duis consequat enim mauris. Maecenas tellus sagittis egestas velit sit egestas. Adipiscing vitae blandit venenatis tincidunt ultricies pulvinar. Leo amet metus sit leo. Viverra felis volutpat cras quam id. Viverra in lorem quisque viverra integer elementum eget. Etiam orci id mattis nisl consectetur augue quis convallis.</p>
        </div>
        <div class="boxes">
            <div class="row">
                <div class="col-md-3 p-3">
                    <div class="box">
                        <div class="img">
                            <img src="./assets/images/mincon_product_img_1.png" alt="">
                        </div>
                        <div class="text">
                            <p>Lubricator 1</p>
                            <a href="#!">Add to Enquire</a>
                        </div>
                    </div>
                </div>
                <div class="col-md-3 p-3">
                    <div class="box">
                        <div class="img">
                            <img src="./assets/images/mincon_product_img_1.png" alt="">
                        </div>
                        <div class="text">
                            <p>Lubricator 1</p>
                            <a href="#!">Add to Enquire</a>
                        </div>
                    </div>
                </div>
                <div class="col-md-3 p-3">
                    <div class="box">
                        <div class="img">
                            <img src="./assets/images/mincon_product_img_1.png" alt="">
                        </div>
                        <div class="text">
                            <p>Lubricator 1</p>
                            <a href="#!">Add to Enquire</a>
                        </div>
                    </div>
                </div>
                <div class="col-md-3 p-3">
                    <div class="box">
                        <div class="img">
                            <img src="./assets/images/mincon_product_img_1.png" alt="">
                        </div>
                        <div class="text">
                            <p>Lubricator 1</p>
                            <a href="#!">Add to Enquire</a>
                        </div>
                    </div>
                </div>
                <div class="col-md-3 p-3">
                    <div class="box">
                        <div class="img">
                            <img src="./assets/images/mincon_product_img_1.png" alt="">
                        </div>
                        <div class="text">
                            <p>Lubricator 1</p>
                            <a href="#!">Add to Enquire</a>
                        </div>
                    </div>
                </div>
                <div class="col-md-3 p-3">
                    <div class="box">
                        <div class="img">
                            <img src="./assets/images/mincon_product_img_1.png" alt="">
                        </div>
                        <div class="text">
                            <p>Lubricator 1</p>
                            <a href="#!">Add to Enquire</a>
                        </div>
                    </div>
                </div>
                <div class="col-md-3 p-3">
                    <div class="box">
                        <div class="img">
                            <img src="./assets/images/mincon_product_img_1.png" alt="">
                        </div>
                        <div class="text">
                            <p>Lubricator 1</p>
                            <a href="#!">Add to Enquire</a>
                        </div>
                    </div>
                </div>
                <div class="col-md-3 p-3">
                    <div class="box">
                        <div class="img">
                            <img src="./assets/images/mincon_product_img_1.png" alt="">
                        </div>
                        <div class="text">
                            <p>Lubricator 1</p>
                            <a href="#!">Add to Enquire</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="product_btn">
            <a href="./products.php?=#Lubricator">See More</a>
        </div>
    </div>
    <div class="product_foot_img">
        <img src="./assets/images/mincon_product_bg1.png" alt="">
    </div>
</section> -->
<section class="mincon_contact">
    <div class="container">
        <div class="row flex-change">
            <div class="col-md-6">
                <div class="head">
                    <h1>Contact US</h1>
                    <p>Feel Free to reach out to us!</p>
                </div>
                <form action="./admin/connect.php" method="POST">
                    <div class="form-group">
                        <input type="text" class="input-box" name="name" placeholder="Name">
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
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <select name="product_category" id="product_category" class="input-box">
                                    <option value="">Select Category</option>
                                    <?php
                                    $sql = "SELECT * FROM category_tbl WHERE cat_status = 1 ";
                                    $query = mysqli_query($con, $sql);

                                    if (mysqli_num_rows($query)) {
                                        foreach ($query as $result) {
                                            $_SESSION['id'] =  $result['cat_id'];
                                    ?>
                                            <option value="<?= $result['cat_id'] ?>"><?= $result['cat_name'] ?></option>
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
                                    <option value="">Select Product</option>
                                </select>
                            </div>
                        </div>
                    </div>
                    <div class="form-group">
                        <button class="sub-btn" name="submit2">Submit</button>
                    </div>
                </form>
            </div>
            <div class="col-md-6">
                <div class="img">
                    <img src="./assets/images/mincon_contact_bg1.png" alt="">
                </div>
            </div>
        </div>
    </div>
</section>
<?php require('./includes/footer.php') ?>
<?php require('./includes/script.php') ?>