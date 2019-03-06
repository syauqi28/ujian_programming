<!DOCTYPE html>
<html>
<head>
	<title>Crud OOP</title>
	<style type="text/css">
		table {
			text-align: center;
		}
	</style>
</head>
<body>	 
	<a href="Create.php">Input Data</a>
	<br>
<table class="td" border="1px">
				<tr>
					<td>No</td>
					<td>Nama</td>
					<td>Email</td>
					<td>Password</td>
					<td>Action</td>
				</tr>
				<?php
				
				$host = "localhost";
				$name = "root";
				$pass = "1";
				$db = "ujian";
				 
					$mysqli = new mysqli($host, $name, $pass, $db);

					if($mysqli->connect_errno){
						echo "gagal konek" . $mysqli->connect_error;
					}


				$nomor  = 1;
				$sql    = "SELECT * FROM users";
				$result = $mysqli->query($sql);
				if($result->num_rows > 0){
					while ($row = $result->fetch_assoc()) {
						echo "
						<tr>
							<td>".$nomor++."</td>
							<td>".$row['nama']."</td>
							<td>".$row['email']."</td>
							<td>".$row['password']."</td>
							<td>
								<a href='edit_buku.php?id=".$row['id']."' class='eh'>Edit</a>
								<a href='delet_buku.php?id=".$row['id']."' onclick='javascript:return confirm(\"Apakah anda yakin ingin menghapus data ini?\")' class='eh'>Hapus</a>
							</td>
						</tr>
						";
					}
				}

			$mysqli->close();	
				?>
</table>

</body>
</html>