<?php
require('authentication.php');
require('./includes/header.php');
require('./includes/top-bar.php');
require('./includes/sidebar.php');
require('config/dbcon.php');
?>
<div class="container-fluid px-4">
    <!-- <div class="content-wrapper"> -->
    <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Add User</h5>
                    <button type="button" class="close btn  btn-sm-square btn-sm btn-danger" data-bs-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <form action="code.php" method="POST">
                    <div class="modal-body">
                        <div class="form-group">
                            <label for="">Name</label>
                            <input type="text" name="name" class="form-control" placeholder="name">
                        </div>
                        <div class="form-group">
                            <label for="">Email</label>
                            <span class="email-error" style="margin-left: 10px;"></span>
                            <input type="email" name="email" class="email_id form-control" placeholder="email">
                        </div>
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="">Password</label>
                                    <input type="password" name="password" class="form-control" placeholder="password">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="">Confirm-Password</label>
                                    <input type="password" name="confirmpassword" class="form-control" placeholder="confirm-password">
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                        <button type="submit" name="adduser" class="btn btn-primary">Save</button>
                    </div>
                </form>
            </div>
        </div>
    </div>

    <!-- delete user -->
    <div class="modal fade" id="deletemodal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Delete User</h5>
                    <button type="button" class="close" data-bs-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <form action="code.php" method="POST">
                    <div class="modal-body">
                        <input type="hidden" name="delete_id" class="delete_user_id">
                        <p>Are you sure , you want to delete this data ?</p>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                        <button type="submit" name="deleteuser" class="btn btn-danger">Yes,Delete.!</button>
                    </div>
                </form>
            </div>
        </div>
    </div>




    <!-- /.delete user -->
    <!-- Content Header (Page header) -->
    <div class="container-fluid">
        <div class="row mb-2">
            <div class="col-sm-12">
                <ol class="breadcrumb float-end">
                    <li class="breadcrumb-item"><a href="index.php">Home</a></li>
                    <li class="breadcrumb-item active">Registered</li>
                </ol>
            </div><!-- /.col -->
        </div><!-- /.row -->
    </div><!-- /.container-fluid -->
    <!-- /.content-header -->
    <!-- <section class="content"> -->
    <div class="row">
        <div class="col-md-12">
            <?php
            if (isset($_SESSION['cons_msg'])) {
                echo "<script>alert('" . $_SESSION['cons_msg'] . "')</script>";
                unset($_SESSION['cons_msg']);
            }
            ?>
            <div class="card">
                <div class="card-header">
                    <h3 class="card-title float-start ">Registered User</h3>
                    <a href="#" class="btn btn-primary btn-sm float-end " data-bs-toggle="modal" data-bs-target="#exampleModal">Add User</a>
                </div>
                <!-- /.card-header -->
                <div class="card-body">
                    <table id="example1" class="table table-bordered table-striped">
                        <thead>
                            <tr>
                                <th>Id</th>
                                <th>Name</th>
                                <th>Email</th>
                                <th>Role us</th>
                                <th colspan="2" class="text-center">Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                            $query = "SELECT * FROM users";
                            $db_query_connect = mysqli_query($con, $query);
                            if (mysqli_num_rows($db_query_connect) > 0) {
                                foreach ($db_query_connect as $row) {
                            ?>
                                    <tr>
                                        <td><?php echo $row['id'];  ?></td>
                                        <td><?php echo $row['name']; ?></td>
                                        <td><?php echo $row['email']; ?></td>
                                        <td>
                                            <?php
                                            if ($row['status'] == "0") {
                                                echo "User";
                                            } elseif ($row['status'] == "1") {
                                                echo "Admin";
                                            } else {
                                                echo "invalid";
                                            }
                                            ?>
                                        </td>

                                        <td class="text-center">
                                            <a href=registered_edit.php?user_id=<?php echo $row['id']; ?> class='btn btn-square btn-outline-primary m-2'><i class="fa-regular fa-pen-to-square"></i></a>
                                        </td>
                                        <td class="text-center">
                                            <button type='button' value=<?php echo $row['id']; ?> class='btn tn-square btn-outline-danger m-2 deletebtn '><i class="fa-solid fa-trash"></i></button>

                                        </td>

                                    </tr>

                            <?php
                                }
                            }
                            ?>

                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- </section> -->
<!-- </div> -->
<?php require('./includes/footer.php'); ?>

<?php require('includes/script.php'); ?>
<script>
    $(document).ready(function() {
        $('.email_id').keyup(function(e) {
            var email = $('.email_id').val();
            // console.log(email);
            $.ajax({
                type: "POST",
                url: "code.php",
                data: {
                    'check_Emailbtn': 1,
                    'email': email,
                },
                success: function(response) {
                    // console.log(response);
                    $('.email-error').text(response);
                }
            });
        });
    });
</script>
<script>
    // -----------------------delete------------------------
    $(document).ready(function() {
        $('.deletebtn').click(function(e) {
            e.preventDefault();
            var user_id = $(this).val();
            // console.log(user_id);
            $('.delete_user_id').val(user_id);
            $('#deletemodal').modal('show');
        });
    });
</script>