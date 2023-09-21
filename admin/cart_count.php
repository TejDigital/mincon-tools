<?php
require('./config/dbcon.php');

ob_start();

system('ipconfig/all');
$mycom = ob_get_contents();

ob_clean();

$findme = "Physical";

$pmac = strpos($mycom, $findme);
$mac = substr($mycom, ($pmac + 36), 17);

$sql = "SELECT * FROM tem_tbl_for_cart WHERE mac_id = '$mac' ";

$query  = mysqli_query($con, $sql);

$count = mysqli_num_rows($query);

$response = array(
    'count' => $count
);

// Set the content type to JSON
header('Content-Type: application/json');

// Output the JSON response
echo json_encode($response);
?>
