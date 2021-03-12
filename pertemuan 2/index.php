<?php

// pertemuan 2 - PHP
// sintak PHP

// standar Output
// echo, print
// print_r
// var_dump

// penulisan PHP
// 1. PHP di dalam HTML
// 2. HTML di dalam PHP

// variabl dan Tipe data
// variabel
// tidak boleh diawali dengan angka, tapi boleh mengandung angka
// $nama = "Raka Dwi KS";
// echo "Halo, nama saya $nama";

// operator 
// aritmatika
// + - * / %
// $x = 10;
// $y = 20;

// penggabungan string / concatenation / concat
//  .
// $nama_depan = "Raka";
// $nama_belakang = "Dwi KS";
// echo $nama_depan . " " . $nama_belakang;

// Assignment
// =, +=,-=, *=, /=, %=, .=
// $x = 1;
// $x -= 5;
// echo $x;
// $nama = "Raka";
// $nama .= " ";
// $nama .= "Dwi KS";
// echo $nama;

// perbandingan 
// <, >, <=, >=, ==, !=
//  var_dump(1 == "1");

// identitas
// ===, !==
//  var_dump(1 === "1");

// Logika
// &&, ||, !
// $x = "30";
// var_dump($x <20 || $x % 2 == 0);
$nama = "raka";
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <h1>nama saya <?= $nama; ?> </h1>
</body>

</html>