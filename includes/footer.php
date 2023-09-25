 <footer class="text-center text-lg-start text-light">
     <section class="pt-2">
         <div class="container">
             <div class="row mt-3">
                 <div class="col-md-12 logo_icon">
                     <div class="footer_logo_area">
                         <a href="index.php">
                             <img src="./assets/images/logo_2.svg" class="img-fluid">
                         </a>
                     </div>
                     <div class="social_icons">
                         <a href="#!"> <i class="fa-brands fa-facebook"></i></a>
                         <a href="#!"> <i class="fa-brands fa-instagram"></i></a>
                         <a href="#!"> <i class="fa-brands fa-twitter"></i></a>
                     </div>
                 </div>
             </div>
            <div class="row product_links">
                <h2>Our Products:</h2>
                <?php
                $sql2 = "SELECT * FROM category_tbl WHERE cat_status = 1 ";
                $query2 = mysqli_query($con, $sql2);
                if (mysqli_num_rows($query2)) {
                    foreach ($query2 as $result1) {
                        $cat_id1 = $result1['cat_id'];
                ?>
                <div class="col-md-3">
                    <ul>
                        <li>
                            <h4 class="m-0 p-0"><?=$result1['cat_name']?></h4>
                        </li>
                        <?php
                         $sql3 = "SELECT * FROM products_tbl where product_status = '1' AND product_category = '$cat_id1' ";
                         $pro_query1 = mysqli_query($con, $sql3);
                         if (mysqli_num_rows($pro_query1)) {
                             foreach ($pro_query1 as $pro_data1) {
                        ?>
                        <li><a href="./cart_detail.php?id=<?=$pro_data1['product_id']?>"><?= $pro_data1['product_name']?> </a></li>
                        <?php
                             }
                            }
                        ?>
                    </ul>
                </div>
                
                <!-- <div class="col-md-3">
                    <ul>
                        <li>
                            <h4 class="m-0 p-0">Chipping Hammer</h4>
                        </li>
                        <li><a href="#!">Chipping Hammer 1 </a></li>
                        <li><a href="#!">Chipping Hammer 2 </a></li>
                        <li><a href="#!">Chipping Hammer 3 </a></li>
                        <li><a href="#!">Chipping Hammer 4 </a></li>
                        <li><a href="#!">Chipping Hammer 5 </a></li>
                        <li><a href="#!">Chipping Hammer 6 </a></li>
                        <li><a href="#!">Chipping Hammer 7 </a></li>
                        <li><a href="#!">Chipping Hammer 8 </a></li>
                    </ul>
                </div>
                <div class="col-md-3">
                    <ul>
                        <li>
                            <h4 class="m-0 p-0">Rock Drills</h4>
                        </li>
                        <li><a href="#!">Rock Drills 1 </a></li>
                        <li><a href="#!">Rock Drills 2 </a></li>
                        <li><a href="#!">Rock Drills 3 </a></li>
                        <li><a href="#!">Rock Drills 4 </a></li>
                        <li><a href="#!">Rock Drills 5 </a></li>
                        <li><a href="#!">Rock Drills 6 </a></li>
                        <li><a href="#!">Rock Drills 7 </a></li>
                        <li><a href="#!">Rock Drills 8 </a></li>
                        <li><a href="#!">Rock Drills 9 </a></li>
                        <li><a href="#!">Rock Drills 10 </a></li>
                        <li><a href="#!">Rock Drills 11 </a></li>
                    </ul>
                </div>
                <div class="col-md-3">
                    <ul>
                        <li>
                            <h4 class="m-0 p-0">Breaker</h4>
                        </li>
                        <li><a href="#!">Breaker 1</a></li>
                        <li><a href="#!">Breaker 2</a></li>
                        <li><a href="#!">Breaker 3</a></li>
                        <li><a href="#!">Breaker 4</a></li>
                        <li><a href="#!">Breaker 5</a></li>
                        <li><a href="#!">Breaker 6</a></li>
                        <li><a href="#!">Breaker 7</a></li>
                        <li><a href="#!">Breaker 8</a></li>
                        <li><a href="#!">Breaker 9</a></li>
                        <li><a href="#!">Breaker 10</a></li>
                        <li><a href="#!">Breaker 11</a></li>
                    </ul>
                </div>
                <div class="col-md-3">
                    <ul>
                        <li>
                            <h4 class="m-0 p-0">Pick Hammer</h4>
                        </li>
                        <li><a href="#!">Pick Hammer 1</a></li>
                        <li><a href="#!">Pick Hammer 2</a></li>
                        <li><a href="#!">Pick Hammer 3</a></li>
                        <li><a href="#!">Pick Hammer 4</a></li>
                        <li><a href="#!">Pick Hammer 5</a></li>
                        <li><a href="#!">Pick Hammer 6</a></li>
                        <li><a href="#!">Pick Hammer 7</a></li>
                        <li><a href="#!">Pick Hammer 8</a></li>
                        <li><a href="#!">Pick Hammer 9</a></li>
                        <li><a href="#!">Pick Hammer 10</a></li>
                        <li><a href="#!">Pick Hammer 11</a></li>
                    </ul>
                </div>
                <div class="col-md-3">
                    <ul>
                        <li>
                            <h4 class="m-0 p-0">Lubricator</h4>
                        </li>
                        <li><a href="#!">Lubricator 1 </a></li>
                        <li><a href="#!">Lubricator 2 </a></li>
                        <li><a href="#!">Lubricator 3 </a></li>
                        <li><a href="#!">Lubricator 4 </a></li>
                        <li><a href="#!">Lubricator 5 </a></li>
                    </ul>
                </div> -->
                <?php
                    }
                }
                ?>
            </div>
            <div class="row contact_links">
                <div class="col-md-12">
                    <div class="contact">
                        <a href="#!"><i class="fa-brands fa-whatsapp"></i>+1 954 372 5520</a>
                        <a href="#!"> <i class="fa-regular fa-envelope"></i>info@mincontools.com</a>
                    </div>
                </div>
            </div>
            <div class="row navigate">
                <div class="col-md-12 nav_links">
                    <div class="links">
                        <h4>Quick Links:</h4>
                        <a href="./index.php" cla>Home</a>
                        <a href="./about.php">About Us</a>
                        <a href="./products.php">Product</a>
                        <a href="./blog.php">Blogs</a>
                        <a href="./contact.php">Contact</a>
                    </div>
                    <div class="social_icons">
                         <a href="#!"> <i class="fa-brands fa-facebook"></i></a>
                         <a href="#!"> <i class="fa-brands fa-instagram"></i></a>
                         <a href="#!"> <i class="fa-brands fa-twitter"></i></a>
                     </div>
                    <div class="policy">
                        <p><a href="#!">Privacy Policy • Terms and Conditions</a></p>
                    </div>
                </div>
            </div>
             <div class="text-center footer_end">
                 <p>Copyright reserved by <span class="fw-bold">Mincon Tools </span>| Designed and managed by <a class="text-reset fw-bold" href="https://digitalshakha.in/">Digitalshakha</a></p>
             </div>
     </section>
 </footer>