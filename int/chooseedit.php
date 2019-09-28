<div class="row">
	<div class="col-sm-12">
    	<h1>Pilih Edit</h1>
       	<button class="btn btn-dark" onclick="location.href='?edit=article'" style="vertical-align:middle" type="submit"><span> Artikel </span></button> |
       	<button class="btn btn-dark" onclick="location.href='?edit=portfolio'" style="vertical-align:middle" type="submit"><span> Portfolio </span></button> |
       	<button class="btn btn-dark" onclick="location.href='?edit=testimoni'" style="vertical-align:middle" type="submit"><span> Testimoni </span></button>
       	<hr>
       	<?php
			if(ISSET($_GET["edit"])){
				if($_GET["edit"]=="article"){include "edit-article.php";}
				else if($_GET["edit"]=="portfolio"){include "edit-portfolio.php";}
				else if($_GET["edit"]=="testimoni"){include "edit-testimoni.php";}
				else if($_GET["edit"]=="editingarticle"){include "editing-article.php";}
				else if($_GET["edit"]=="editingportfolio"){include "editing-portfolio.php";}
				else if($_GET["edit"]=="editingtestimoni"){include "editing-testimoni.php";}
			}
		?>
	</div>
</div>