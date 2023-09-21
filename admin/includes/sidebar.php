<div class="sidebar pe-4 pb-3">
    <nav class="navbar bg-light navbar-light">
        <a href="index.php" class="navbar-brand mx-4 mb-3">
            <h3 class="text-primary"><i class="fa fa-hashtag me-2"></i>Mincon</h3>
        </a>
        <div class="d-flex align-items-center ms-4 mb-4">
            <div class="position-relative">
                <!-- <img class="rounded-circle" src="img/user.jpg" alt="" style="width: 40px; height: 40px;"> -->
                <i class="fa-solid fa-circle-user" style="font-size: 2.3rem;"></i>
                <!-- <div class="bg-success rounded-circle border border-2 border-white position-absolute end-0 bottom-0 p-1"></div> -->
            </div>
            <div class="ms-1">
                <h6 class="mb-0"> <?php
                                    // session_start();
                                    if (isset($_SESSION['auth'])) {
                                        echo $_SESSION['auth_user']['user_name'];
                                    } else {
                                        echo "No Logging";
                                    }
                                    ?></h6>
                <span>Admin</span>
            </div>
        </div>
        <div class="navbar-nav w-100">
            <a href="index.php" class="nav-item nav-link my-link"><i class="fa fa-tachometer-alt me-2"></i>Dashboard</a>
            <h4 class="ms-3 my-2">Master</h4>

            <a href="./product_category.php" class="nav-link my-link "><i class="fa fa-laptop me-2"></i>Category</a>
            <a href="./products.php" class="nav-link my-link "><i class="fa fa-laptop me-2"></i>Product</a>
            
            <h6 class="ms-3 my-2">Enquires</h6>
            <a href="./enquire.php" class="nav-link my-link "><i class="fa fa-laptop me-2"></i>Enquire Table</a>
            

            <h6 class="ms-3 my-2">BLog</h6>
            <a href="./blog_des.php" class="nav-link my-link "><i class="fa fa-laptop me-2"></i>Blog</a>
            <a href="./blog_category.php" class="nav-link my-link "><i class="fa fa-laptop me-2"></i>Blog Category</a>

            <!-- <div class="nav-item dropdown">
                <a href="#" class="nav-link my-link  dropdown-toggle" data-bs-toggle="dropdown"><i class="fa fa-laptop me-2"></i>Elements</a>
                <div class="dropdown-menu bg-transparent border-0">
                    <a href="#!" class="dropdown-item">ADD NEW</a>
                    <a href="#!" class="dropdown-item">ADD NEW 2</a>
                    <a href="#!" class="dropdown-item">ADD NEW 3</a>
                </div>
            </div> -->
            <!-- <div class="nav-item dropdown">
                <a href="#" class="nav-link my-link dropdown-toggle" data-bs-toggle="dropdown"><i class="fa fa-laptop me-2"></i>Product</a>
                <div class="dropdown-menu bg-transparent border-0">
                    <div class="py-1">
                        <a href="./category.php" class="nav-item my-link nav-link dropdown-item">Category</a>
                    </div>
                    <div class="py-1">
                        <a href="./products.php" class="nav-item my-link nav-link dropdown-item">Products</a>
                    </div>
                </div>
            </div> -->
            <!-- <a href="table.php" class="nav-item my-link nav-link"><i class="fa fa-table me-2"></i>Tables</a> -->
        </div>
    </nav>
</div>
<div class="content-start">