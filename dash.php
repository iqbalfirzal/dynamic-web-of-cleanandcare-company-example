<?php
session_start();
if (empty($_SESSION['admname'])){
 	echo 	"<script language='JavaScript'>
				alert('Anda harus login dahulu')
				window.location = 'login.html';
			</script>";
}
?>
<!DOCTYPE html>
<html>
<head>
	<title>Braders Web Dashboard</title>
	<link href="vendor/bootstrap/v3-3/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
	<link href="css/dash-addon.css" rel="stylesheet">
	<script src="vendor/bootstrap/v3-3/js/bootstrap.min.js"></script>
	<script src="vendor/jquery/jquery.min.js"></script>
	<script src="js/dash_addon.js"></script>
	<link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
	<script src="int/ckeditor/ckeditor.js"></script>
</head>
<body onload="locationHashChanged()">
	<nav class="navbar navbar-default navbar-fixed-top topbar">
		<div class="container-fluid">
			<div class="navbar-header">
				<a href="#meet" class="navbar-brand">
					<span class="visible-xs">Bd</span>
					<span class="hidden-xs">Braders</span>
				</a>
				<p class="navbar-text">
					<a href="#meet" class="sidebar-toggle">
                        <i class="fa fa-bars"></i>
                    </a>
				</p>
			</div>
		</div>
	</nav>
	
	<article class="wrapper">
	    <aside class="sidebar">
	        <ul class="sidebar-nav">
			    <li><a href="#add" data-toggle="tab"><i class="fa fa-plus"></i> <span>Tambah</span></a></li>
			    <li><a href="#edit" data-toggle="tab"><i class="fa fa-edit"></i> <span>Edit</span></a></li>
			    <li><a href="#logout" data-toggle="tab"><i class="fa fa-sign-out-alt" aria-hidden="true"></i> <span>Log Out</span></a></li>
		    </ul>
		    <script type="text/javascript">
		    	$(".sidebar-nav li").on("click", function() {
				$(".sidebar-nav li").removeClass("active");
				$(this).addClass("active");
				});
		    </script>
	    </aside>
	    
	    <section class="main">
	        
	        <section class="tab-content">
	            
	           <section class="tab-pane active fade in content" id="dashboard">
	               
	                <div class="row">
	                   
	                   <div class="col-xs-12 col-sm-9">
	                       <div class="panel panel-default">
	                           <div class="panel-heading"></div>
	                           <div class="panel-body" id="include">
	                           	<?php
									if(ISSET($_GET["add"])){
										if($_GET["add"]=="article" || "portfolio" || "testimoni"){include "int/chooseadd.php";}
									}
									else if (ISSET($_GET["edit"])) {
										if($_GET["edit"]=="article" || "portfolio" || "testimoni" || "editingarticle" || "editingportfolio" || "editingtestimoni"){include "int/chooseedit.php";}
									}
								?>
	                           </div>
	                       </div>
	                   </div>
	                   
	                   <div class="col-xs-12 col-sm-3">
	                       <div class="panel panel-default">
	                           <div class="panel-heading">
	                               
	                           </div>
	                           <div class="panel-body">
	                               Website Profil Perusahaan Clean & Care "Braders" ini dibangun untuk memasarkan produk jasa melalui media internet, serta memberikan layanan yang lebih mudah kepada pelanggan dan memberikan informasi mengenai sepatu, jaket, dan tas dari artikel-artikel.
	                           </div>
	                       </div>
	                       
	                       <div class="panel panel-default">
	                           <div class="panel-heading">
	                               Versi beta-0.5
	                           </div>
	                           <div class="panel-body">
	                               Copyright © Braders 2019
	                           </div>
	                       </div>
	                   </div>
	                   
	               </div>
	               
	           </section>
	           
	        </section>

	    </section>

	</article>
</body>
</html>