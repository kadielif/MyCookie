<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8"/>
<meta name="viewport" content="width=device-width, initial-scale=1"/>
<title>İLK JQUERY MOBİLE ÖRNEĞİ </title>
<script src="./lib/jquery.min.js"></script>
<script src="./lib/jquery.mobile-1.4.5.min.js"></script>
<link href="./css/jquery.mobile-1.4.5.min.css" rel="stylesheet" type="text/css"/>


  <script>
 
	var id;
	$(document).ready(function(){
		var obj;
		$.get("api.php",{"param":"all"},function(veri){
			obj = jQuery.parseJSON(veri);
			//alert(obj.veriler.v1.tarih);
			$.each(obj.veriler, function() {
				$("#veriler").append("<li id = '"+this.id+"'>"+this.adi+"</li></a>").listview('refresh');
			});
		});		
	});
	
	$(document).on("click","#veriler2 li" , function(){
        id = $(this).attr("id");
		$( ":mobile-pagecontainer" ).pagecontainer( "change", "#bos" );
		//$( ":mobile-pagecontainer" ).pagecontainer( "change", "#page2" );
		//$(document).on("pageshow","#page2",function(){
		$("#adi").empty();
		$("#malzemeler").empty();
		$("#tarif").empty();
		$("#kisi").empty();
		$("#derece").empty();
		$("#dk").empty();
		$.get("api.php",{"param":id},function(veri){
			obj = jQuery.parseJSON(veri);
			//alert(obj.veriler.v1.tarih);
				$.each(obj.veriler, function() {
					$("#resim").attr("src" , "./img/"+this.resim).each(function() {
					if (this.complete) $(this).trigger('load');
					
					});
					$("#adi").append(this.adi);
					$("#malzemeler").append(this.malzeme);
					$("#tarif").append(this.tarif);
					$("#kisi").append(this.kisi);
					$("#derece").append(this.derece);
					$("#dk").append(this.sure);
				});
			});
		//});
		
	});
	
	 $(document).on("click","#veriler li" , function(){
        id = $(this).attr("id");
		$( ":mobile-pagecontainer" ).pagecontainer( "change", "#page2" );
		
		$(document).on("pageshow","#page2",function(){
		$("#malzemeler").empty();
		$.get("api.php",{"param":id},function(veri){
			obj = jQuery.parseJSON(veri);
			//alert(obj.veriler.v1.tarih);
			$.each(obj.veriler, function() {
				$("#resim").attr("src" , "./img/"+this.resim).each(function() {
				if (this.complete) $(this).trigger('load');
				
				});
				$("#adi").append(this.adi);
				$("#malzemeler").append(this.malzeme);
				$("#tarif").append(this.tarif);
				$("#kisi").append(this.kisi);
				$("#derece").append(this.derece);
				$("#dk").append(this.sure);
			});
		});

		$.get("api.php",{"param":"all"},function(veri){
			obj = jQuery.parseJSON(veri);
			//alert(obj.veriler.v1.tarih);
			$.each(obj.veriler, function() {
				$("#veriler2").append("<li  id = '"+this.id+"'>"+this.adi+"</li></a>").listview('refresh');
			});
		});
		
	});
    });
	
	
	
	
	
	
	

	
	
  </script>
<style>

	[data-role~=header]
	{
		font-family:"Bradley Hand ITC";
		background-color:#D5C6B2!important;
		height:60px!important;
		font-size:28px!important;
	}
	.ui-title
	{
		padding:13px 0 0  0!important;
	}
	[data-role~=footer]
	{
		background-color:#F2F2EF!important;
	}
	[data-role~=content]
	{
		background-color:#F2F2EF!important;
		padding:0px!important;
	}
	#myPanel,#myPanel2 ul li
	{
		background-color:#D5C6B2!important;
		
	}
	#imgsize
	{
		padding:15px;
	}
	.ui-grid-b{
		border:1px solid #A49B9B ;
		height:130px;
	}
	.ui-btn {
		
		background-color:black!important;
		color:white!important;
		font-family:"Arial";
	}

	.tarif{
		padding:15px;
	}
	#aa{
		margin:10px 0px 50px 0px;
	
	}
	

</style>
</head>

  
  
