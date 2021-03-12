<?php 
$mahasiswa =[
     ["Raka Dwi KS","183040186","Teknik Informatika", "pulangpergi@gmail.com"],
     ["Arip","183040014","Teknik Informatika", "Email"]
];

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Latihan 3</title>
</head>
<body>
    <h1>Daftar Mahasiswa</h1>
    
    <?php foreach($mahasiswa as $m): ?>
    <ul>
            <li>NAMA : <?= $m[0]; ?></li>
            <li>NRP : <?= $m[1]; ?></li>
            <li>JURUSAN : <?= $m[2]; ?></li>
            <li>EMAIL : <?= $m[3]; ?></li>
        </ul>
        <?php endforeach; ?>
</body>
</html>