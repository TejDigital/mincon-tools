<?php
require('./config/dbcon.php');

// session_start();
// if ($_SERVER["REQUEST_METHOD"] == "POST") {
//     if (isset($_POST['id'])) {


// if (isset($_SESSION['cart'])) {
//     $my_cart = array_column($_SESSION['cart'], 'product_name');
//     if (in_array($_POST['p_name'], $my_cart)) {
//         echo "<script>alert('product already exist'); window.location.href ='../index.php';</script>";
//     } else {
//         $count  = count($_SESSION['cart']);
//         $_SESSION['cart'][$count] = array('product_name' => $_POST['p_name'], 'product_img' => $_POST['image'], 'cat_name' => $_POST['cat_name']);
//         echo "<script>alert('product added'); window.location.href ='../index.php';</script>";
//     }
// } else {
//     $_SESSION['cart'][0] = array('product_name' => $_POST['p_name'], 'product_img' => $_POST['image'], 'cat_name' => $_POST['cat_name']);
//     echo "<script>alert('product added'); window.location.href ='../index.php';</script>";
// }
//     }
// }



// $p_name = $_POST['p_name'];
// $p_img = $_POST['image'];
// $cat_name = $_POST['cat_name'];

// if (isset($_POST['id'])) {


//     $_SESSION['p_name'] =  $_POST['p_name'];
//     $_SESSION['p_image'] = $_POST['image'];
//     $_SESSION['cat_name'] = $_POST['cat_name'];

//     $p_name = $_SESSION['p_name'];
//     $p_img  = $_SESSION['p_image'];
//     $cat_name = $_SESSION['cat_name'];



//     $_SESSION['cart'] = [$p_name, $p_img, $cat_name];


//     if(isset($_SESSION['cart'])){
//         $my_cart = array_column($_SESSION['cart'],0);
//         if(in_array($_POST['p_name'],$my_cart)){
//             echo"success";
//         }
//         else{
//             echo "failed";
//         }
//     }
// }
// $sql1 = "SELECT * FROM cart_tbl WHERE p_name = '$p_name'";
// $query2 = mysqli_query($con, $sql1);

// if (mysqli_num_rows($query2) > 0) {
//     return 'Product already exist';
// } else {

//     $sql = " INSERT INTO cart_tbl (p_name,p_img,p_cat_name) VALUES('$p_name','$p_img','$cat_name')";
//     $query = mysqli_query($con, $sql);

//     // print_r($query);

//     if ($query == 1) {
//         // return true;
//         echo "item added";
//     } else {
//         echo "false";
//     }
// }



// Start the session if it's not already started

if (isset($_POST['p_id'])) {
    ob_start();
    
    system('ipconfig/all'); 
    $mycom = ob_get_contents();
    
    ob_clean();
    
    $findme = "Physical";
    
    
    $pmac = strpos($mycom, $findme); 
    $mac = substr($mycom, ($pmac+36),17); 
    

    $p_name = $_POST['p_name'];
    $p_img = $_POST['image'];
    $cat_name = $_POST['cat_name'];
    $lan = $_POST['lan_id'];
    $address = $mac ;

    $sql1 = "SELECT * FROM tem_tbl_for_cart WHERE cart_product_name = '$p_name'";
    $query1 = mysqli_query($con, $sql1);

    if (mysqli_num_rows($query1) == 0) {
        $sql = "INSERT INTO tem_tbl_for_cart (lang_id,cart_product_name,cart_product_image,cart_product_cat_name,mac_id) VALUES('$lan','$p_name','$p_img','$cat_name','$address')";
        $query = mysqli_query($con, $sql);
        if ($query) {
            echo "Product added to the cart";
        } else {
            echo "Something went wrong";
        }
    } else {
        echo "Product already in the cart";
    }
}

if (isset($_POST['id'])) {
    $id = $_POST['id'];
    $sql = "DELETE FROM tem_tbl_for_cart WHERE cart_product_id = '$id'";
    $query = mysqli_query($con, $sql);
    if ($query) {
        echo "Cart item deleted";
    } else {
        echo "Deletion Failed";
    }
}



   
    
    
    
    



    // $product = [
    //     'p_name' => $_POST['p_name'],
    //     'p_image' => $_POST['image'],
    //     'cat_name' => $_POST['cat_name'],
    //     'id' => $_POST['id']
    // ];

    // if (!isset($_SESSION['cart'])) {
    //     // If the cart doesn't exist, create it as an empty array
    //     $_SESSION['cart'] = [];
    // }

    // $cart = &$_SESSION['cart']; // Reference to the cart array

    // // Check if the product is already in the cart based on product name
    // $productExists = false;
    // foreach ($cart as $key => $item) {
    //     if ($item['p_name'] === $product['p_name']) {
    //         $productExists = true;
    //         break;
    //     }
    // }

    // if ($productExists) {
    //     echo "Product already in the cart";
    // } else {
    //     // Add the product to the cart
    //     $cart[] = $product;
    //     echo "Product added to the cart";
    // }
