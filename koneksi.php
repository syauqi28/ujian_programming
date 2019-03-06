<?php 
 
 $host = "localhost";
 $name = "root";
 $pass = "1";
 $db = "ujian";
 
	$mysqli = new mysqli($host, $name, $pass, $db);

	if($mysqli->connect_errno){
		echo "gagal konek" . $mysqli->connect_error;
	}

	$proses = $mysqli->prepare('INSERT INTO users (nama, email, password) VALUES (?, ?, ?)');
	$proses->bind_param('sss', $nama, $email, $pass);

	$nama = $_POST['nama'];
	$email = $_POST['email'];
	$pass = $_POST['password'];

	$proses->execute();

	$mysqli->close();


 
?>