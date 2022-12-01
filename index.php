<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Aplikasi CRUD Plus Upload Gambar dengan PHP</title>

</head>
<body>
  <h1>Data Siswa</h1>

  <button type="button">
    <a href="form_simpan.php">Tambah Siswa</a>
  </button>
  <!-- <a href="form_simpan.php">Tambah Data</a><br><br> -->
  <table border="1" width="100%">
    <tr>
      <th>Foto</th>
      <th>NIS</th>
      <th>Nama</th>
      <th>Jenis Kelamin</th>
      <th>Telepon</th>
      <th>Alamat</th>
      <th colspan="2">Aksi</th>
    </tr>

    <?php
      // Load file connect.php
      include "connect.php";

      // Query untuk menampilkan data siswa
      $sql = $pdo->prepare("SELECT * FROM siswa");
      $sql->execute();

      while($data = $sql->fetch()){
        echo "<tr>";
        echo "<td><div><img src='images/".$data['foto']."' width='100' height='100'></div></td>";
        echo "<td>".$data['nis']."</td>";
        echo "<td>".$data['nama']."</td>";
        echo "<td>".$data['jenis_kelamin']."</td>";
        echo "<td>".$data['telp']."</td>";
        echo "<td>".$data['alamat']."</td>";
        
        echo "<td>";
        echo "<div>";
        echo "<button><a href='form_ubah.php?id=".$data['id']."'>Edit</a></button>";
        echo "<button><a href='proses_hapus.php?id=".$data['id']."'>Hapus</a></button>";
        echo "</div>";
        echo "</td>";
        
        echo "</tr>";
      }
    ?>
  </table>
</body>
</html>