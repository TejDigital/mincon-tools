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
                 <h2> <?php
                        if (isset($content_array['footer_heading_h2'])) {
                            echo $content_array['footer_heading_h2'];
                        }
                        ?>:
                 </h2>
                 <?php
                    $sql2 = "SELECT * FROM product_category_tbl WHERE status = 1 ";
                    $query2 = mysqli_query($con, $sql2);
                    if (mysqli_num_rows($query2)) {
                        foreach ($query2 as $result1) {
                            $cat_id1 = $result1['cat_id'];
                    ?>
                         <div class="col-md-3">
                             <ul>
                                 <li>
                                     <h4 class="m-0 p-0"><?= $lan == 1 ?  $result1['category_name_lang_1'] : $result1['category_name_lang_2'] ?></h4>
                                 </li>
                                 <?php
                                     if ($lan == 1) {
                                        $product_status = 'product_status_lang_1';
                                        $product_category = 'product_category_lang_1';
                                    } else {
                                        $product_status = 'product_status_lang_2';
                                        $product_category = 'product_category_lang_2';
                                    }   
                                    $sql3 = "SELECT * FROM lang_products_tbl where $product_status = '1'  and $product_category ='$cat_id1'";
                                    $pro_query1 = mysqli_query($con, $sql3);
                                    if (mysqli_num_rows($pro_query1)) {
                                        foreach ($pro_query1 as $pro_data1) {
                                    ?>
                                         <li> <a href="./cart_detail.php?product_id=<?= $pro_data1['product_id'] ?>&lang=<?= $lan ?>">
                                                 <?= $lan == 1 ?  $pro_data1['product_name_lang_1']  : $pro_data1['product_name_lang_2']?> </a></li>
                                 <?php
                                        }
                                    }
                                    ?>
                             </ul>
                         </div>
                 <?php
                        }
                    }
                    ?>
             </div>
             <div class="row contact_links">
                 <div class="col-md-12">
                     <div class="contact">
                         <a href="tel:+1954372 5520"><i class="fa-brands fa-whatsapp"></i> +1 (954) 372 5520</a>
                         <a href="info@mincontools.com"> <i class="fa-regular fa-envelope"></i>info@mincontools.com</a>
                     </div>
                 </div>
             </div>
             <div class="row navigate">
                 <div class="col-md-12 nav_links">
                     <div class="links" >
                         <h4 id="footer_link_head"> <?php
                                if (isset($content_array['footer_link_head'])) {
                                    echo $content_array['footer_link_head'];
                                }
                                ?>:
                         </h4>
                         <a href="./index.php"  id="footer_link_home"><?php
                                if (isset($content_array['footer_link_home'])) {
                                    echo $content_array['footer_link_home'];
                                }
                                ?>
                                </a>
                         <a href="./about.php" id="footer_link_about">
                         <?php
                                if (isset($content_array['footer_link_about'])) {
                                    echo $content_array['footer_link_about'];
                                }
                                ?>
                         </a>
                         <a href="./products.php" id="footer_link_product">
                         <?php
                                if (isset($content_array['footer_link_product'])) {
                                    echo $content_array['footer_link_product'];
                                }
                                ?>
                         </a>
                         <a href="./blog.php" id="footer_link_blog">
                         <?php
                                if (isset($content_array['footer_link_blog'])) {
                                    echo $content_array['footer_link_blog'];
                                }
                                ?>
                         </a>
                         <a href="./contact.php" id="footer_link_contact">
                         <?php
                                if (isset($content_array['footer_link_contact'])) {
                                    echo $content_array['footer_link_contact'];
                                }
                                ?>
                         </a>
                     </div>
                     <div class="social_icons">
                         <a href="#!"> <i class="fa-brands fa-facebook"></i></a>
                         <a href="#!"> <i class="fa-brands fa-instagram"></i></a>
                         <a href="#!"> <i class="fa-brands fa-twitter"></i></a>
                     </div>
                     <div class="policy d-flex">
                         <p><a href="#!" id="footer_privacy_content"> <?php
                                if (isset($content_array['footer_privacy_content'])) {
                                    echo $content_array['footer_privacy_content'];
                                }
                                ?> •</a></p>
                         <p><a href="#!" id="footer_terms_content">
                         <?php
                                if (isset($content_array['footer_terms_content'])) {
                                    echo $content_array['footer_terms_content'];
                                }
                                ?>
                         </a></p>
                     </div>
                 </div>
             </div>
             <div class="text-center footer_end">
                 <p id="footer_end_copyright_content">
                 <?php
                                if (isset($content_array['footer_end_copyright_content'])) {
                                    echo $content_array['footer_end_copyright_content'];
                                }
                                ?>
                 </p>
             </div>
     </section>
 </footer>