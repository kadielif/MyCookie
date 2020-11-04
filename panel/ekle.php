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
<title>ÝLK JQUERY MOBÝLE ÖRNEÐÝ </title>
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
			.icerik{
            margin: -5px 15px 15px 30px;
            float: left;
            
        }
        .icerik table tr{padding: 5px;}
        .icerik input, .icerik textArea{width: 1200px}
		
		
	
</style>
</head>
<body>
<?php
		 $sql = "select * from kullanicilar where id=".$_SESSION["kullaniciID"];
        $result = $conn->query($sql);
        if($result->num_rows>0){
            $rs = $result->fetch_object();
            $kad = $rs->kad;
            $yetki = $rs->yetki;
        }else{
            header("login.php");
        }
		 $eklendi = 0;
        if(isset($_POST["adi"])){
           
            $resim = $_FILES["resim"]["name"];
			move_uploaded_file($resim, "upload/".$_FILES["resim"]["name"]);
			$sql = "insert into tarifler (adi,tarif,malzeme,sure,kisi,derece,resim)"
        . "values ('".$_POST["adi"]
        ."','".$_POST["tarif"]
        ."','".$_POST["malzeme"]
		."','".$_POST["dakika"]
		."','".$_POST["kisi"]
		."','".$_POST["derece"]
        ."','".$resim."')";  

            $conn->query($sql);  
            //mysqli_query($conn,$sql);
            $eklendi = 1;
        }
        ?>
<div data-role="page" >
		<div data-role="header" >
			<h2>MyCookie Yeni Tarif Ekleme Sayfasi</h2>
			 
		</div>
			<div class="menu">
			
				<ul data-role="listview"  data-filter-placeholder data-filter-theme  data-theme="b">
						
						<li><a href="ekle.php">Yeni Tarif Ekle</a></li>
						<li><a href="veriler.php">Guncelle</a></li>
						<li><a href="veriler2.php">Sil</a></li>
						<li><a href="giris.php">Giris Sayfasi</a></li>
						<li><a href="login.php">Cikis</a></li>
				</ul>
		
			</div>	
		<div class="icerik">
		<form enctype="multipart/form-data" name="haberForm" method="post" action="ekle.php">
                 
				  <table>  
				 
                       <tr>
                            <h2>Tarif Ekleme</h2>
                           
                        </tr>
						<?php
                        if($eklendi==1){
                        ?>
                        <tr>
                            <td colspan="2" class="basarili">
                                Kayýt Baþarý Ýle Eklendi.
                            </td>
                        </tr>
                        <?php 
                        }
                        ?>
                       <tr>
                            <td>Kurabiye Adi:</td>
                            <td><input required type="text" name="adi" /></td>
                        </tr>
                        <tr>
                            <td>Pisirme Suresi:</td>
                            <td><input required type="text" name="dakika" /></td>
                        </tr>
                        <tr>
                            <td>Kisi Sayisi:</td> 
                            <td>
                               <input required type="text" name="kisi" />
                            </td>
                        </tr>
                        <tr>
                            <td>Pisirme Derecesi:</td>
                            <td><input required type="text" name="derece" /></td>
                        </tr>
						<tr>
                            <td>Malzemeler:</td>
                            <td><textarea required name="malzeme" rows="10"></textarea></td>
                        </tr>
						<tr>
                            <td>Tarif:</td>
                            <td><textarea required name="tarif" rows="10"></textarea></td>
                        </tr>
                        <tr>
                            <td>Resim</td>
                            <td><input required type="file" name="resim" /></td>
                        </tr>
                        <tr>
                            <td></td>
                            <td><input type="submit" value="Kaydet" /></td>
                        </tr>
                    </table>
                </form>
		</div>
	</div>
</body>

	
