<?php
    require 'database.php';
    $id = 0;
     
    if ( !empty($_GET['id'])) {
        $id = $_REQUEST['id'];
    }
     
    if ( !empty($_POST)) {
        // keep track post values
        $id = $_POST['id'];
         
        // delete data
        // $pdo = Database::connect();
        // $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        // $sql = "DELETE FROM users  WHERE id = ?";
        // $q = $pdo->prepare($sql);
        // $q->execute(array($id));
        // Database::disconnect();
        // header("Location: user data.php");

        $pdo = Database::connect();
        $sql = "DELETE FROM users  WHERE id = ?";
        $q = $pdo->prepare($sql);
        $q->execute(array($id));
        Database::disconnect();
        header("Location: user data.php");
         
    }
?>
 
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <link   href="css/bootstrap.min.css" rel="stylesheet">
    <script src="js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="styles.css">

	<title>Delete akun</title>
</head>
 
<body>
	<h2 align="center">Sistem Informasi Absensi Siwa Madrasah Aliyah Alhuda</h2>

    <div class="container">
     
		<div class="span10 offset1">
			<div class="row">
				<h3 align="center">Delete akun</h3>
			</div>

			<form class="form-horizontal" action="user data delete page.php" method="post">
				<input type="hidden" name="id" value="<?php echo $id;?>"/>
				<p class="alert alert-error">Hapus?</p>
				<div class="form-actions">
					<button type="submit" class="btn btn-danger">ya</button>
					<a class="btn" href="user data.php">tidak</a>
				</div>
			</form>
		</div>
                 
    </div>
  </body>
</html>