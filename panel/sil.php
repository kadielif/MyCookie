<?php
include 'connection.php';
    $sql = "delete from tarifler where id=".$_GET["id"];
    $conn->query($sql);
    header("location:veriler2.php?sil=1");
?>