<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>one document - Register</title>

    <!-- Custom fonts for this template-->
    <link href="template/vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">

    <!-- Custom styles for this template-->
    <link href="template/css/sb-admin-2.min.css" rel="stylesheet">

    <style>
        .logo-login {
            max-height: 140px;
            margin-bottom: 20px;
        }
    </style>

</head>

<body class="bg-gradient-success">

    <div class="container">

        <!-- Outer Row -->
        <div class="row justify-content-center">
            <!-- lebar card -->
            <div class="col-xl-5 col-lg-12 col-md-9">

                <div class="card o-hidden border-0 shadow-lg my-5">
                    <div class="card-body p-0">
                        <!-- Nested Row within Card Body -->
                        <div class="row">
                            <!--<div class="col-lg-5 d-none d-lg-block bg-register-image"></div> -->
                            <div class="col-lg-12">
                                <div class="p-5">
                                    <div class="text-center">
                                        <img src="img/logo_unu.png" class="logo-login">
                                        <h1 class="h5 text-gray-900 mb-3">Silahkan registrasi</h1>
                                        <h1 class="h4 text-gray-900 mb-3">Aplikasi One Document</h1>
                                    </div>

                                    <form action="add_user.php" method="post">
                                        <div class="form-group">
                                            <input type="text" name="username" class="form-control form-control-user" placeholder="Masukkan username" required>
                                        </div>
                                        <div class="form-group">
                                            <input type="email" name="email" class="form-control form-control-user" placeholder="Masukkan email" required>
                                        </div>
                                        <div class="form-group row">
                                            <div class="col-sm-6 mb-3 mb-sm-0">
                                                <input type="password" name="password" class="form-control form-control-user" placeholder="Password" required>
                                            </div>
                                            <!--<div class="col-sm-6">
                                                <input type="password" class="form-control form-control-user" id="exampleRepeatPassword" placeholder="Repeat Password">
                                            </div> -->
                                            <div class="col-sm-6">
                                                <select name="level" class="custom-select form-control" required>
                                                    <option value="">Pilih Level</option>
                                                    <option value="user">User</option>
                                                    <option value="administrator">Admin</option>
                                                </select>
                                            </div>
                                            <!--<div class="col-sm-6 mb-3 mb-sm-0">
                                                <input type="text" name="level" class="form-control form-control-user" placeholder="user" readonly>
                                            </div> -->
                                        </div>

                                        <div class="form-group">
                                            <input type="text" class="form-control form-control-user" placeholder="Masukkan nama" name="nama" required>
                                        </div>
                                        <div class="form-group">
                                            <input type="text" name="nidn" class="form-control form-control-user" placeholder="Nomor induk dosen nasional" required>
                                        </div>
                                        <div class="form-group">
                                            <select name="prodi" class="custom-select form-control" required>
                                                <option value="">Pilih prodi</option>
                                                <option value="informatika">informatika</option>
                                                <option value="teknik komputer">T komputer</option>
                                                <option value="teknik elektro">T elektro</option>
                                            </select>
                                        </div>
                                        <div class="form-group">
                                            <select name="jafung" class="custom-select form-control" required>
                                                <option value="">Jabatan Fungsional</option>
                                                <option value="AA">AA</option>
                                                <option value="Lektor">Rektor</option>
                                                <option value="guru besar">Guru besar</option>
                                                <option value="belum">Belum</option>
                                            </select>
                                        </div>
                                        <div class="form-group">
                                            <input type="text" name="no_wa" class="form-control form-control-user" placeholder="Nomor WhatsApp" required>
                                        </div>
                                        <div class="form-group">
                                            <label for="tanggal_lahir">Tanggal Lahir</label>
                                            <input type="date" name="tgl_lahir" class="form-control datepicker" placeholder="Tanggal Lahir" required>
                                        </div>

                                        <div class="mb-3">
                                            <label for="file" class="font-weight-bold text-primary">Foto</label>
                                            <input type="file" class="form-control-file" id="file" name="foto" required>
                                            <!--accept=".jpg"> -->
                                        </div>
                                        <div class="mb-3">
                                            <img class="img-thumbnail" id="myImg">
                                        </div>

                                        <button class="btn btn-primary btn-user btn-block" type="submit">
                                            Daftar akun
                                        </button>

                                    </form>
                                    <hr>
                                    <!--<div class="text-center">
                                        <a class="small" href="forgot-password.html">Forgot Password?</a>
                                    </div> -->
                                    <div class="text-center">
                                        Sudah punya akun? <a class="small" href="index.php">Login!</a>
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
    <script src="template/vendor/jquery/jquery.min.js"></script>
    <script src="template/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <!-- Core plugin JavaScript-->
    <script src="template/vendor/jquery-easing/jquery.easing.min.js"></script>

    <!-- Custom scripts for all pages-->
    <script src="template/js/sb-admin-2.min.js"></script>
    <script>
        // save file foto di folder one document

        //
        //change foto tampil
        $("#file").on("change", function() {
            const myimg = document.getElementById("myImg");
            const input = document.getElementById("file");
            if (input.files && input.files[0]) {
                const reader = new FileReader();
                reader.onload = (e) => {
                    myimg.src = e.target.result;
                };
                reader.readAsDataURL(input.files[0]);
            } else {
                myimg.src = "";
            }
        });
    </script>

</body>

</html>