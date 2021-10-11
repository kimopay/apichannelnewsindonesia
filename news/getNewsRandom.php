<?php
 require_once '../connection.php';
 header('Content-type: application/json');

$id = $_GET["id"];
$query = "SELECT * FROM news ORDER BY RAND()";

 $result = mysqli_query($conn, $query);

//  $array = array();
while($row = mysqli_fetch_assoc($result)){
    $array = $row;
}

 echo ($result) ?
 json_encode(array("kode" => "1", "news_item_random" => $array)) :
 json_encode(array("kode" => "0", "pesan" => "Data tidak ditemukan"));
?>