<?php
 require_once '../connection.php';
 header('Content-type: application/json');

$id = $_GET["id"];
$query = "SELECT * FROM videos WHERE id = '$id'";

 $result = mysqli_query($conn, $query);

//  $array = array();
while($row = mysqli_fetch_assoc($result)){
    $array = $row;
}

 echo ($result) ?
 json_encode(array("kode" => "1", "videos_item" => $array)) :
 json_encode(array("kode" => "0", "pesan" => "Data tidak ditemukan"));
?>