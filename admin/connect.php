<?php
require('authentication.php');
require('./config/dbcon.php');

if(isset($_POST['submit'])){
    $name = $_POST['name'];
    $mobile = $_POST['mobile'];
    $email = $_POST['email'];
    $company = $_POST['company'];
    $country = $_POST['country'];
    $contact_product_category = $_POST['product_category'];
    $contact_product = $_POST['product'];

    $sql = "INSERT INTO contact_tbl (name,mobile,email,company_name,country,contact_product_category,contact_product)VALUES('$name','$mobile','$email','$company','$country','$contact_product_category','$contact_product')";
    $query = mysqli_query($con,$sql);

    if($query){
        $_SESSION['min_msg'] = "Thankyou ! We are connect soon";
        header('location:../contact.php');
    }else{
        $_SESSION['min_msg'] = "Something went wrong";
        header('location:../contact.php');
    }
}

if(isset($_POST['submit2'])){
    $name = $_POST['name'];
    $mobile = $_POST['mobile'];
    $email = $_POST['email'];
    $company = $_POST['company'];
    $country = $_POST['country'];
    $contact_product_category = $_POST['product_category'];
    $contact_product = $_POST['product'];

    $sql = "INSERT INTO contact_tbl (name,mobile,email,company_name,country,contact_product_category,contact_product)VALUES('$name','$mobile','$email','$company','$country','$contact_product_category','$contact_product')";
    $query = mysqli_query($con,$sql);

    if($query){
        $_SESSION['min_msg'] = "Thankyou ! We are connect soon";
        header('location:../index.php');
    }else{
        $_SESSION['min_msg'] = "Something went wrong";
        header('location:../index.php');
    }
}

// -----------------delete------------------------
if (isset($_POST['delete_con'])) {

    $id = $_POST['delete_con_id'];

    $query_delete = " DELETE FROM contact_tbl WHERE  id ='$id'";

    $query_delete_run = mysqli_query($con, $query_delete);

    if ($query_delete_run) {

        $_SESSION['min_msg'] = "Contact deleted";
        header('location:index.php');
    } else {
        $_SESSION['min_msg'] = "CONTACT deletion failed";
        header('location:index.php');
    }
}

?>