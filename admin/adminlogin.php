<?php
session_start();
require('./includes/header.php');
// require('./includes/top-bar.php');
if (isset($_SESSION['auth']) == 1) {
    $_SESSION['alert_msg'] = "You already logged in";
    header('location:index.php');
    exit();
}
?>
<!-- <div class="section"> -->
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8 my-5">
            <?php
            if (isset($_SESSION['alert_msg'])) {
            ?>
                <div class="alert alert-warning alert-dismissible fade show" role="alert">
                    <strong>Hey!</strong> <?php echo $_SESSION['alert_msg'] ?>
                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close">
                        <!-- <span aria-hidden="true">&times;</span>s -->
                    </button>
                </div>
            <?php
                unset($_SESSION['alert_msg']);
            }
            ?>
            <?php
            if (isset($_SESSION['auth_msg'])) {
            ?>
                <div class="alert alert-warning alert-dismissible fade show" role="alert">
                    <strong>Hey!</strong> <?php echo $_SESSION['auth_msg'] ?>
                    <button type="button" class="btn-close " data-bs-dismiss="alert" aria-label="Close">
                        <!-- <span aria-hidden="true">&times;</span> -->
                    </button>
                </div>
            <?php
                unset($_SESSION['auth_msg']);
            }
            ?>



            <?php
            if (isset($_SESSION['cons_msg'])) {
                echo "<script>alert('" . $_SESSION['cons_msg'] . "')</script>";
                unset($_SESSION['cons_msg']);
            }
            ?>
            <div class="modal fade" id="forgetModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="exampleModalLabel">Find ID</h5>
                            <button type="button" class="close btn  btn-sm-square btn-sm btn-danger" data-bs-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <form action="code.php" method="POST">
                            <div class="modal-body">
                                <div class="form-group">
                                    <h6>Enter Your Registered Email</h6>
                                    <input type="email" name="email" class="form-control" placeholder="Enter Your Email">
                                </div>
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                <button type="submit" name="find" class="btn btn-primary">Find</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>








            <div class="container-fluid">
                <div class="row align-items-center justify-content-center" style="">
                    <div class="col-md-12">
                        <form action="./logincode.php" method="post">
                            <div class="bg-light rounded p-4 p-sm-5 my-4 mx-3">
                                <div class="d-flex align-items-center justify-content-between mb-3">
                                    <a href="index.html" class="">
                                        <h3 class="text-primary"><i class="fa fa-hashtag me-2"></i>Login</h3>
                                    </a>
                                    <h3>Sign In</h3>
                                </div>
                                <div class="form-floating mb-3">
                                    <input type="email" class="form-control" id="floatingInput" name="email" placeholder="name@example.com">
                                    <label for="floatingInput">Email Address</label>
                                </div>
                                <div class="form-floating mb-4">
                                    <input type="password" class="form-control" name="password" id="floatingPassword" placeholder="Password">
                                    <label for="floatingPassword">Password</label>
                                </div>
                                <div class="d-flex align-items-center justify-content-between mb-4">
                                    <!-- <div class="form-check">
                            <input type="checkbox" class="form-check-input" id="exampleCheck1">
                            <label class="form-check-label" for="exampleCheck1">Check me out</label>
                        </div> -->
                                    <a href="#" data-bs-toggle="modal" data-bs-target="#forgetModal">Forgot Password</a>
                                </div>
                                <button type="submit" name="login_btn" class="btn btn-primary py-3 w-100 mb-4">Sign In</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- </div> -->

<?php require('includes/script.php'); ?>
<?php require('includes/footer.php'); ?>