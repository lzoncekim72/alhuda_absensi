<?php
    require 'database.php';
    $id = null;
    if ( !empty($_GET['id'])) {
        $id = $_REQUEST['id'];
    }
     
    $pdo = Database::connect();
	$sql = "SELECT * FROM users where id = ?";
	$q = $pdo->prepare($sql);
	$q->execute(array($id));
	$data = $q->fetch(PDO::FETCH_ASSOC);
	Database::disconnect();
?>

<!DOCTYPE html>
<html lang="en">
<html>
	<head>
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<meta charset="utf-8">
		<link href="css/bootstrap.min.css" rel="stylesheet">
		<script src="js/bootstrap.min.js"></script>
		<link rel="stylesheet" href="styles.css">
		<style>
		.center {
			margin: 0 auto; 
			width:495px; 
			border-style: solid; 
			border-color: #f2f2f2;
		}
		</style>
		
		<title>Edit</title>
		
	</head>
	
	<body>

		<h2 align="center">Sistem catatan kehadiran</h2>
		
		<div class="container">
     
			<div class="center">
				<div class="row">
					<h3 align="center">Edit data</h3>
					<p hidden><?php echo $data['kelas'];?></p> <!-- delete Gender ----------------------------------------------------------------->
				</div>
		 
				<form class="form-horizontal" action="user data edit tb.php?id=<?php echo $id?>" method="post">
					<div class="control-group">
						<label class="control-label">ID</label>
						<div class="controls">
							<input name="id" type="text"  placeholder="" value="<?php echo $data['id'];?>" readonly>
						</div>
					</div>
					
					<div class="control-group">
						<label class="control-label">Nama</label>
						<div class="controls">
							<input name="name" type="text"  placeholder="" value="<?php echo $data['Nama'];?>" required>
						</div>
					</div>


					<div class="control-group">
						<label class="control-label">Nama Depan</label>
						<div class="controls">
							<input name="email" type="text" placeholder="" value="<?php echo $data['preNama'];?>" required>
						</div>
					</div>

					
					<div class="control-group">
						<label class="control-label">kelas</label>
						<div class="controls">
							<select name="kelas" id="mySelect">
							<option value="10MIA">10 MIA</option>
								<option value="10IIS">10 IIS</option>
								<option value="10IIK">10 IIK</option>
								<option value="11MIA">11 MIA</option>
								<option value="11IIS">11 IIS</option>
								<option value="11IIK">11 IIK</option>
								<option value="12MIA">12 MIA</option>
								<option value="12IIS">12 IIS</option>
								<option value="12IIK">12 IIK</option>
							</select>
						</div>
					</div>
					
					
					
					
					
					<div class="form-actions">
						<button type="submit" class="btn btn-primary">update</button>
						<a class="btn" href="user data.php">Kembali</a>
					</div>
				</form>
			</div>               
		</div>
	</body>
</html>