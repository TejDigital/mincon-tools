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
        <div class="Sponsors_slider_area_2 text-center owl-carousel owl-theme" id="category-bar">
            <?php
            $sql = "SELECT * FROM category_tbl WHERE cat_status = 1 ";
            $query = mysqli_query($con, $sql);
            if (mysqli_num_rows($query)) {
                foreach ($query as $result) {
                    $cat_id = $result['cat_id'];
            ?>
                    <div class="box">
                        <a href="#pro_id<?= $result['cat_id'] ?>"><?= $result['cat_name'] ?></a>
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
        <section class="home_product" id="pro_id<?= $result['cat_id'] ?>">
            <div class="container">
                <div class="head">
                    <h1><?= $result['cat_name'] ?></h1>
                    <p><?= $result['cat_description'] ?></p>
                </div>
                <div class="boxes">
                    <div class="row form-click">
                        <?php
                        $sql1 = "SELECT * FROM products_tbl where product_status = '1' AND product_category = '$cat_id' limit 8 ";
                        $pro_query = mysqli_query($con, $sql1);
                        if (mysqli_num_rows($pro_query)) {
                            foreach ($pro_query as $pro_data) {
                        ?>
                                <div class="col-md-3 p-3">
                                    <form class="form_ID">
                                        <input type="hidden" value="<?= $pro_data['product_id'] ?>" class="product_id" name="p_id">
                                        <input type="hidden" value="<?= $pro_data['product_name'] ?>" class="product_name" name="p_name">
                                        <input type="hidden" value="<?= $pro_data['product_image'] ?>" name="image">
                                        <input type="hidden" value="<?= $result['cat_name'] ?>" name="cat_name">
                                        <div class="box">
                                            <a href="./cart_detail.php?id=<?=$pro_data['product_id']?>">
                                                <div class="img">
                                                    <img src="./admin/products_images/<?= $pro_data['product_image'] ?>" alt="">
                                                </div>
                                            </a>
                                            <div class="text">
                                                <p><?= $pro_data['product_name'] ?></p>
                                                <button type="submit" class="add" name="add">Add to Enquire</button>
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
                    <a href="./products.php?=#<?=$result['cat_name']?>">See More</a>
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