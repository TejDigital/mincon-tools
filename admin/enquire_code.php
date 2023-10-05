<?php
session_start();

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;

// Comment out or remove these lines, as they are not required
require './PHPMailer/src/PHPMailer.php';
require './PHPMailer/src/SMTP.php';
require('./config/dbcon.php');

if (isset($_POST['cart_add'])) {
    ob_start();

    system('ipconfig/all');
    $mycom = ob_get_contents();

    ob_clean();

    $findme = "Physical";


    $pmac = strpos($mycom, $findme);
    $mac = substr($mycom, ($pmac + 36), 17);

    $current_page  = $_POST['referrer'];
    $user_name = $_POST["name"];
    $user_mobile = $_POST["mobile"];
    $user_email = $_POST["email"];
    $user_company = $_POST["company"];
    $user_country = $_POST["country"];

    $cart_data = $_POST['cart_count'];

    $product_ids = explode(', ', $cart_data);
    $productInfo = [];


    foreach ($product_ids as $product_id) {
        $sql = "SELECT * FROM tem_tbl_for_cart WHERE cart_product_id ='$product_id'";
        $query = mysqli_query($con, $sql);
        $data = mysqli_fetch_assoc($query);
        $c_id = $data['cart_product_id'];
        $p_name = $data['cart_product_name'];
        $p_image = $data['cart_product_image'];
        $p_cart = $data['cart_product_cat_name'];
        $lan = $data['lang_id'];
        $mac_id = $data['mac_id'];

        $productInfo[] = [
            'product_name' => $p_name,
            'product_image' => $p_image,
            'product_category' => $p_cart,
            'language_id' => $lan,
            'mac_id' => $mac_id,
        ];
    }

    $mail = new PHPMailer();
    $mail->isSMTP();
    $mail->isHTML(true);
    $mail->SMTPDebug = SMTP::DEBUG_OFF;
    $mail->Host = 'smtp.gmail.com';
    $mail->Port = 587;
    $mail->SMTPAuth = true;
    $mail->Username = 'tejpratap.digitalshakha@gmail.com';  // Replace with your SMTP username
    $mail->Password = 'ckytndyqptfopcns';  // Replace with your SMTP password
    $mail->SMTPSecure = 'tls';

    $mail->setFrom('tejpratap.digitalshakha@gmail.com', 'Mincon Tools');  // Replace with your email and name
    $mail->addAddress($user_email);
    $mail->addAddress('tejpratap.digitalshakha@gmail.com');
    $mail->Subject = 'Enquire Details';
    // $mail->Body = "Name: $name\nPhone: $number\nEmail: $email\nMessage:\n$message";

    $emailBody = '<html>
                                    <head>
                                        <style>
                                            body {
                                                font-family: Arial, sans-serif;
                                                background-color: #f1f1f1;
                                            }
                                            h1 {
                                                color: #333;
                                            }
                                            h1 span{
                                                color:#000000;
                                            }
                                            table {
                                                width: 100%;
                                                border-collapse: collapse;
                                            }
                                            table, th, td {
                                                border: 1px solid #ccc;
                                            }
                                            th, td {
                                                padding: 10px;
                                                text-align: left;
                                            }
                                        </style>
                                    </head>
                                    <body>
                                            <h1>New Enquiry from<span> Mincon Tools </span></h1>
                                            <img src="./images/phone-call.svg" alt="">
                                            <table class="table table-striped">
                                                <tr>
                                                    <th>Name:</th>
                                                    <td>' . $user_name . '</td>
                                                </tr>
                                                <tr>
                                                    <th>Phone:</th>
                                                    <td>' . $user_mobile . '</td>
                                                </tr>
                                                <tr>
                                                    <th>Email:</th>
                                                    <td>' . $user_email . '</td>
                                                </tr>
                                            </table>
                                            <table>
                                                <tr>
                                                    <th>Product Name:</th>
                                                    <th>Product Category Name:</th>
                                                </tr>';

    foreach ($productInfo as $info) {
        $emailBody .= '<tr>
                                                                    <td>' . $info['product_name'] . '</td>
                                                                    <td>' . $info['product_category'] . '</td>
                                                                </tr>';
    }

    $emailBody .= '</table></body></html>';
    $mail->Body = $emailBody;


    if ($mail->send()) {
        foreach ($productInfo as $info) {

            $lan = $info['language_id'];
            $p_name = $info['product_name'];
            $p_image = $info['product_image'];
            $p_cart = $info['product_category'];
            $sql2 = "INSERT INTO cart_tbl(lang_id,p_name, p_img, p_cat_name, user_name, user_email, user_mobile, user_company_name, user_country_name)VALUES('$lan','$p_name','$p_image','$p_cart','$user_name','$user_email','$user_mobile','$user_company','$user_country')";
            $query2 = mysqli_query($con, $sql2);


            if (!$query2) {
                $_SESSION['min_msg'] = "something went wrong";
                header('location:' . $current_page);
            }
        }
        foreach ($productInfo as $info) {
            $mac_id = $info['mac_id'];
            if ($mac == $mac_id) {
                $sql3 = "DELETE FROM tem_tbl_for_cart WHERE mac_id ='$mac_id' AND lang_id ='$lan'";
                $query3 = mysqli_query($con, $sql3);
                if ($query3) {
                    $_SESSION['min_msg'] = "Thank you for your Enquire! We will get back to you soon.";
                    header('location:' . $current_page);
                } else {
                    $_SESSION['min_msg'] = "something went wrong";
                    header('location:' . $current_page);
                }
            }
        }
    } else {
        $_SESSION['min_msg'] = "Mac id Not Match";
        // header('location:' . $current_page);
        echo "Mailer Error: " . $mail->ErrorInfo;
    }
} else {
    echo "Oops! Something went wrong. Please try again later.";
    header('location:' . $current_page);
}




// -------------------delete_enquire----------------
if (isset($_POST['delete_en'])) {

    $en_id = $_POST['delete_en_id'];

    $query_delete = " DELETE FROM cart_tbl WHERE cart_id  ='$en_id'";

    $query_delete_run = mysqli_query($con, $query_delete);

    if ($query_delete_run) {

        $_SESSION['min_msg'] = "Enquire deleted";
        header('location:enquire.php');
    } else {
        $_SESSION['min_msg'] = "Enquire deletion failed";
        header('location:enquire.php');
    }
}
