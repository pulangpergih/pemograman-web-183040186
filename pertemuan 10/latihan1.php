<?php 
$conn = mysqli_connect('localhost', 'root', '', 'pw_183040186');
$result = mysqli_query($conn, "SELECT * FROM mahasiswa");
$rows =[];
while ($row = mysqli_fetch_array($result)) {
$rows[] = $row;
}

$mahasiswa = $rows;
  

?>

<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">
    <title>Daftra Mahasiswa</title>
    <style>
     h3{
       margin-top: 50px;
     }
     img{
       max-height: 100%;
       width: 150px;
     }
    </style>
  </head>
  <body>
  <div class="container">
    <div class="row">
      <div class="col">
          <h3>Daftra Mahasiswa</h3>
          <table class="table table-bordered table-hover">
          <thead class="table-dark">
            <tr>
              <th scope="col">No</th>
              <th scope="col">Gambar</th>
              <th scope="col">NRP</th>
              <th scope="col">Nama</th>
              <th scope="col">Email</th>
              <th scope="col">Jurusan</th>
              <th scope="col">Aksi</th>
            </tr>
          </thead>
          <tbody>
            <?php $i= 1; ?>
            <?php foreach($mahasiswa as $mhs): ?>
          <tr class="text-center">
              <th scope="row"><?= $i++; ?></th>
              <td><img src="img/<?= $mhs["gambar"]; ?>"></td>
              <td ><?= $mhs["nama"]; ?></td>
              <td><?= $mhs["nrp"]; ?></td>
              <td><?= $mhs["email"]; ?></td>
              <td><?= $mhs["jurusan"]; ?></td>
              <td>
                <a href="">Ubah</a> | <a href="">Hapus</a>
              </td>
            </tr>
            <?php endforeach;  ?>
          </tbody>
        </table>
      </div>
    </div>
  </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js" integrity="sha384-JEW9xMcG8R+pH31jmWH6WWP0WintQrMb4s7ZOdauHnUtxwoG2vI5DkLtS3qm9Ekf" crossorigin="anonymous"></script>
  </body>
</html>