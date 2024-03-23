<?php

    require 'database.php';

    if (!empty($_POST)) {

		$Nama = ucfirst($_POST['Nama']); //makes input uppercase before storing it in the DB
		$id = $_POST['id'];
		$prekelas = ucfirst($_POST['Nama Depan']); //makes input uppercase before storing it in the DB
        $kelas = $_POST['Kelas'];
        
		$pdo = Database::connect();
		$sql = "INSERT INTO users (Nama,id,Nama Depan,Kelas) values(?, ?, ?, ?)";
		$q = $pdo->prepare($sql);
		$q->execute(array($Nama,$id,$NamaDepan,$Kelas));
		Database::disconnect();
		header("Location: user data.php");
    }
?>