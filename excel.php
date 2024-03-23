<?php
include 'database.php';
$id = 1; //nomor kartu
$pdo = Database::connect();
$output = '';
if (isset($_POST["export_excel"]))
{
	$sql ="SELECT users.id, users.Nama, users.Nama depan, users.kelas,logs.id, logs.created_at, logs.UIDresult FROM users INNER JOIN logs ON users.id=logs.UIDresult ORDER BY logs.created_at DESC";
	if($pdo)
	{
		$output .= '
		 <table class ="table table-bordered">
		 <tr>
		 <th>nomor kartu</th>
		 <th>Nama</th>
		 <th>Nama Depan</th>
		 <th>ID</th>
		 <th>Kelas</th>
		 <th>Data</th>
		 </tr>

		';
		foreach ($pdo->query($sql) as $row) {
		
			$output .= '
			<tr>
			<td>'.$id.'</td>
			<td>'.$row["Nama"].'</td>
			<td>'.$row["Nama Depan"].'</td>
			<td>'.$row["UIDresult"].'</td>
			<td>'.$row["Kelas"].'</td>
			<td>'.$row["created_at"].'</td>
			</tr>
			';
			$id++; //Meningkatkan penghitung Nomor urut setelah setiap catatan yang ditampilkan
		}
		$output .='</table>';
		header("Content-Type: application/xls");
		header("Content-Disposition: attachment; filename=tampilan.xls");
		echo $output; 
	}
}
Database::disconnect();
?>