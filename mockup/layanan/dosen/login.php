<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- Bootstrap CSS -->

    <link rel="stylesheet" href="..\..\..\foundations\bootstrap\scss\login.css">
    <link rel="stylesheet" href="..\..\..\foundations\bootstrap\scss\floating-labels.css">
    <link href="..\..\..\foundations\bootstrap\css\styles.css" rel="stylesheet">
    <!-- ICON -->
    <link rel="stylesheet" type="text/css" href="..\..\..\assets\icon\themify-icons\themify-icons.css">
    <link rel="stylesheet" type="text/css" href="..\..\..\assets\icon\icofont\css\icofont.css">
    <link rel="stylesheet" type="text/css" href="..\..\..\assets\icon\simple-line-icons\css\simple-line-icons.css">
    <link rel="stylesheet" type="text/css" href="..\..\..\assets\icon\feather\css\feather.css">
    <link rel="stylesheet" type="text/css" href="..\..\..\assets\icon\font-awesome\css\font-awesome.min.css">

    <title>SITU Universitas pasundan</title>
</head>

<body>
    <div class="container-fluid px-1 px-md-5 px-lg-1 px-xl-5 py-5 mx-auto">
        <div class="card card0 border-0">
            <div class="row d-flex">
                <div class="col-lg-6">
                    <div class="card1 pb-5">
                        <div class="row px-3 justify-content-center mt-6 mb-7 border-line">
                            <img src="..\..\..\assets\image\logo.png" class="image">
                        </div>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="card2 card border-0 px-4 py-5">
                        <div class="row mb-4 px-3">
                            <div class="row">
                                <h2><i class="icofont icofont-dashboard-web"></i> Selamat Datang Di Halaman Login Dosen
                                </h2>
                            </div>
                            <div>
                                <div> </div>
                            </div>

                        </div>
                        <div class="row px-3 mb-4"></div>
                        <div class="form-floating mb-3">
                            <input type="email" class="form-control" id="floatingInput" placeholder="Username">
                            <label for="floatingInput">Username</label>
                        </div>
                        <div class="form-floating">
                            <input type="password" id="myInput" class="form-control" id="floatingPassword"
                                placeholder="Password">
                            <label for="floatingPassword">Password</label>
                        </div>
                        <div class="row px-3 mb-4">
                            <div class="custom-control custom-checkbox custom-control-inline">
                                <input id="chk1" type="checkbox" name="chk" class="custom-control-input"><label
                                    for="chk1" class="custom-control-label text-sm">Ingat username</label>
                            </div>
                            <div class="custom-control custom-checkbox custom-control-inline">
                                <input id="chk2" type="checkbox" name="chk" class="custom-control-input"
                                    onclick="myFunction()"><label for="chk2" class="custom-control-label text-sm">Lihat
                                    Sandi</label>
                            </div>


                            <a href="ForgotPassword.php" class="ml-auto mb-0 text-sm">Lupa Password?</a>
                        </div>


                        <div class="row mb-3 px-3">
                            <a class="btn btn-outline-primary" href="Dashboard.php" role="button"><i
                                    class="icofont icofont-login"></i> Login</a>
                        </div>
                    </div>
                </div>
            </div>
            <!-- footer start -->
            <div class="bg-blue py-4">
                <div class="row px-3">
                    <small class="ml-4 ml-sm-5 mb-2 text-center">Copyright &copy; Universitas Pasundan Bandung
                        2021</small>

                </div>
            </div>
            <!-- footer end -->
        </div>
    </div>
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script>
    function myFunction() {
        var x = document.getElementById("myInput");
        if (x.type === "password") {
            x.type = "text";
        } else {
            x.type = "password";
        }
    }
    </script>
    <?php include('konten/js.php'); ?>
</body>
<!-- Optional JavaScript; choose one of the two! -->
<!-- Option 1: jQuery and Bootstrap Bundle (includes Popper) -->
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"
    integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous">
</script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-Piv4xVNRyMGpqkS2by6br4gNJ7DXjqk09RmUpJ8jgGtD7zP9yug3goQfGII0yAns" crossorigin="anonymous">
</script>
<!-- Option 2: Separate Popper and Bootstrap JS -->
<!--
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.min.js" integrity="sha384-+YQ4JLhjyBLPDQt//I+STsc9iw4uQqACwlvpslubQzn4u2UU2UFM80nGisd026JF" crossorigin="anonymous"></script>
    -->
</body>

</html>