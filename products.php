<?php require('./includes/header.php'); ?>
<?php require('./admin/config/dbcon.php'); ?>

<section class="top_hero">
    <div class="img">
        <img src="./assets/images/mincon_hero_bg1.png" alt="">
    </div>
    <div class="top_hero_text">
        <h1>Products</h1>
        <p><span><a href="./index.php">Home</a></span>
            << Products </p>
    </div>
</section>
<?php
$sql = "SELECT * FROM category_tbl WHERE cat_status = 1";
$query = mysqli_query($con, $sql);
if (mysqli_num_rows($query)) {
    foreach ($query as $result) {
?>
        <section class="home_product product_line" id="Chipping">
            <div class="container">
                <div class="head">
                <h1><?= $result['cat_name'] ?></h1>
                    <p><?= $result['cat_description'] ?></p>
                </div>
                <div class="boxes">
                    <div class="row">
                        <?php
                        $sql1 = "SELECT * FROM products_tbl where product_status = '1' AND product_category = '" . $result['cat_id'] . "' ";
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
                        <!-- <div class="col-md-3 p-3">
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

            </div>

        </section>
<?php
    }
}
?>
<!-- <section class="home_product product_line" id="Chipping">
    <div class="container">
        <div class="head">
            <h1>Chipping Hammer</h1>
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
    
    </div>
   
</section> -->
<!-- <section class="home_product product_line" id="Rock">
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
    </div>
  
</section>
<section class="home_product product_line" id="Breaker">
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
    </div>
</section>
<section class="home_product product_line" id="Pick">
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
    </div>
</section>
<section class="home_product" id="Lubricator">
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
    </div>
</section> -->

<section class="mincon_sky">
    <div class="container-fluid p-0">
        <div class="row m-0 p-0">
            <div class="col-md-12 p-0">
                <div class="img">
                    <img src="./assets/images/mincon_hero_bg2.png" alt="">
                </div>
                <div class="text">
                    <h2>Elevating Mining and <br> Construction Excellence <br> Through Innovative Tools.</h2>
                    <img src="./assets/images/logo_1.svg" alt="">
                </div>
            </div>
        </div>
    </div>
</section>
<?php require('./includes/footer.php') ?>
<?php require('./includes/script.php') ?>