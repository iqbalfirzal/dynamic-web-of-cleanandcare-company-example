<div class="row">
	<div class="col-sm-12">
    	<h1>Pilih Tambah</h1>
       	<button class="btn btn-dark" onclick="location.href='?add=article'" style="vertical-align:middle" type="submit"><span> Artikel </span></button> |
       	<button class="btn btn-dark" onclick="location.href='?add=portfolio'" style="vertical-align:middle" type="submit"><span> Portfolio </span></button> |
       	<button class="btn btn-dark" onclick="location.href='?add=testimoni'" style="vertical-align:middle" type="submit"><span> Testimoni </span></button>
       	<hr>
       	<?php
			if(ISSET($_GET["add"])){
			if($_GET["add"]=="article"){include "add-article.php";}
			else if($_GET["add"]=="portfolio"){include "add-portfolio.php";}
			else if($_GET["add"]=="testimoni"){include "add-testimoni.php";}}	
		?>
	</div>
</div>