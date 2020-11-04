<?php
include 'connection.php';
session_start();
if(!isset($_SESSION["kullaniciID"])){
    header("location:login.php");
}
?>
<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8"/>
<meta name="viewport" content="width=device-width, initial-scale=1"/>
<title>İLK JQUERY MOBİLE ÖRNEĞİ </title>
<script src="./lib/jquery.min.js"></script>
<script src="./lib/jquery.mobile-1.4.5.min.js"></script>
<link href="./css/jquery.mobile-1.4.5.min.css" rel="stylesheet" type="text/css"/>

<style>
		[data-role~=header]
		{

			height:60px!important;
			font-size:28px!important;
		}
		
	
		.menu{
            width: 250px; 
            float: left;
        }
        
        .solmenu a{
            font-size:13px;
            color:black;
        }
        .menu ul li{
            margin: 0;             
            background: transparent; 
            padding: 5px;
            list-style: none;
        }
        
	


</style>
</head>
<body>

<div class="content">
	<div data-role="header" >
		<h1>MyCookie İşlem Sayfası</h1>
	</div>
 	<div class="menu">
		<ul data-role="listview"  data-filter-placeholder data-filter-theme  data-theme="b">
				
				<li><a href="ekle.php">Yeni Tarif Ekle</a></li>
                <li><a href="veriler.php">Guncelle</a></li>
                <li><a href="veriler2.php">Sil</a></li>
				<li><a href="login.php">Cikis</a></li>
		</ul>
		
	</div>
	
</div>
	






</body>
</html>
