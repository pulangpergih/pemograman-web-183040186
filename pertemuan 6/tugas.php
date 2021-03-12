<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta author="Raka Dwi Kris Setiawan 183040186">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">
    <title>Tugas</title>
</head>
        <style>
            .card-deck{
                border: 1px solid black;
                justify-content: center;
                margin-top: 20px;
            }
            .card-body{
            background-color: #c4c4c4;
            text-align: center;
            margin: 2px;
            }
            .card-img-top{
                max-width: 150px;
                margin: 65px;
            }
            h1{
                margin-top: 20px;
                background-color: coral;
                width: 18rem;
            }
            
            
        </style>
<body>
    <?php 
    $breads = [
        [
            "judul" => "Bakery",
            "nama" => "Bolen Lilit Keju",
            "harga"=> "Rp 7.500",
            "stock"=> "50",
            "gambar"=>"03.jpg"
        ],
        [
            "judul" => "Bakery",
            "nama" => "Bolen Lilit Coklat",
            "harga"=> "Rp 7.500",
            "stock"=> "45",
            "gambar"=>"04.jpg"
        ],
        [
            "judul" => "Bakery",
            "nama" => "Long John Coklat",
            "harga"=> "Rp 8.500",
            "stock"=> "60",
            "gambar"=>"05.jpg"
        ],
        [
            "judul" => "Bakery",
            "nama" => "Choco Stick",
            "harga"=> "Rp 5.000",
            "stock"=> "100",
            "gambar"=>"06.jpg"
        ],
        [
            "judul" => "Bakery",
            "nama" => "Long John Keju",
            "harga"=> "Rp 8.500",
            "stock"=> "55",
            "gambar"=>"07.jpg"
        ]
        ];
    
    ?>

            <section class="section-header">
                <div class="container">
                    <div class="row justify-content-center">
                        <div class="col-md-4">
                            <h1 class="text-center">Daftar Roti</h1>
                            <?php foreach($breads as $bread): ?>
                                <div class="card-deck" style="width: 18rem;">
                                    <img src="img/<?= $bread["gambar"]; ?>" class="card-img-top" width="100" alt="...">
                                        <div class="card-body">
                                            <h5 class="card-title"><?= $bread["judul"]; ?></h5>
                                            <p class="card-text"><?= $bread["nama"]; ?></p>
                                            <p class="card-text"><?= $bread["harga"]; ?></p>
                                            <p class="card-text"><?= $bread["stock"]; ?></p>
                                            <a href="#" class="btn btn-primary">Go somewhere</a>
                                        </div>
                                    </div>
                             <?php endforeach; ?>
                        </div>
                    </div>
                </div>
            </section>
            
            <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.bundle.min.js" integrity="sha384-b5kHyXgcpbZJO/tY9Ul7kGkf1S0CWuKcCD38l8YkeH8z8QjE0GmW1gYU5S9FOnJ0" crossorigin="anonymous"></script>
</body>
</html>