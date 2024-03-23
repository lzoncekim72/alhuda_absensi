<!DOCTYPE html>
<html lang="en">
<html>
  <head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta charset="utf-8">
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <script src="js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="styles.css">
    
    <title>tampilan</title>
  </head>
  
  <body>
    <h2>Sistem Informasi Absensi Siswa Madrasah Aliyah Alhuda</h2>
    <ul class="topnav">
      <li><a href="home.php">home</a></li>
      <li><a href="user data.php">Siswa</a></li>
      <li><a href="registration.php">pendaftaran</a></li>
      <li><a href="read tag.php">Data Kartu</a></li>
      <li><a class="active" href="tampilan.php">tampilan</a></li>
    </ul>
    <br>
    <div class="container">
            <div class="row">
                <h3>Tabel tampilan</h3>
            </div>
            <div class="row">
                <table class="table table-striped table-bordered">
                  <thead>
                    <tr bgcolor="#333" color=#FFFFFF>
                      
                    <th>Nomor Kartu</th>
                  <th>Nama</th>
                  <th>Nama Depan</th>
                  <th>ID</th>
                  <th>Kelas</th>
                  <th>keterangan</th>
                  
                </tr>
              </thead>
              <tbody>
                <form method ="post" action = "excel.php" >
                  <input type ="submit" name ="export_excel" class ="btn btn-success" value="Export ke Excel" />
                </form>
                
              <?php
              include 'database.php';
              $id = 1; //variabel nomor kartu
              try {
                $pdo = new PDO('mysql:host=localhost;dbname=dataalhuda', 'root', 'Lzoncekim72::;');
                $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            
                // Jalankan kueri SQL untuk mendapatkan data dari tabel
                $sql = "SELECT users.id, users.nama, users.`Nama depan`, users.Kelas, logs.id, logs.created_at, logs.UIDresult FROM users INNER JOIN logs ON users.id = logs.UIDresult ORDER BY logs.created_at DESC";
                $stmt = $pdo->query($sql);
            
                // Cetak tabel HTML untuk menampilkan data
                echo '<table class="table table-striped table-bordered">';
                echo '<thead>';
                echo '<tr bgcolor="#333" color="#FFFFFF">';
                echo '<th>Nomor Kartu</th>';
                echo '<th>Nama</th>';
                echo '<th>Nama Depan</th>';
                echo '<th>ID</th>';
                echo '<th>Kelas</th>';
                echo '<th>Keterangan</th>';
                echo '</tr>';
                echo '</thead>';
                echo '<tbody>';
            
                // Iterasi melalui hasil kueri dan cetak baris tabel untuk setiap baris data
                $id = 1;
                while ($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
                    echo '<tr>';
                    echo '<td>'. $id . '</td>';
                    echo '<td>'. $row['Nama'] . '</td>';
                    echo '<td>'. $row['Nama depan'] . '</td>';
                    echo '<td>'. $row['UIDresult'] . '</td>';
                    echo '<td>'. $row['Kelas'] . '</td>';
                    echo '<td>'. $row['created_at'] . '</td>';
                    echo '</tr>';
                    $id++;
                }
            
                echo '</tbody>';
                echo '</table>';
            
                // Tutup koneksi database
                $pdo = null;
            } catch (PDOException $e) {
                // Tangani kesalahan dengan mencetak pesan kesalahan
                echo "Error: " . $e->getMessage();
            }
            ?>
                  </tbody>
        </table>
      </div>
    </div>
  </body>
</html>