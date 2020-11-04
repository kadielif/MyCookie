
<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8"/>
<meta name="viewport" content="width=device-width, initial-scale=1"/>
<title>İLK JQUERY MOBİLE ÖRNEĞİ </title>
<script src="./lib/jquery.min.js"></script>
<script src="./lib/jquery.mobile-1.4.5.min.js"></script>
<link href="./css/jquery.mobile-1.4.5.min.css" rel="stylesheet" type="text/css"/>
<?php
include 'connection.php';
session_start();
if(!isset($_SESSION["kullaniciID"])){
    header("location:login.php");
}
?>
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <style>
		[data-role~=header]
		{
			height:60px!important;
			font-size:28px!important;
		}
		
    </style>
    <body>
	<div data-role="page" >
		<div data-role="header" >
				<a href="giris.php" id="aa"  data-theme="b"  >Geri</a>
				<h1>MyCookie</h1>
		</div>
		<div id="content">
			<ul data-role="listview" data-filter="true" data-filter-placeholder data-filter-theme  data-theme="c">
				<?php
				$sql = "select * from tarifler";
				$result = $conn->query($sql);
				
				if($result->num_rows>0){
					
					while ($rs = $result->fetch_object()){
				?>	
				
						 <ul data-role="listview" data-icon="false" >
						
							<li>
							<a href="guncelle.php?id=<?php echo $rs->id ?>"><?php echo $rs->adi?> (Güncelle)</a> 
							</li>
						</ul>
						
				<?php
					}
				}
				?>
			</ul>
		</div>
	
       
     </div>
       

    </body>
</html>
