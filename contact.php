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
        <h1>Contact</h1>
        <p><span><a href="./index.php">Home</a></span>
            << Contact </p>
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
                    <h3>Phone Number</h3>
                    <p><a href="#!">954-372-5520</a></p>
                </div>
            </div>
            <div class="col-md-3">
                <div class="box">
                    <div class="img">
                        <img src="./assets/images/mail.svg" alt="">
                    </div>
                    <h3>Email Address</h3>
                    <p><a href="#!">mincontools@gmail.com</a></p>
                </div>
            </div>
            <div class="col-md-3">
                <div class="box">
                    <div class="img">
                        <img src="./assets/images/map.svg" alt="">
                    </div>
                    <h3>Office Address</h3>
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
                    <span id="msg_alert1" style="color:red;"></span>
                        <input type="tel" maxlength="10" class="input-box" onkeyup="validateNumber(this,'msg_alert1')" name="mobile" placeholder="Contact Number">
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
                                <select name="product_category"  id="product_category" class="input-box">
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
                        <button class="sub-btn" name="submit">Submit</button>
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
                        <h1>Our Promise to You</h1>
                        <p>If you seek mining tools that stand head and shoulders above the rest, Mincon Tools LLC is your answer. Our products speak volumes about the excellence we bring to the table. Whether you're a mining veteran or a newcomer to the field, our offerings are designed to exceed your expectations. We have tirelessly pursued innovation to cater to the evolving demands of the industry, and our commitment to enhancing your experience remains unwavering.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<section class="mincon_choose">
    <div class="container">
        <div class="row">
            <h1>Why Choose Mincon Tools ?</h1>
            <div class="col-md-6">
                <div class="text">
                    <div class="text-box">
                        <div class="img">
                            <img src="./assets/images/right-tic.svg" alt="">
                        </div>
                        <div class="des">
                            <h2>Quality Assurance</h2>
                            <p>Our tools are crafted with precision, durability, and performance in mind. Each tool is a testament to our commitment to quality.</p>
                        </div>
                    </div>
                    <div class="text-box">
                        <div class="img">
                            <img src="./assets/images/right-tic.svg" alt="">
                        </div>
                        <div class="des">
                            <h2>Innovation at Heart</h2>
                            <p>We continuously challenge the status quo to equip you with tools that outpace industry norms.</p>
                        </div>
                    </div>
                    <div class="text-box">
                        <div class="img">
                            <img src="./assets/images/right-tic.svg" alt="">
                        </div>
                        <div class="des">
                            <h2>Cost-Effective Excellence</h2>
                            <p>Recognizing your investment's worth, we engineer tools that not only ensure reliability but also offer exceptional value for your investment.</p>
                        </div>
                    </div>
                    <div class="text-box">
                        <div class="img">
                            <img src="./assets/images/right-tic.svg" alt="">
                        </div>
                        <div class="des">
                            <h2>Customer-Centric Focus</h2>
                            <p>You're our core concern. Your satisfaction fuels our endeavors, and we stand by your side at every juncture.</p>
                        </div>
                    </div>
                    <div class="text-box">
                        <div class="img">
                            <img src="./assets/images/right-tic.svg" alt="">
                        </div>
                        <div class="des">
                            <h2>Steadfast Dedication</h2>
                            <p>Amidst our evolving online presence, our dedication to furnishing impactful tools remains constant, promising you tools that truly matter.</p>
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
                    <h2>Elevating Mining and <br> Construction Excellence <br> Through Innovative Tools.</h2>
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