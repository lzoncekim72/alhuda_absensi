<?php
    require 'database.php';
 
    $id = null;
    if ( !empty($_GET['id'])) {
        $id = $_REQUEST['id'];
    }
     
    if ( !empty($_POST)) {
        // keep track post values
        $name = $_POST['name'];
        $email = $_POST['email'];
		$id = $_POST['id'];
		$kelas = $_POST['kelas'];
    
         

        $pdo = Database::connect();
        $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        $sql = "UPDATE users  set Nama = ?, kelas =?, Nama depan =? WHERE id = ?";
        $q = $pdo->prepare($sql);
        $q->execute(array($name,$kelas,$email,$id));
        Database::disconnect();
        header("Location: user data.php");
    }
?>
