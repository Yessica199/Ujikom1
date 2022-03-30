<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link href='pesawat3.png' rel='shortcut icon'>

    <title>Peduli Diri-Login</title>

    <!-- Custom fonts for this template-->
    <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link
        href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
        rel="stylesheet">

    <!-- Custom styles for this template-->
    <link href="css/sb-admin-2.min.css" rel="stylesheet">

</head>

<body style="background-color: 5D5FEF;">

    <div class="container" style="margin-top: 200px">

        <!-- Outer Row -->
        <div class="row justify-content-center">

            <div class="col-xl-6 col-lg-12 col-md-9">

                <div class="card o-hidden border-0 shadow-lg my-5">
                    <div class="card-body p-0">
                        <!-- Nested Row within Card Body -->
                        <div class="row">
                            <div class="col-lg-12">
                                <div class="p-5">
                                    <div class="text-center">
                                        <h1 class="h4 text-gray-900 mb-2">REGISTER</h1>
                                        <p> Selamat Datang Di Peduli Diri </p>
                                        <center>
                                            <img src="pesawat2.png" alt="">
                                        </center>
                                        <p>Silahkan Masukan Data Diri Anda Untuk Melakukan Registrasi</p>
                                    </div>
                                    <form class="user" action="process_register.php" method="post">
                                    <div class="form-group">
                                            <input name="nik" required type="text" class="form-control form-control-user"
                                                id="exampleInputEmail" aria-describedby="emailHelp"
                                                placeholder="Masukan NIK Anda..." style="border: 3px solid #43C0E8; border-radius: 100px;">
                                        </div>
                                        <div class="form-group">
                                            <input name="nama_lengkap" required type="text" class="form-control form-control-user"
                                                id="exampleInputPassword" placeholder="Masukan Nama Lengkap Anda" style="border: 3px solid #43C0E8; border-radius: 100px;">
                                        </div>     
                                        <button type="submit" class="btn btn-primary btn-user btn-block" style = "background-color : #43C0E8;">
                                           <i class="fa fa-spinner"></i>Register
                                        </button>
                                        <hr>
                                    </form>
                                    <div class="text-center">
                                        <a class="normal" href="login.php">Kembali ke halaman login? </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>

        </div>

    </div>

    <!-- Bootstrap core JavaScript-->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <!-- Core plugin JavaScript-->
    <script src="vendor/jquery-easing/jquery.easing.min.js"></script>

    <!-- Custom scripts for all pages-->
    <script src="js/sb-admin-2.min.js"></script>

</body>

</html>