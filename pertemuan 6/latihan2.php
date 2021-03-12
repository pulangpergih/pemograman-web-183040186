<?php 

// $mahasiswa =[
//     ["Raka DwiKS", "18304086", "pulangpergi@gmail.com", "Teknik Informatika"],
//     ["Fatnan", "18301890", "fatnanajah@gmail.com", "Teknik Informatika"]
// ];
$mahasiswa = [
    [

        "nama"=> "Raka Dwi KS",
        "nrp"=> "183040186",
        "email"=> "pulangpergi@gmail.com",
        "jurusan"=> "Teknik Informatika",
        "foto"=> "01.jpg"
    ],
    [

        "nama"=> "fatnan",
        "nrp"=> "18301890",
        "email"=> "fatnanajah@gmail.com",
        "jurusan"=> "Teknik Informatika",
        "foto"=> "02.jpg"
        
    ]
];
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Daftar Mahasiswa</title>
</head>
<body>
    <h1>Daftar  Mahasiswa</h1>
    <?php foreach($mahasiswa as $m): ?>
    <ul>
        <li>
            <img src="img/<?= $m["foto"]; ?>" width="100" alt="">
        </li>
            <li>NAMA : <?= $m["nama"]; ?></li>
            <li>NRP : <?= $m["nrp"]; ?></li>
            <li>JURUSAN : <?= $m["jurusan"]; ?></li>
            <li>EMAIL : <?= $m["email"]; ?></li>
        </ul>
        <?php endforeach; ?>
</body>
</html>