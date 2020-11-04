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
		.icerik{
            margin: 0px 15px 15px 30px;
            float: left;
            
        }
        .icerik table tr{padding: 5px;}
        .icerik input, .icerik textArea{width: 1200px}
		

	
</style>
</head>
	<div data-role="page" >
		<div data-role="header" >
				
				<h1>MyCookie Güncelleme Sayfası</h1>
		</div>
		
		<?php
        $eklendi = 0;
		if(isset($_GET['id'])){
			  $sql = "select * from tarifler where id = ".$_GET['id'];
			  $result = $conn->query($sql);
			  if($result->num_rows>0){
				  $rs = $result->fetch_object();
			  }
			
        if(isset($_POST["adi"])){
            $sql = "update tarifler set adi='".$_POST["adi"]."', "
                    . "tarif='".$_POST["tarif"]."', "
                    . "malzeme='".$_POST["malzeme"]."',"
                    . "sure='".$_POST["dakika"]."', "
					. "kisi='".$_POST["kisi"]."',"
                    . "derece='".$_POST["derece"]."' "
                    . "where id=".$_GET["id"];
    
            $conn->query($sql);  
            $eklendi = 1;
        }
		}
        ?>
   
            <div class="menu">
				<ul data-role="listview"  data-filter-placeholder data-filter-theme  data-theme="b">
						<li><a href="ekle.php">Yeni Tarif Ekle</a></li>
						<li><a href="veriler.php">Guncelle</a></li>
						<li><a href="veriler2.php">Sil</a></li>
						<li><a href="giris.php" >Giris Sayfasi</a>
						<li><a href="login.php">Cikis</a></li>
				</ul>
		
			</div>	
        <div class="icerik">  
			
               <form enctype="multipart/form-data" name="tarifForm" method="post" action="guncelle.php?id=<?php echo $_GET["id"]?>">
                    <table>
                        <tr>
                            <td colspan="2">
                                <h2>Kurabiye Tarifi Güncelleme</h2>
                            </td>
                        </tr>
						<?php
                        if($eklendi==1){
                        ?>
                        <tr>
                            <td colspan="2" class="basarili">
                                Kayıt Başarı İle Güncellendi.
                            </td>
                        </tr>
                        <?php 
                        }
                        ?>
                       <tr>
                            <td>Kurabiye Adi:</td>
                            <td><input value="<?php echo $rs->adi?>" required type="text" name="adi" /></td>
                        </tr>
                        <tr>
                            <td>Pisirme Suresi:</td>
                            <td><input value="<?php echo $rs->sure?>" required type="text" name="dakika" /></td>
                        </tr>
                        <tr>
                            <td>Kisi Sayisi:</td> 
                            <td>
                               <input value="<?php echo $rs->kisi?>" required type="text" name="kisi" />
                            </td>
                        </tr>
                        <tr>
                            <td>Pişirme Derecesi:</td>
                            <td><input value="<?php echo $rs->derece?>" required type="text" name="derece" /></td>
                        </tr>
						<tr>
                            <td>Malzemeler:</td>
                            <td><textarea required name="malzeme" rows="10"><?php echo $rs->malzeme?></textarea></td>
							 
                        </tr>
						<tr>
                            <td>Tarif:</td>
                            <td><textarea required name="tarif" rows="10"><?php echo $rs->tarif?></textarea></td>
                        </tr>
                         <tr>
                            <td>Resim</td>
                            <td><input  type="file" name="resim" />
                                <br>
                                <?php
                                echo "<img src='./upload/".$rs->resim."' width='100'/>"
                                ?>
                            </td>
                        </tr>
                        <tr>
                        <tr>
                            <td></td>
                            <td><input type="submit" value="Kaydet" /></td>
                        </tr>
                    </table>
                </form>
	
		</div>
	</div>
		