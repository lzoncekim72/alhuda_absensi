<?php
error_reporting(0);
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
	
	$msg = null;
	if (null==$data['Nama']) {
		
		$data['id']=$id;
		$msg = "Kartu tidak valid. Apakah Anda ingin mendaftarkan kartu Anda?";
		$data['Nama']="--------";
		$data['Nama Depan']="--------";
		$data['Kelas']="--------";
		$Write="<?php $" . "msg='" . $msg . "'; " . "echo " . "substr"."("."$"."msg, 0, 16);" . " ?>"; //<?php echo substr($msg,0,16) pt scriere substring "Cartela invalida" pe pagina null.php
	    file_put_contents('null.php',$Write);
		
		
	
	} else {
		$Write="<?php $" . "msg='" . $data['Nama']." ".$data['Nama Depan'] . "'; " . "echo $" . "msg;" . " ?>";
	    file_put_contents('null.php',$Write);
	}
?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
    <link   href="css/bootstrap.min.css" rel="stylesheet">
	<script src="js/bootstrap.min.js"></script>
	<link rel="stylesheet" href="styles.css">
</head>

	<body>	
		<div>
			<form>
				<table  width="452" border="1" bordercolor="#10a0c5" align="center"  cellpadding="0" cellspacing="1"  bgcolor="#000" style="padding: 2px">
					<tr>
						<td  height="40" align="center"  bgcolor="#333"><font  color="#FFFFFF">
						<b>Data Kartu</b></font></td>
					</tr>
					<tr>
						<td bgcolor="#f9f9f9">
							<table width="452"  border="0" align="center" cellpadding="5"  cellspacing="0">
								<tr>
									<td width="113" align="left" class="lf">ID</td>
									<td style="font-weight:bold">:</td>
									<td align="left"><?php echo $data['id'];?></td>
								</tr>
								<tr bgcolor="#f2f2f2">
									<td align="left" class="lf">Nama</td>
									<td style="font-weight:bold">:</td>
									<td align="left"><?php echo $data['Nama'];?></td>
								</tr>
								<tr bgcolor="#f2f2f2">
									<td align="left" class="lf">Nama Depan</td>
									<td style="font-weight:bold">:</td>
									<td align="left"><?php echo $data['Nama Depan'];?></td>
								</tr>
								<tr>
									<td align="left" class="lf">Kelas</td>
									<td style="font-weight:bold">:</td>
									<td align="left"><?php echo $data['Kelas'];?></td>
								</tr>
								
								
							</table>
						</td>
					</tr>
				</table>
			</form>
		</div>
		<p class="null"><a href="registration.php"><?php echo $msg;?></p></a>

		<style>
			.null {
				color:red;
				font-size:150%;
			}

			a {
				text-decoration: none;
				color:inherit;
			}

			a:hover {
				text-decoration:underline;
				color:black;
			}
			
		</style>
	</body>
</html>