<body>
	<div data-role="page" id="pageone">
		<div data-role="header" >
		<h1>MyCookie</h1>
		   

			 <a href="#myPanel" id="aa" class="ui-btn ui-shadow ui-corner-all ui-icon-bars ui-btn-icon-notext ui-btn-b ui-btn-inline">Close panel</a>
			<a href="#myPanel2" id="aa" class="ui-btn ui-shadow ui-corner-all ui-icon-gear ui-btn-icon-notext ui-btn-b ui-btn-inline"  >Add</a>
			
		</div>
		<div data-role="panel" id="myPanel" data-display="overlay" >
			<a href="#pageone" data-rel="close" class="ui-btn ui-btn-inline ui-shadow ui-corner-all ui-btn-b ui-icon-delete ui-btn-right">X</a>
			<h2>Tariflerimiz</h2>
			<ul id="veriler" data-role="listview" data-filter="true" data-filter-placeholder data-filter-theme  data-theme="b">
							
			</ul>
		</div> 
		<div data-role="panel" id="myPanel2"  data-display="overlay" data-position="right" data-filter-placeholder data-filter-theme  data-theme="b">
			<ul data-role="listview" >
					<li><a href="#pageone">Ana Sayfa</a></li>
					<li><a href="#page19">İletişim</a></li>
					<li><a href="#cikis">Çıkış</a></li>
			</ul>
		</div>
		
		
		<div data-role="content">
		
			<div class="ui-grid-solo">
				<div class="ui-block-a"><img src="./img/kurabiye1.jpg"  height="auto" width="370px" align="center" /></div>
			</div>
			
			<div class="ui-grid-a" >
				<div class="ui-block-a" ><img src="./img/k2.jpg" height="150px" width="180px" /></div>
				<div class="ui-block-b"><img src="./img/k4.jpg" height="150px" width="180px"/></div>
			</div>
			
			<div class="ui-grid-solo" style="margin-top:-5px">
				<div class="ui-block-a"><img src="./img/kurabiye.jpg" height="auto" width="370px"/></div>
			</div>
			
		</div>
		<div data-role="footer">
			<h1>...</h1>
		</div>
	</div>  
	
	
	
	<div data-role="page" id="page2">
		<div data-role="panel" id="myPanel" data-display="overlay"  >
			
			<h2>Tariflerimiz</h2>
			<ul id="veriler2" data-role="listview" data-filter="true" data-filter-placeholder data-filter-theme  data-theme="b">
							
			</ul>
		</div> 
		<div data-role="panel" id="myPanel2" data-display="overlay" data-position="right" data-filter-placeholder data-filter-theme  data-theme="b"> 
			
			<ul data-role="listview" >
			
				<li><a href="#pageone">Ana Sayfa</a></li>
                <li><a href="#page19">İletişim</a></li>
                <li><a href="#cikis">Çıkış</a></li>
				
			</ul>
			
		</div>
	    <div data-role="header" >
		
			<a href="#myPanel" id="aa" data-icon="bars" data-iconpos="notext" data-theme="b" align="left"  >Menu</a>
			<a href="#myPanel2" id="aa" data-icon="gear" data-iconpos="notext" data-theme="b" align="right">Add</a>
			<h1>MyCookie</h1>
			
	    </div>
		
		<div data-role="content">
		
			<h3 id="adi">
			</h3>
			<div class="ui-grid-solo">
				<div class="ui-block-a"><img id = "resim" height="auto" width="370px" align="center" /></div>
			</div>
			
			<div class="ui-grid-b" > 
			
				<div class="ui-block-a " id="imgsize"><img src="./img/icon2.png" height="50 px" width="auto" align="center"/><p id="dk"></p></div>
				<div class="ui-block-b"id="imgsize"><img src="./img/icon3.png" height="50 px" width="auto" /><p id="kisi"></p></div>
				<div class="ui-block-c" id="imgsize"><img src="./img/icon1.png" height="50 px" width="auto"/><p id="derece"></p></div>
			
			</div>
			
			<div class="tarif" >
			
				<h4>Malzemeler</h4>
				
					<ul id="malzemeler">
						
					</ul>
					
				<h4>Tarif</h4>
				
					<p id="tarif">
					
					</p>
					
			</div>
		</div>
		
		<div data-role="footer">
			<h1>...</h1>
		</div>
	</div>
	<div data-role="page" id="page19">
		<div data-role="panel" id="myPanel2" data-display="overlay" data-position="right" data-filter-placeholder data-filter-theme  data-theme="b"> 
			<ul data-role="listview" >
				<li><a href="#pageone">Ana Sayfa</a></li>
				<li><a href="#page19">İletişim</a></li>
				<li><a href="#cikis">Çıkış</a></li>
			</ul>
		</div>
		<div data-role="header" >
			<a href="#myPanel2" id="aa" data-icon="gear" data-iconpos="notext" data-theme="b">Add</a>
			<h1>MyCookie</h1>
	    </div>
		<div data-role="content">
			<H2 align="center">İlETİŞİM </H2>
			<h4>Elif Kadı-İstanbul Kültür Üniversitesi</h4>
			<h5>E-Mail:</h5> <p>elif_kadi@hotmail.com</P>
			<h5>Özel Kurabiye Siparişleriniz İçin:</h5><p>05342129125</p>
			<img src="./img/hakkimizda.jpg" width="370px">
			
			<div data-role="footer">
				<h1>...</h1>
			</div>
		</div>
	</div>
	
	


</body>
</html>