<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Aplikasi CRUD Plus Upload Gambar dengan PHP</title>
</head>
<body>
  <h1>Tambah Data Siswa</h1>
  <form method="POST" action="proses_simpan.php" enctype="multipart/form-data">
    <table cellpadding="10">
      <tr>
        <td>NIS</td>
        <td><input type="text" name="nis"></td>
      </tr>
      <tr>
        <td>Nama</td>
        <td><input type="text" name="nama"></td>
      </tr>
      <tr>
        <td>Jenis Kelamin</td>
        <td>
        <input type="radio" name="jenis_kelamin" value="Laki-laki">Laki-laki
        <input type="radio" name="jenis_kelamin" value="Perempuan">Perempuan
        </td>
      </tr>
      <tr>
        <td>Telepon</td>
        <td><input type="text" name="telp"></td>
      </tr>
      <tr>
        <td>Alamat</td>
        <td><textarea name="alamat"></textarea></td>
      </tr>
      <tr>
        <td>Foto</td>
        <td><input type="file" name="foto"></td>
      </tr>
    </table>
    
    <hr>
    <input type="submit" value="Simpan">
    <a href="index.php"><input type="button" value="Batal"></a>
  </form>
</body>
</html>