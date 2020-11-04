<?php
$db = "tarif";
$host = "localhost";
$db_user = "root";
$db_pass = "";

$conn = new mysqli($host,$db_user,$db_pass,$db);
if($conn->connect_error){
    die("HATA:".$conn->connect_error);
}
else
//echo "Bağlantı Başarılı";
?>