<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <form action="tampil_data.php" method="get">
        <div class="form-group">
            <label for="text">No. Ktp :</label>
            <input type="text" class="form-control"  name="ktp">
        </div>
        <div class="form-group">
            <label for="text">Nama :</label>
            <input type="text" class="form-control" name="nama">
        </div>
        <div class="form-group">
            <label for="text">Alamat :</label>
            <input type="text" class="form-control" name="alamat">
        </div>
        <button type="submit" class="btn btn-primary">Submit</button>
    </form>
</body>

</html>