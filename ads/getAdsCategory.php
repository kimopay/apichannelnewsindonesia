<?php
 require_once '../connection.php';
 header('Content-type: application/json');

$category = $_GET["category"];
$query = "SELECT * FROM ads WHERE category = '$category' ORDER BY id DESC";

 $result = mysqli_query($conn, $query);

 $array = array();
 while($row = mysqli_fetch_assoc($result)){
    $array[] = $row;
 }

 echo ($result) ?
 json_encode(array("kode" => "1", "ads_category" => $array)) :
 json_encode(array("kode" => "0", "pesan" => "Data tidak ditemukan"));
?>