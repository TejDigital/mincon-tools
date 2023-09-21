<?php
require('./config/dbcon.php');
ob_start();

system('ipconfig/all');
$mycom = ob_get_contents();

ob_clean();

$findme = "Physical";


$pmac = strpos($mycom, $findme);
$mac = substr($mycom, ($pmac + 36), 17);

$query = "SELECT * FROM tem_tbl_for_cart WHERE mac_id = '$mac'";
$result = mysqli_query($con, $query);
$cartData = [];

if ($result) {
    if (mysqli_num_rows($result) > 0) {
        foreach ($result as $row) {
            $cartData[] = $row;
        }
    }
}
header('Content-Type: application/json');
echo json_encode($cartData);

//     } else {
//         echo json_encode(["No Data"]);
//     }
// } else {
//     echo json_encode(["message" => "Error executing query: " . mysqli_error($con)]);
// }
