<?php
 require_once '../connection.php';
 header('Content-type: application/json');

 $id = $_GET["id"];
$query = "SELECT * FROM news WHERE id NOT IN ('$id') ORDER BY id DESC";

 $result = mysqli_query($conn, $query);

 $array = array();
 while($row = mysqli_fetch_assoc($result)){
    $array[] = $row;
 }

 echo ($result) ?
 json_encode(array("kode" => "1", "news_similar" => $array)) :
 json_encode(array("kode" => "0", "pesan" => "Data tidak ditemukan"));
?>