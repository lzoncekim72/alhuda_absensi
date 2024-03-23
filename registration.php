<?php
	$Write="<?php $" . "UIDresult=''; " . "echo $" . "UIDresult;" . " ?>";
	file_put_contents('UIDContainer.php',$Write);
?>

<!DOCTYPE html>
<html>
	<head>
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<meta charset="utf-8">
		<link href="css/bootstrap.min.css" rel="stylesheet">
		<script src="js/bootstrap.min.js"></script>
		<script src="jquery.min.js"></script>
		<link rel="stylesheet" href="styles.css">
		
		<script>
			$(document).ready(function(){
				$("#getUID").load("UIDContainer.php");
				setInterval(function() {
					$("#getUID").load("UIDContainer.php");	
				}, 500);
			});
		</script>

		
		<title>pendaftaran</title>
	</head>
	
	<body>

		<h2 align="center">Sistem Informasi Absensi Siswa MAdrasah Aliyah Alhuda</h2>
		<ul class="topnav">
			<li><a href="home.php">home</a></li>
			<li><a href="user data.php">Siswa</a></li>
			<li><a class="active" href="registration.php">pendaftaran</a></li>
			<li><a href="read tag.php">Data Kartu</a></li>
			<li><a href="tampilan.php">tampilan</a></li>
		</ul>

		<div class="container">
			<br>
			<div class="center" style="margin: 25px auto; width:495px; border-style:groove; border-color: #f2f2f2; border-radius: 25px 25px 25px 25px;">
				<div class="row">
					<h3 align="center">Daftar Kartu</h3>
				</div>
				<br>
				<form class="form-horizontal" action="insertDB.php" method="post" >
					<div class="control-group">
						<label class="control-label">ID</label>
						<div class="controls">
							<textarea name="id" id="getUID" placeholder="silahkan tap kartu!" rows="1" cols="1" required></textarea>
						</div>
					</div>
					
					<div class="control-group">
						<label class="control-label">Nama</label>
						<div class="controls">
							<input id="div_refresh" name="Nama" type="text"  placeholder="" required>
						</div>
					</div>

					<div class="control-group">
						<label class="control-label">Nama Depan</label>
						<div class="controls">
							<input name="" type="text" placeholder="" required>
						</div>
					</div>
					
					<div class="control-group">
						<label class="control-label">Kelas</label>
						<div class="controls">
							<select name="kelas">
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
						<button type="submit" class="btn btn-outline-dark">pendaftaran</button>
                    </div>
				</form>
				
			</div>               
		</div>	
	</body>
</html>