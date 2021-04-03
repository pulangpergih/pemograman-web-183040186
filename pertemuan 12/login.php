<?php 
session_start();
if(isset($_SESSION['login'])){
  header("Location: index.php");
  exit;
}
require 'functions.php';
if(isset($_POST['login'])){
  $login = login($_POST);
}


?>


<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">
    <link rel="stylesheet" href="style/main.css">
    <script src="https://kit.fontawesome.com/yourcode.js" crossorigin="anonymous"></script>
    <title>Login</title>
  </head>
  <body>
      <main>
        <section class="header">
          <div class="fluid">
            <div class="row">
              <div class="col">
                <img src="img/10.jpg" width="100%" height="665px" alt="">
              </div>
            </div>
          </div>
        </section>
        <div class="container-fluid">
        <div class="row">
           <div class="col">
             <div class="card" style="width: 25rem; height:41.5rem;">
              <h1 class="text-center" style=" padding:130px; position:absolute; color:white; ">LOGIN</h1>
                 <div div class="card-body">
                      <form action="" method="POST">
                          <div class="mb-3">
                            <label for="exampleInputEmail1" class="form-label">Username</label>
                            <input type="text" class="form-control" name="username" placeholder="username" autofocus autocomplete="off" required>
                          </div>
                          <div class="mb-3">
                            <label for="exampleInputPassword1" class="form-label">Password</label>
                            <input type="password" name="password" class="form-control" placeholder="Password" required>
                          </div>
                              <?php if(isset($login['error'])) : ?>
                               <p style="color: red; font-style:italic; font-size:small;" class="mb-0"><?= $login['pesan']; ?></p>
                              <?php endif ; ?>
                          <button type="submit" name="login" class="btn btn-primary mt-2">Submit</button>
                    </form>
                  </div>
                </div>
           </div>
          </div>
        </div>
      </main>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js" integrity="sha384-JEW9xMcG8R+pH31jmWH6WWP0WintQrMb4s7ZOdauHnUtxwoG2vI5DkLtS3qm9Ekf" crossorigin="anonymous"></script>
  </body>
</html>