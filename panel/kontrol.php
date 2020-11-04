<?php
session_start();
include 'connection.php';
$kad = $_POST["kad"];
$parola = $_POST["parola"];

$sql = "select * from kullanicilar where kad='".$kad."' and parola='".$parola."'";
$sonuc = $conn->query($sql);
if($sonuc->num_rows>0){
    $rs = $sonuc->fetch_object();
    $_SESSION["kullaniciID"] = $rs->id;
    header("location:giris.php");
}else{
    header("location:login.php?hata=1");
}
?>