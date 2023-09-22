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
        <h1>About Us</h1>
        <p><span><a href="./index.php">Home</a></span>
            << About us </p>
    </div>
</section>
<section class="about_2">
    <div class="container">
        <div class="row flex-change">
            <div class="col-md-6">
                <div class="text">
                    <h1>About Mincon Tools</h1>
                    <p>Welcome to Mincon Tools - Your Partner in Precision Drilling Solutions!</p>
                    <p>At Mincon Tools LLC, we have a legacy of being a trusted provider of top-notch tools for numerous years. We are excited to take our commitment a step further by directly engaging with our customers and sharing the resulting savings with them. We recognize the significance of equipping professionals with the right tools, enabling them to carry out their tasks safely and efficiently. Our team of experts dedicates themselves to crafting and producing innovative mining tools that embody reliability and cost-effectiveness.</p>
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
                    <p>In an industry where established competitors flaunt feature-rich websites, we acknowledge that our website might be in its early stages. However, our products are a testament to our dedication. Our focus has been set on creating mining tools of unparalleled quality and longevity. Our diligent team has poured their efforts into developing pioneering solutions that impeccably address the requirements of contemporary mining professionals. While we are actively working on enhancing our online presence, rest assured that our commitment to upholding quality and ensuring customer satisfaction remains steadfast.</p>
                    <div class="btn1">
                        <a href="./contact.php">Contact Us Now</a>
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