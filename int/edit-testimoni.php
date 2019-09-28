<?php
error_reporting(0);
include "secure.php";
?>
<h2>Edit Testimoni</h2>
<table class="table table-hover table-bordered">
	<thead>
		<tr>
			<th>NO</th>
			<th>NAMA</th>
			<th>OPSI</th>
		</tr>
	</thead>
	<?php 
	include 'connect.php';
	$no = 1;
	$data = mysqli_query($connect,"SELECT * FROM testimoni");
	while($d = mysqli_fetch_array($data)){
		?>
		<tbody>
			<tr>
				<td><?php echo $no++; ?></td>
				<td><?php echo $d['nama']; ?></td>
				<td>
					<a href="?edit=editingtestimoni&id=<?php echo $d['idtesti']; ?>">EDIT </a>| 
					<script type="text/javascript">
					function confirmation() {
						var answer = confirm("Anda yakin?")
						if (answer){
							window.location = "int/del.php?cat=testimoni&id=<?php echo $d['idtesti']; ?>";
						}
						else{
							alert("Testimoni tidak jadi dihapus.")
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