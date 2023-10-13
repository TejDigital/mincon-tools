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
                    <h1 id="home_hero_content"> <?php
                                                if (isset($content_array['home_hero_content'])) {
                                                    echo $content_array['home_hero_content'];
                                                }
                                                ?>
                    </h1>

                    <p id="home_hero_sub_content"> <?php
                                                    if (isset($content_array['home_hero_sub_content'])) {
                                                        echo $content_array['home_hero_sub_content'];
                                                    }
                                                    ?>
                    </p>
                    <a href="./products.php" id="home_hero_btn">
                        <?php
                        if (isset($content_array['home_hero_btn'])) {
                            echo $content_array['home_hero_btn'];
                        }
                        ?>
                    </a>
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
            $sql = "SELECT * FROM product_category_tbl WHERE status = 1  ";
            $query = mysqli_query($con, $sql);
            if (mysqli_num_rows($query)) {
                foreach ($query as $result) {
                    $cat_id = $result['cat_id'];
            ?>
                    <div class="box">
                        <a href="#pro_id<?= $result['cat_id'] ?>"><?= $lan == 1 ? $result['category_name_lang_1'] : $result['category_name_lang_2']  ?></a>
                    </div>
            <?php
                }
            }
            ?>
        </div>
    </div>
</section>
<?php
$sql = "SELECT * FROM product_category_tbl WHERE status = 1 ";
$query = mysqli_query($con, $sql);
if (mysqli_num_rows($query)) {
    foreach ($query as $result) {
        $cat_id = $result['cat_id'];
        $displayedProducts = 0;
?>
        <section class="home_product" id="pro_id<?= $result['cat_id'] ?>">
            <div class="container">
                <div class="head">
                    <h1><?= $lan == 1 ?  $result['category_name_lang_1'] : $result['category_name_lang_2'] ?></h1>
                    <p><?= $lan  == 1 ? $result['category_description_lang_1'] : $result['category_description_lang_2']  ?></p>
                </div>
                <div class="boxes">
                    <div class="row form-click">
                        <?php
                        if ($lan == 1) {
                            $product_status = 'product_status_lang_1';
                            $product_category = 'product_category_lang_1';
                        } else {
                            $product_status = 'product_status_lang_2';
                            $product_category = 'product_category_lang_2';
                        }
                        $sql1 = "SELECT * FROM lang_products_tbl where $product_status = '1'  AND $product_category = '$cat_id' limit 8 ";
                        $pro_query = mysqli_query($con, $sql1);
                        if (mysqli_num_rows($pro_query)) {
                            foreach ($pro_query as $pro_data) {
                                if ($displayedProducts < 8) {
                        ?>
                                    <div class="col-md-3 p-3">
                                        <form class="form_ID">
                                            <input type="hidden" value="<?= $pro_data['product_id'] ?>" class="product_id" name="p_id">
                                            <input type="hidden" value="<?= $lan == 1 ?  $pro_data['product_name_lang_1'] : $pro_data['product_name_lang_2']  ?>" class="product_name" name="p_name">
                                            <input type="hidden" value="<?= $pro_data['product_image'] ?>" name="image">
                                            <input type="hidden" value="<?= $lan ?>" name="lan_id">
                                            <input type="hidden" value="<?= $lan == 1 ? $result['category_name_lang_1']  : $result['category_name_lang_2'] ?>" name="cat_name">
                                            <div class="box">
                                                <a href="./cart_detail.php?product_id=<?= $pro_data['product_id'] ?>&lang=<?= $lan ?>">
                                                    <div class="img">
                                                        <img src="./admin/products_images/<?= $pro_data['product_image'] ?>" alt="">
                                                    </div>
                                                </a>
                                                <div class="text">
                                                    <p><?= $lan == 1 ? $pro_data['product_name_lang_1']  : $pro_data['product_name_lang_2'] ?></p>
                                                    <button type="submit" class="add" name="add" id="home_add_to_enquire">
                                                        <?php
                                                        if (isset($content_array['home_add_to_enquire'])) {
                                                            echo $content_array['home_add_to_enquire'];
                                                        }
                                                        ?>
                                                    </button>
                                                </div>
                                            </div>
                                        </form>
                                    </div>
                        <?php
                                    $displayedProducts++;
                                }
                            }
                        }
                        ?>
                    </div>
                </div>
                <?php
                if (mysqli_num_rows($pro_query) > 8) {
                ?>
                    <div class="product_btn">
                        <a class="see_more" href="./products.php?=#<?= $lan == 1 ?  $result['category_name_lang_1'] :  $result['category_name_lang_2'] ?>" id="home_content_see_more">
                            <?php
                            if (isset($content_array['home_content_see_more'])) {
                                echo $content_array['home_content_see_more'];
                            }
                            ?>
                        </a>
                    </div>
                <?php
                }
                ?>
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
                    <h1 id="contact_contact_us_name">
                        <?php
                        if (isset($content_array['contact_contact_us_name'])) {
                            echo $content_array['contact_contact_us_name'];
                        }
                        ?>
                    </h1>
                    <p id="contact_us_sub_description">
                        <?php
                        if (isset($content_array['contact_us_sub_description'])) {
                            echo $content_array['contact_us_sub_description'];
                        }
                        ?>
                        !</p>
                </div>
                <form action="./admin/connect.php" method="POST">
                    <div class="form-group">
                        <input type="text" class="input-box" id="contact_input_name_placeholder" name="name" placeholder="<?php
                                                                                                                            if (isset($content_array['contact_input_name_placeholder'])) {
                                                                                                                                echo $content_array['contact_input_name_placeholder'];
                                                                                                                            }
                                                                                                                            ?>" required>
                    </div>
                    <div class="form-group">
                        <input type="text" class="input-box" id="contact_input_email_placeholder" name="email" placeholder="<?php
                                                                                                                            if (isset($content_array['contact_input_email_placeholder'])) {
                                                                                                                                echo $content_array['contact_input_email_placeholder'];
                                                                                                                            }
                                                                                                                            ?>">
                    </div>
                    <div class="form-group">
                        <span id="msg_alert1" style="color:red;"></span>
                        <input type="tel" maxlength="10" class="input-box" id="contact_input_phone_placeholder" onkeyup="validateNumber(this,'msg_alert1')" name="mobile" placeholder="<?php
                                                                                                                                                                                            if (isset($content_array['contact_input_phone_placeholder'])) {
                                                                                                                                                                                                echo $content_array['contact_input_phone_placeholder'];
                                                                                                                                                                                            }
                                                                                                                                                                                            ?>">
                    </div>
                    <div class="form-group">
                        <input type="text" class="input-box" name="company" id="contact_input_company_placeholder" placeholder="<?php
                                                                                                                                if (isset($content_array['contact_input_company_placeholder'])) {
                                                                                                                                    echo $content_array['contact_input_company_placeholder'];
                                                                                                                                }
                                                                                                                                ?>">
                    </div>
                    <div class="form-group">
                        <!-- <input type="text" class="input-box" name="country" id="contact_input_country_placeholder" placeholder="<?php
                                                                                                                                        if (isset($content_array['contact_input_country_placeholder'])) {
                                                                                                                                            echo $content_array['contact_input_country_placeholder'];
                                                                                                                                        }
                                                                                                                                        ?>"> -->
                        <select class="input-box" name="country" id="contact_input_country_placeholder">
                            <option value=""><?php
                                                if (isset($content_array['contact_input_country_placeholder'])) {
                                                    echo $content_array['contact_input_country_placeholder'];
                                                }
                                                ?></option>
                            <option value="Afghanistan">Afghanistan</option>
                            <option value="Albania">Albania</option>
                            <option value="Algeria">Algeria</option>
                            <option value="American Samoa">American Samoa</option>
                            <option value="Andorra">Andorra</option>
                            <option value="Angola">Angola</option>
                            <option value="Anguilla">Anguilla</option>
                            <option value="Antartica">Antarctica</option>
                            <option value="Antigua and Barbuda">Antigua and Barbuda</option>
                            <option value="Argentina">Argentina</option>
                            <option value="Armenia">Armenia</option>
                            <option value="Aruba">Aruba</option>
                            <option value="Australia">Australia</option>
                            <option value="Austria">Austria</option>
                            <option value="Azerbaijan">Azerbaijan</option>
                            <option value="Bahamas">Bahamas</option>
                            <option value="Bahrain">Bahrain</option>
                            <option value="Bangladesh">Bangladesh</option>
                            <option value="Barbados">Barbados</option>
                            <option value="Belarus">Belarus</option>
                            <option value="Belgium">Belgium</option>
                            <option value="Belize">Belize</option>
                            <option value="Benin">Benin</option>
                            <option value="Bermuda">Bermuda</option>
                            <option value="Bhutan">Bhutan</option>
                            <option value="Bolivia">Bolivia</option>
                            <option value="Bosnia and Herzegowina">Bosnia and Herzegowina</option>
                            <option value="Botswana">Botswana</option>
                            <option value="Bouvet Island">Bouvet Island</option>
                            <option value="Brazil">Brazil</option>
                            <option value="British Indian Ocean Territory">British Indian Ocean Territory</option>
                            <option value="Brunei Darussalam">Brunei Darussalam</option>
                            <option value="Bulgaria">Bulgaria</option>
                            <option value="Burkina Faso">Burkina Faso</option>
                            <option value="Burundi">Burundi</option>
                            <option value="Cambodia">Cambodia</option>
                            <option value="Cameroon">Cameroon</option>
                            <option value="Canada">Canada</option>
                            <option value="Cape Verde">Cape Verde</option>
                            <option value="Cayman Islands">Cayman Islands</option>
                            <option value="Central African Republic">Central African Republic</option>
                            <option value="Chad">Chad</option>
                            <option value="Chile">Chile</option>
                            <option value="China">China</option>
                            <option value="Christmas Island">Christmas Island</option>
                            <option value="Cocos Islands">Cocos (Keeling) Islands</option>
                            <option value="Colombia">Colombia</option>
                            <option value="Comoros">Comoros</option>
                            <option value="Congo">Congo</option>
                            <option value="Congo">Congo, the Democratic Republic of the</option>
                            <option value="Cook Islands">Cook Islands</option>
                            <option value="Costa Rica">Costa Rica</option>
                            <option value="Cota D'Ivoire">Cote d'Ivoire</option>
                            <option value="Croatia">Croatia (Hrvatska)</option>
                            <option value="Cuba">Cuba</option>
                            <option value="Cyprus">Cyprus</option>
                            <option value="Czech Republic">Czech Republic</option>
                            <option value="Denmark">Denmark</option>
                            <option value="Djibouti">Djibouti</option>
                            <option value="Dominica">Dominica</option>
                            <option value="Dominican Republic">Dominican Republic</option>
                            <option value="East Timor">East Timor</option>
                            <option value="Ecuador">Ecuador</option>
                            <option value="Egypt">Egypt</option>
                            <option value="El Salvador">El Salvador</option>
                            <option value="Equatorial Guinea">Equatorial Guinea</option>
                            <option value="Eritrea">Eritrea</option>
                            <option value="Estonia">Estonia</option>
                            <option value="Ethiopia">Ethiopia</option>
                            <option value="Falkland Islands">Falkland Islands (Malvinas)</option>
                            <option value="Faroe Islands">Faroe Islands</option>
                            <option value="Fiji">Fiji</option>
                            <option value="Finland">Finland</option>
                            <option value="France">France</option>
                            <option value="France Metropolitan">France, Metropolitan</option>
                            <option value="French Guiana">French Guiana</option>
                            <option value="French Polynesia">French Polynesia</option>
                            <option value="French Southern Territories">French Southern Territories</option>
                            <option value="Gabon">Gabon</option>
                            <option value="Gambia">Gambia</option>
                            <option value="Georgia">Georgia</option>
                            <option value="Germany">Germany</option>
                            <option value="Ghana">Ghana</option>
                            <option value="Gibraltar">Gibraltar</option>
                            <option value="Greece">Greece</option>
                            <option value="Greenland">Greenland</option>
                            <option value="Grenada">Grenada</option>
                            <option value="Guadeloupe">Guadeloupe</option>
                            <option value="Guam">Guam</option>
                            <option value="Guatemala">Guatemala</option>
                            <option value="Guinea">Guinea</option>
                            <option value="Guinea-Bissau">Guinea-Bissau</option>
                            <option value="Guyana">Guyana</option>
                            <option value="Haiti">Haiti</option>
                            <option value="Heard and McDonald Islands">Heard and Mc Donald Islands</option>
                            <option value="Holy See">Holy See (Vatican City State)</option>
                            <option value="Honduras">Honduras</option>
                            <option value="Hong Kong">Hong Kong</option>
                            <option value="Hungary">Hungary</option>
                            <option value="Iceland">Iceland</option>
                            <option value="India">India</option>
                            <option value="Indonesia">Indonesia</option>
                            <option value="Iran">Iran (Islamic Republic of)</option>
                            <option value="Iraq">Iraq</option>
                            <option value="Ireland">Ireland</option>
                            <option value="Israel">Israel</option>
                            <option value="Italy">Italy</option>
                            <option value="Jamaica">Jamaica</option>
                            <option value="Japan">Japan</option>
                            <option value="Jordan">Jordan</option>
                            <option value="Kazakhstan">Kazakhstan</option>
                            <option value="Kenya">Kenya</option>
                            <option value="Kiribati">Kiribati</option>
                            <option value="Democratic People's Republic of Korea">Korea, Democratic People's Republic of</option>
                            <option value="Korea">Korea, Republic of</option>
                            <option value="Kuwait">Kuwait</option>
                            <option value="Kyrgyzstan">Kyrgyzstan</option>
                            <option value="Lao">Lao People's Democratic Republic</option>
                            <option value="Latvia">Latvia</option>
                            <option value="Lebanon" selected>Lebanon</option>
                            <option value="Lesotho">Lesotho</option>
                            <option value="Liberia">Liberia</option>
                            <option value="Libyan Arab Jamahiriya">Libyan Arab Jamahiriya</option>
                            <option value="Liechtenstein">Liechtenstein</option>
                            <option value="Lithuania">Lithuania</option>
                            <option value="Luxembourg">Luxembourg</option>
                            <option value="Macau">Macau</option>
                            <option value="Macedonia">Macedonia, The Former Yugoslav Republic of</option>
                            <option value="Madagascar">Madagascar</option>
                            <option value="Malawi">Malawi</option>
                            <option value="Malaysia">Malaysia</option>
                            <option value="Maldives">Maldives</option>
                            <option value="Mali">Mali</option>
                            <option value="Malta">Malta</option>
                            <option value="Marshall Islands">Marshall Islands</option>
                            <option value="Martinique">Martinique</option>
                            <option value="Mauritania">Mauritania</option>
                            <option value="Mauritius">Mauritius</option>
                            <option value="Mayotte">Mayotte</option>
                            <option value="Mexico">Mexico</option>
                            <option value="Micronesia">Micronesia, Federated States of</option>
                            <option value="Moldova">Moldova, Republic of</option>
                            <option value="Monaco">Monaco</option>
                            <option value="Mongolia">Mongolia</option>
                            <option value="Montserrat">Montserrat</option>
                            <option value="Morocco">Morocco</option>
                            <option value="Mozambique">Mozambique</option>
                            <option value="Myanmar">Myanmar</option>
                            <option value="Namibia">Namibia</option>
                            <option value="Nauru">Nauru</option>
                            <option value="Nepal">Nepal</option>
                            <option value="Netherlands">Netherlands</option>
                            <option value="Netherlands Antilles">Netherlands Antilles</option>
                            <option value="New Caledonia">New Caledonia</option>
                            <option value="New Zealand">New Zealand</option>
                            <option value="Nicaragua">Nicaragua</option>
                            <option value="Niger">Niger</option>
                            <option value="Nigeria">Nigeria</option>
                            <option value="Niue">Niue</option>
                            <option value="Norfolk Island">Norfolk Island</option>
                            <option value="Northern Mariana Islands">Northern Mariana Islands</option>
                            <option value="Norway">Norway</option>
                            <option value="Oman">Oman</option>
                            <option value="Pakistan">Pakistan</option>
                            <option value="Palau">Palau</option>
                            <option value="Panama">Panama</option>
                            <option value="Papua New Guinea">Papua New Guinea</option>
                            <option value="Paraguay">Paraguay</option>
                            <option value="Peru">Peru</option>
                            <option value="Philippines">Philippines</option>
                            <option value="Pitcairn">Pitcairn</option>
                            <option value="Poland">Poland</option>
                            <option value="Portugal">Portugal</option>
                            <option value="Puerto Rico">Puerto Rico</option>
                            <option value="Qatar">Qatar</option>
                            <option value="Reunion">Reunion</option>
                            <option value="Romania">Romania</option>
                            <option value="Russia">Russian Federation</option>
                            <option value="Rwanda">Rwanda</option>
                            <option value="Saint Kitts and Nevis">Saint Kitts and Nevis</option>
                            <option value="Saint LUCIA">Saint LUCIA</option>
                            <option value="Saint Vincent">Saint Vincent and the Grenadines</option>
                            <option value="Samoa">Samoa</option>
                            <option value="San Marino">San Marino</option>
                            <option value="Sao Tome and Principe">Sao Tome and Principe</option>
                            <option value="Saudi Arabia">Saudi Arabia</option>
                            <option value="Senegal">Senegal</option>
                            <option value="Seychelles">Seychelles</option>
                            <option value="Sierra">Sierra Leone</option>
                            <option value="Singapore">Singapore</option>
                            <option value="Slovakia">Slovakia (Slovak Republic)</option>
                            <option value="Slovenia">Slovenia</option>
                            <option value="Solomon Islands">Solomon Islands</option>
                            <option value="Somalia">Somalia</option>
                            <option value="South Africa">South Africa</option>
                            <option value="South Georgia">South Georgia and the South Sandwich Islands</option>
                            <option value="Span">Spain</option>
                            <option value="SriLanka">Sri Lanka</option>
                            <option value="St. Helena">St. Helena</option>
                            <option value="St. Pierre and Miguelon">St. Pierre and Miquelon</option>
                            <option value="Sudan">Sudan</option>
                            <option value="Suriname">Suriname</option>
                            <option value="Svalbard">Svalbard and Jan Mayen Islands</option>
                            <option value="Swaziland">Swaziland</option>
                            <option value="Sweden">Sweden</option>
                            <option value="Switzerland">Switzerland</option>
                            <option value="Syria">Syrian Arab Republic</option>
                            <option value="Taiwan">Taiwan, Province of China</option>
                            <option value="Tajikistan">Tajikistan</option>
                            <option value="Tanzania">Tanzania, United Republic of</option>
                            <option value="Thailand">Thailand</option>
                            <option value="Togo">Togo</option>
                            <option value="Tokelau">Tokelau</option>
                            <option value="Tonga">Tonga</option>
                            <option value="Trinidad and Tobago">Trinidad and Tobago</option>
                            <option value="Tunisia">Tunisia</option>
                            <option value="Turkey">Turkey</option>
                            <option value="Turkmenistan">Turkmenistan</option>
                            <option value="Turks and Caicos">Turks and Caicos Islands</option>
                            <option value="Tuvalu">Tuvalu</option>
                            <option value="Uganda">Uganda</option>
                            <option value="Ukraine">Ukraine</option>
                            <option value="United Arab Emirates">United Arab Emirates</option>
                            <option value="United Kingdom">United Kingdom</option>
                            <option value="United States">United States</option>
                            <option value="United States Minor Outlying Islands">United States Minor Outlying Islands</option>
                            <option value="Uruguay">Uruguay</option>
                            <option value="Uzbekistan">Uzbekistan</option>
                            <option value="Vanuatu">Vanuatu</option>
                            <option value="Venezuela">Venezuela</option>
                            <option value="Vietnam">Viet Nam</option>
                            <option value="Virgin Islands (British)">Virgin Islands (British)</option>
                            <option value="Virgin Islands (U.S)">Virgin Islands (U.S.)</option>
                            <option value="Wallis and Futana Islands">Wallis and Futuna Islands</option>
                            <option value="Western Sahara">Western Sahara</option>
                            <option value="Yemen">Yemen</option>
                            <option value="Serbia">Serbia</option>
                            <option value="Zambia">Zambia</option>
                            <option value="Zimbabwe">Zimbabwe</option>
                        </select>
                    </div>
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <select name="product_category" id="product_category" class="input-box">
                                    <option value="" id="contact_input_category_placeholder"><?php
                                                                                                if (isset($content_array['contact_input_category_placeholder'])) {
                                                                                                    echo $content_array['contact_input_category_placeholder'];
                                                                                                }
                                                                                                ?></option>
                                    <?php
                                    $sql = "SELECT * FROM product_category_tbl WHERE status = 1 ";
                                    $query = mysqli_query($con, $sql);

                                    if (mysqli_num_rows($query)) {
                                        foreach ($query as $result) {
                                            $_SESSION['id'] =  $result['cat_id'];
                                    ?>
                                            <option value="<?= $result['cat_id'] ?>,<?= $lan ?>"><?= $lan == 1 ?  $result['category_name_lang_1'] : $result['category_name_lang_2']  ?></option>
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
                                    <option value="" id="contact_input_product_placeholder"><?php
                                                                                            if (isset($content_array['contact_input_product_placeholder'])) {
                                                                                                echo $content_array['contact_input_product_placeholder'];
                                                                                            }
                                                                                            ?></option>
                                </select>
                            </div>
                        </div>
                    </div>
                    <div class="form-group">
                        <button class="sub-btn" id="contact_submit_button_name" name="submit2">
                            <?php
                            if (isset($content_array['contact_submit_button_name'])) {
                                echo $content_array['contact_submit_button_name'];
                            }
                            ?>
                        </button>
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