<?php 
require "class/siswa.php";

if (isset($_POST["submit"])) {
    $data = [
    "nama_siswa" => $_POST["nama_siswa"],
    "kelas" => $_POST["kelas"],
    "foto" => $_POST["foto"]
    ];
    $siswa = new Siswa;
    $siswa->tambahSiswa($data);
    if ($data > 0) {
        echo "
            <script>
                alert('Yay!! Data barang berhasil ditambahkan');
                window.location = 'siswa.php';
            </script>
            ";
    } else {
      echo "
      <script>
          alert('Yha.. data gagal ditambahkan');
          window.location = 'siswa.php';
      </script>
      ";
    }
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Tambah Data Siswa</title>
</head>
<body>
  <div class="tambah-barang">
    <h1>Tambah Data Siswa</h1>
      <form action="" method="POST">
          <div class="row p-3">
              <div class="col-md-12 mb-4">
                  <label for="" class="form-label">Nama Siswa</label><br />
                  <input type="text" name="nama_siswa" class="form-control"  required /><br /> <br />
                                             
                  <label for="" class="form-label">kelas</label><br />
                  <input type="text" name="kelas" class="form-control"  required /><br /> <br />
                                         
                  <label for="" class="form-label">Foto</label><br />
                  <input type="file" name="foto" class="form-control"  required /><br /> <br />
                       
                  <button type="submit" name="submit">Tambah</button>
              </div>
          </div>
      </form>
  </div>
</body>
</html>
                   