<?php
 require_once '../connection.php';
 header('Content-type: application/json');

 
$record_awal = $_GET["record_awal"];
$jumlah_record = $_GET["jumlah_record"];

$query = "SELECT * FROM news ORDER BY id DESC LIMIT $record_awal , $jumlah_record ";

 $result = mysqli_query($conn, $query);

 $array = array();
 while($row = mysqli_fetch_assoc($result)){
    $array[] = $row;
 }

 echo ($result) ?
 json_encode(array("kode" => "1", "news_result" => $array)) :
 json_encode(array("kode" => "0", "pesan" => "Data tidak ditemukan"));
?>