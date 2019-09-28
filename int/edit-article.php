<?php
error_reporting(0);
include "secure.php";
?>
<h2>Edit Artikel</h2>
<table class="table table-hover table-bordered">
	<thead>
		<tr>
			<th>NO</th>
			<th>JUDUL ARTIKEL</th>
			<th>OPSI</th>
		</tr>
	</thead>
	<?php 
	include 'connect.php';
	$no = 1;
	$data = mysqli_query($connect,"SELECT * FROM articles");
	while($d = mysqli_fetch_array($data)){
		?>
		<tbody>
			<tr>
				<td><?php echo $no++; ?></td>
				<td><?php echo $d['judul']; ?></td>
				<td>
					<a href="?edit=editingarticle&id=<?php echo $d['idarticle']; ?>">EDIT</a> | 
					<script type="text/javascript">
					function confirmation() {
						var answer = confirm("Anda yakin?")
						if (answer){
							window.location = "int/del.php?cat=article&id=<?php echo $d['idarticle']; ?>";
						}
						else{
							alert("Artikel tidak jadi dihapus.")
						}
					}
					</script>
					<a href="#" onclick="confirmation()">HAPUS</a>
				</td>
			</tr>
		</tbody>
	<?php
	}
	?>
</table>