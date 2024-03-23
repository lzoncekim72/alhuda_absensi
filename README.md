# PHP-NodeMCU-RFID-Attendance-logging-system

-Sistem ini didasarkan pada sebuah situs web yang dibuat dengan PHP, HTML, CSS, Bootstrap, Javascript, jQuery, sebuah papan NodeMCU, dan Arduino UNO (untuk perangkat keras), serta sebuah database MySQL.

-Perangkat keras akan membaca kartu RFID, menyimpan informasinya, dan mengirimkannya ke situs web yang akan memproses data tersebut kemudian memodifikasinya/menyimpannya dalam database SQL, lalu mengirimkan respons kepada perangkat sehingga dapat mencetak pesan pada layar LCD dan juga menulis hasilnya pada kartu micro SD.

-Situs web ini memungkinkan administrator untuk mendaftar, menghapus, dan bahkan mengedit pengguna dan kartu RFID yang terdaftar. Sistem ini menampilkan kehadiran terdaftar saat ini, dicatat pada halaman akhir dalam sebuah tabel yang diperoleh dengan menggabungkan inner 'users' dan 'logs' tabel, menggunakan queri MySQL. Tabel akhir ini juga dapat diekspor sebagai file Excel.

<h2>Project diagram</h2>
<img src="Preview/bloc.jpg">
<h2>Website diagram</h2>
<img src="Preview/site.jpg">
<h2>User data</h2>
<img src="Preview/studenti.JPG">
<h2>User data edit page</h2>
<img src="Preview/edit.JPG">
<h2>User data delete page</h2>
<img src="Preview/delete.JPG">
<h2>Registration</h2>
<img src="Preview/inregistrare.JPG">
<h2>Read tag</h2>
<img src="Preview/date cartela.JPG">
<img src="Preview/date.JPG">
<h2>Attendance logs</h2>
<img src="Preview/tampilan.JPG">
<h2>Attendance logs exported as an Excel file</h2>
<img src="Preview/excel.JPG">
<h2>The logic behind the hardware device</h2>
<img src="Preview/hardware flowchart.JPG">
<h2>The hardware device</h2>
<img src="Preview/device outside.jpg">
<img src="Preview/device inside.jpg">
