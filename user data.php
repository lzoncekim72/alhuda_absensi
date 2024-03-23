<?php
	$Write="<?php $" . "UIDresult=''; " . "echo $" . "UIDresult;" . " ?>";
	file_put_contents('UIDContainer.php',$Write);
?>

<!DOCTYPE html>
<html lang="en">
<html>
	<head>
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<meta charset="utf-8">
		<link href="css/bootstrap.min.css" rel="stylesheet">
		<link rel="stylesheet" href="styles.css">
		
		<title>Studenti</title>
	</head>
	
	<body>
		<h2>sistem pencatatan kehadiran MA Alhuda</h2>
		<ul class="topnav">
			<li><a href="home.php">home</a></li>
			<li><a class="active" href="user data.php">Siswa</a></li>
			<li><a href="registration.php">Pendaftaram</a></li>
			<li><a href="read tag.php">Date kartu</a></li>
			<li><a href="presensi.php">presensi</a></li>
		</ul>
		<br>
		<div class="container">
            <div class="row">
                <h3>Tabel student</h3>
            </div>
            <div class="row">
                <table class="table table-striped table-bordered">
                  <thead>
                    <tr bgcolor="#333" color="#FFFFFF">
                      <th>Nama</th>
                      <th>Mama Depan</th>
                      <th>ID</th>
					  <th>kelas</th>
					  <th>Opsi</th>
                    </tr>
                  </thead>
                  <tbody>
                  <?php
                   include 'database.php';
                   $pdo = Database::connect();
                   $sql = 'SELECT * FROM users ORDER BY Nama ASC';
                   foreach ($pdo->query($sql) as $row) {
                            echo '<tr>';
                            echo '<td>'. $row['Nama'] . '</td>';
                            echo '<td>'. $row['Nama depan'] . '</td>';
							echo '<td>'. $row['id'] . '</td>';
                            echo '<td>'. $row['kelas'] . '</td>';							
							echo '<td><a class="btn btn-primary" href="user data edit page.php?id='.$row['id'].'">Edit</a>';
							echo ' ';
							echo '<a class="btn btn-danger" href="user data delete page.php?id='.$row['id'].'">Sterge</a>';
							echo '</td>';
                            echo '</tr>';
                   }
                   Database::disconnect();
                  ?>
                  </tbody>
				</table>
			</div>
		</div>
	</body>
</html>