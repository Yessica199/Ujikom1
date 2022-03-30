<?php session_start() ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="css/style.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto+Mono&display=swap" rel="stylesheet">
    <link href='pesawat3.png' rel='shortcut icon'>
    <title>ISI DATA</title>
</head>
<body>
  <nav class="navbar navbar-expand-lg" style = "background-color : #43C0E8;">
    <div class="container-fluid">
        <a class="navbar-brand" href="dashboard.php"><img src="pesawat3.png" alt="">Peduli Diri</a>
      <a class="navbar-brand" href="#"> </a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav">
          <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="dashboard.php">Dashboard</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="catatanperjalanan.php">Lihat Data</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="form.php">Isi Data</a>
          </li>
          <li class="nav-item">
          <a class="nav-link" style="background-color: black; border-radius: 7px; color: white" href="logout.php">Keluar</a>
          </li>
        </ul>
      </div>
    </div>
  </nav>
      <div class="jumbotron" style="background-color: white;">
      <h1 class="display-4"> <img src="pesawat2.png" alt=""><?= $_SESSION['username']?></h1>
        <p class="lead">Isi Data Perjalanan Anda</p>
        <hr class="my-4">
      </div>
      <div class="box-isi">
        <?= @$_SESSION['success']; 
            @$_SESSION['failed'];
        ?>
        <form action="process_form.php" method="post">
          <div class="form-group">
            <label for="exampleInputEmail1">Tanggal Perjalanan</label>
            <input type="date" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="" style="border: 3px solid #43C0E8; border-radius: 100px;" required name="tanggal">
            <small id="emailHelp" class="form-text text-muted"></small>
          </div>
          <div class="form-group">
            <label for="exampleInputPassword1">Waktu Perjalanan</label>
            <input type="time" class="form-control" id="exampleInputPassword1" placeholder="" style="border: 3px solid #43C0E8; border-radius: 100px;" required name="waktu">
          </div>
          <div class="form-group">
            <label for="exampleInputPassword1">Lokasi Perjalanan</label>
            <input type="text" class="form-control" id="exampleInputPassword1" placeholder="" style="border: 3px solid #43C0E8; border-radius: 100px;" required name="lokasi">
          </div>
          <div class="form-group">
            <label for="exampleInputPassword1">Suhu</label>
            <input type="text" class="form-control" id="exampleInputPassword1" placeholder="" style="border: 3px solid #43C0E8; border-radius: 100px;" required name="suhu">
          </div>
          <button type="submit" class="btn btn-primary" style="background-color: #43C0E8;">Submit</button>
        </form>
      </div>
        <footer id="sticky-footer" class="footer flex-shrink-0 py-4 text-white-50" style = "background-color : #43C0E8;">
          <center>
            <small>© 2022 - Fernanda. All rights reserved</small>
          </center>
        </footer>
</body>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</body>
</html>

  

