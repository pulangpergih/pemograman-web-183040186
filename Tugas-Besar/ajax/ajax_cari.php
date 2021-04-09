<?php 
require '../functions.php';
  $mahasiswa = cari($_GET['keyword']);

?>
 <table class="table table-bordered table-hover">
                  <thead class="table-dark">
                    <tr>
                      <th scope="col">No</th>
                      <th scope="col">Gambar</th>
                      <th scope="col">Nama</th>
                      <th scope="col">Aksi</th>
                    </tr>
                    <?php if(empty($mahasiswa)) : ?>
                    <tr>
                      <td colspan="4" style="background-color: white;">
                        <p class="text-center mt-5 mb-5" style="color: tomato;">Data mahasiswa tidak ditemukan</p>
                      </td>
                    </tr>
                    <?php endif; ?>
                  </thead>
                  <tbody>
                    <?php $i= 1; ?>
                    <?php foreach($mahasiswa as $mhs): ?>
                  <tr class="text-center">
                      <th scope="row"><?= $i++; ?></th>
                      <td><img src="img/<?= $mhs["gambar"]; ?>"></td>
                      <td style="font-weight:bold;" ><?= $mhs["nama"]; ?></td>
                      <td>
                                    <!-- Button trigger modal -->
                      <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal">
                        <a href="detail.php?id=<?= $mhs["id"]; ?>">detail</a>
                      </button>
                      </td>
                      <?php endforeach; ?>
                  </tbody>
                </table>