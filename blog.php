<?php require('./admin/config/dbcon.php'); ?>
<?php require('./includes/header.php'); ?>
<div class="as_main_wrapper as_blog_page">
    <h1 id="blog_heading">
        <?php
        if (isset($content_array['blog_heading'])) {
            echo $content_array['blog_heading'];
        }
        ?>
    </h1>
    <section class="as_blog_wrapper ">
        <div class="container">
            <div class="row">
                <div class="col-lg-3 col-md-4 col-sm-12 col-xs-12">
                    <div class="as_shop_sidebar">
                        <div class="as_widget as_search_widget">
                            <?php
                            if (isset($_GET['keybord'])) {
                                $keybord = $_GET['keybord'];
                            } else {
                                $keybord = "";
                            }
                            ?>
                            <form action="search_blog.php" method="get">
                                <input id="blog_search_placeholder" type="text" name="keybord" class="form-control" maxlength="60" value="<?= $keybord ?>" autocomplete="off" placeholder="<?php
                                                                                                                                                                                            if (isset($content_array['blog_search_placeholder'])) {
                                                                                                                                                                                                echo $content_array['blog_search_placeholder'];
                                                                                                                                                                                            }                                                                                                                                                        ?>" />
                                <button type="submit"><i class="fa-solid fa-magnifying-glass"></i></button>
                            </form>
                        </div>
                        <div class=" as_category_widget">
                            <h3 class="as_widget_title" style="color: #EBAB56;;" id="blog_category_name">
                                <?php
                                if (isset($content_array['blog_category_name'])) {
                                    echo $content_array['blog_category_name'];
                                }
                                ?>
                            </h3>
                            <?php
                            $select = "SELECT * FROM blog_category_tbl where lang_id = '$lan'";
                            $query = mysqli_query($con, $select);
                            $rows = mysqli_num_rows($query);
                            while ($result = mysqli_fetch_assoc($query)) {
                            ?>
                                <ul>
                                    <li class="d-flex align-items-center justify-content-between"><a href="category_blog.php?cat_id=<?= $result['blog_cat_id'] ?>&lang=<?= $lan ?>">
                                            <?= $result['blog_cat_name'] ?>
                                        </a>
                                        <?php
                                        $id = $result['blog_cat_id'];
                                        $sql1 = "SELECT * FROM blog_tbl where category='$id'";
                                        $query1 = mysqli_query($con, $sql1);
                                        $rows = mysqli_num_rows($query1);
                                        if ($rows) {
                                        ?>
                                            <span class="badge text-danger rounded-pill"><?= $rows ?></span>
                                        <?php
                                        }
                                        ?>
                                    </li>
                                </ul>
                            <?php
                            }
                            ?>
                        </div>


                        <div class="as_widget as_product_widget as_post_widget">
                            <h3 class="as_widget_title" id="blog_recent_post">
                                <?php
                                if (isset($content_array['blog_recent_post'])) {
                                    echo $content_array['blog_recent_post'];
                                }
                                ?>
                            </h3>
                            <ul>
                                <?php
                                $select = "SELECT * FROM blog_tbl LEFT JOIN blog_category_tbl ON blog_tbl.category = blog_category_tbl.blog_cat_id where lang_id = '$lan' And blog_lang_id = '$lan'   ORDER BY blog_tbl.created_at DESC LIMIT 4";
                                $query = mysqli_query($con, $select);
                                $rows = mysqli_num_rows($query);
                                while ($result = mysqli_fetch_assoc($query)) {
                                ?>
                                    <li class="as_product p-0">
                                        <a href="category_blog.php?cat_id=<?= $result['blog_cat_id'] ?>">
                                            <div class="as_productimg">
                                                <!-- <img src="admin/blog_des_files/<?= $result['image'] ?>" alt=""> -->
                                            </div>
                                            <br>
                                            <div class="as_product_detail p-0">
                                                <span style="font-size: 0.8rem;"><i class="fa-solid fa-calendar-days"></i> <?= $result['date'] ?></span>
                                                <br>
                                                <span><a href="blog-detail.php?blog_id=<?= $result['blog_id'] ?>&lang=<?= $lan ?>" style="font-size: 0.9rem; font-weight:600;"><?= strip_tags(substr($result['title'], 0, 30)) ?> ...</a></span>
                                            </div>
                                        </a>
                                    </li>
                                <?php
                                }
                                ?>
                            </ul>
                        </div>

                    </div>
                </div>
                <div class="col-lg-9 col-md-8 col-sm-12 col-xs-12">
                    <?php
                    if (isset($_SESSION['min_msg'])) {
                        echo "<script>alert('.$_SESSION[min_msg] .')</script>";
                        unset($_SESSION['min_msg']);
                    }
                    ?>
                    <?php
                    // pagination----
                    if (!isset($_GET['page'])) {
                        $page = 1;
                    } else {
                        $page = $_GET['page'];
                    }
                    $limit = 3;
                    $offset = ($page - 1) * $limit;

                    $query = "SELECT * FROM blog_tbl LEFT JOIN blog_category_tbl ON blog_tbl.category = blog_category_tbl.blog_cat_id where lang_id = '$lan' And blog_lang_id = '$lan'  ORDER BY blog_tbl.created_at DESC  limit $offset ,$limit";
                    $query_run = mysqli_query($con, $query);
                    $num = mysqli_num_rows($query_run) > 0;

                    if ($num) {
                        while ($des = mysqli_fetch_assoc($query_run)) {
                    ?>
                            <div class="as_blog_box pt-5">
                                <div class="row">
                                    <div class="col-md-4">
                                        <div class="as_blog_img">
                                            <img src="admin/blog_des_files/<?php echo $des['image'] ?>" class="img-responsive">
                                            <span class="as_btn "><?php echo $des['date'] ?></span>
                                        </div>
                                    </div>
                                    <div class="col-md-8">
                                        <div class="as_blog_detail">
                                            <ul>
                                                <li><a href="javascript:;" style="pointer-events:none;"><i class="fa-solid fa-user"></i>By -<?= $des['A_name'] ?></a></li>
                                                <li><a href="category_blog.php?cat_id=<?= $des['blog_cat_id'] ?>"><?= $des['blog_cat_name'] ?></a></li>
                                            </ul>
                                            <h4 class="as_subheading"><span> <?php echo $des['title'] ?></span></h4>
                                            <p class="as_font14 as_margin0" style="font-size: 0.9rem; font-weight:500;"><?php echo strip_tags(substr($des['b_des_mini'], 0, 300)) ?>...</p>

                                            <div class=" btn1">
                                                <a href="blog-detail.php?blog_id=<?= $des['blog_id'] ?>&lang=<?= $lan ?>" class="as_btn mt-2">Read More</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                    <?php
                        }
                    } else {
                        echo "no Discription";
                    }
                    ?>
                    <div class="as_pagination as_padderTop50">
                        <?php
                        $pagination = "SELECT * FROM blog_tbl";
                        $query = mysqli_query($con, $pagination);
                        $total_post = mysqli_num_rows($query);
                        $t_page = ceil($total_post / $limit);
                        if ($total_post > $limit) {
                        ?>
                            <ul class="text-right paginationUL">
                                <?php
                                for ($i = 1; $i <= $t_page; $i++) {
                                ?>
                                    <li class="<?= ($i == $page) ? "as_active" : "" ?>">
                                        <a class="page_active" href="blog.php?page=<?= $i ?>"><?= $i ?></a>
                                    </li>
                                <?php
                                } ?>
                            </ul>
                        <?php
                        }
                        ?>
                    </div>
                </div>
            </div>
        </div>
    </section>

</div>
<?php require('./includes/footer.php') ?>
<?php require('./includes/script.php') ?>