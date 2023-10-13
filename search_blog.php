<?php 
session_start();
require('includes/header.php');
?>
<?php require('./admin/config/dbcon.php');

$keybord = $_GET['keybord'];
if (empty($keybord)) {
    header("location:blog.php");
}
?>

<div class="as_main_wrapper as_blog_page">
    <h1 class="my-1" style="font-size:1.5rem">Search result for: <span class="text-primary"><?= $keybord ?></span> </h1>
    <hr>
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
                                <input type="text" name="keybord" class="form-control" maxlength="60" value="<?= $keybord ?>" autocomplete="off" placeholder="Search" />
                                <button type="submit"><i class="fa-solid fa-magnifying-glass"></i></button>
                            </form>
                        </div>
                        <div class="as_category_widget">
                            <h3 class="as_widget_title" style="color: #EBAB56;">Categories</h3>
                            <?php
                            $select = "SELECT * FROM blog_category_tbl";
                            $query = mysqli_query($con, $select);
                            $rows = mysqli_num_rows($query);
                            while ($result = mysqli_fetch_assoc($query)) {
                            ?>
                                <ul>
                                    <li class="d-flex align-items-center justify-content-between">
                                        <a href="category_blog.php?cat_id=<?= $result['blog_cat_id'] ?>">
                                            <?= $lan == 1 ?  $result['blog_cat_name_lang_1'] :  $result['blog_cat_name_lang_2'] ?>
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
                            <h3 class="as_widget_title">Recent Posts</h3>
                            <ul>
                                <?php
                                $select = "SELECT * FROM blog_tbl ORDER BY blog_tbl.created_at DESC LIMIT 4 ";
                                $query = mysqli_query($con, $select);
                                $rows = mysqli_num_rows($query);
                                while ($result = mysqli_fetch_assoc($query)) {
                                ?>
                                    <li class="as_product p-0">
                                        <a href="shop_single.html">
                                            <span class="as_productimg">
                                                <!-- <img src="admin/blog_des_files/<?= $result['image'] ?>" alt=""> -->
                                            </span>
                                            <span class="as_product_detail">
                                                <span><i class="fa-solid fa-calendar-days"></i> <?= $result['date'] ?></span>
                                                <a style="font-size:1 rem;" href="blog_view.php?id=<?= $result['blog_id'] ?>&lang=<?=$lan?>" style="font-size: 0.7rem;"><?= $result['title'] ?></a>
                                            </span>
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

                    if($lan == 1){
                        $category = 'blog_cat_name_lang_1';
                    }else{
                        $category = 'blog_cat_name_lang_2';
                    }

                    $query = "SELECT * FROM blog_tbl LEFT JOIN blog_category_tbl ON blog_tbl.category = blog_category_tbl.blog_cat_id WHERE  title like '%$keybord%' or b_des_full like '%$keybord%' or b_des_mini like '%$keybord%' or $category like '%$keybord%'  ORDER BY blog_tbl.created_at DESC  limit $offset ,$limit";
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
                                                <li><a href="./author.php?auth=<?=$des['A_name']?>&lang=<?=$lan?>"  style="text-transform:capitalize"><i class="fa-solid fa-user"></i> By - <?= $des['A_name'] ?></a></li>
                                                <li><a href="category_blog.php?blog_cat_id=<?= $des['blog_cat_id'] ?>"><?=$lan == 1 ?  $des['blog_cat_name_lang_1'] : $des['blog_cat_name_lang_2'] ?></a></li>
                                            </ul>
                                            <h4 class="as_subheading"><span> <?php echo $des['title'] ?></span></h4>
                                            <p class="as_font14 as_margin0" style="font-size: 0.9rem; font-weight:500;"><?php echo strip_tags(substr($des['b_des_mini'], 0, 300)) ?>...</p>

                                            <div class=" btn1">
                                                <a href="blog-detail.php?blog_id=<?= $des['blog_id'] ?>&lang=<?=$lan?>" class="as_btn mt-2">Read More</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                    <?php
                        }
                    } else {
                        echo "<h5 class='text-danger'>No Record found</h5>
                        <b class='text-dark'>Suggestions</b>
                        <ul>
                            <li>Make sure that all words are spelled correctly.</li>
                            <li>Try different keywords.</li>
                            <li>Try more general keywords.</li>
                        </ul>";
                    }
                    ?>
                    <div class="as_pagination as_padderTop50">
                        <?php
                        $pagination = "SELECT * FROM blog_tbl where title like '%$keybord%' or b_des_mini like '%$keybord%' ";
                        $query = mysqli_query($con, $pagination);
                        $total_post = mysqli_num_rows($query);
                        $page = ceil($total_post / $limit);
                        if ($total_post > $limit) {
                        ?>
                            <ul class="text-right">
                                <?php
                                for ($i = 1; $i <= $page; $i++) {
                                ?>
                                    <li class="<?= ($i == $page) ? $active = "as_active" : "" ?>">
                                        <a href="search_blog.php?keybord=<?= $keybord ?>&page=<?= $i ?>"><?= $i ?></a>
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
<?php require('includes/footer.php') ?>
<?php require('includes/script.php') ?>