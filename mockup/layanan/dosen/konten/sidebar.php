	<!-- Logout Modal-->
	<div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
	    aria-hidden="true">
	    <div class="modal-dialog" role="document">
	        <div class="modal-content">
	            <div class="modal-header">
	                <h5 class="modal-title" id="exampleModalLabel">Apakah yakin untuk logout?</h5>
	                <button class="close" type="button" data-dismiss="modal" aria-label="Close">
	                    <span aria-hidden="true">×</span>
	                </button>
	            </div>
	            <div class="modal-body">Pilih "Logout" di bawah ini jika Anda siap untuk mengakhiri sesi Anda saat ini.
	            </div>
	            <div class="modal-footer">
	                <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
	                <a class="btn btn-primary" href="login.php">Logout</a>
	            </div>
	        </div>
	    </div>
	</div>
	<!-- side bar -->

	<head>
	    <meta charset="utf-8" />
	    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
	    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
	    <meta name="description" content="" />
	    <meta name="author" content="" />
	    <title>SITU Akademik Unpas</title>
	    <script>
	    window.on_page_functions = [];
	    </script>
	    <!-- themify-icons line icon -->
	    <link rel="stylesheet" type="text/css" href="..\..\..\assets\icon\themify-icons\themify-icons.css">
	    <!-- ico font -->
	    <link rel="stylesheet" type="text/css" href="..\..\..\assets\icon\icofont\css\icofont.css">
	    <!-- table -->
	    <link rel="stylesheet" type="text/css"
	        href="https://prototipe.unpas.ac.id/situ/foundations/bootstrap/scss/table.css">
	    <!-- css -->
	    <link href="..\..\..\foundations\bootstrap\css\styles.css" rel="stylesheet" />
	    <link href="..\..\..\foundations\bootstrap\css\sb-admin-2.min.css" rel="stylesheet">
	    <link href="..\..\..\foundations\bootstrap\css\sb-admin-2.css" rel="stylesheet">
	    <link href="..\..\..\foundations\bootstrap\css\bootstrap.css" rel="stylesheet">
	    <link href="..\..\..\foundations\bootstrap\css\bootstrap.min.css" rel="stylesheet">
	    <link href="..\..\..\foundations\bootstrap\scss\resvonsive.css" rel="stylesheet">
	    <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/js/all.min.js" crossorigin="anonymous">
	    </script>
	    <!-- ICON -->
	    <link rel="stylesheet" type="text/css" href="..\..\..\assets\icon\themify-icons\themify-icons.css">
	    <link rel="stylesheet" type="text/css" href="..\..\..\assets\icon\icofont\css\icofont.css">
	    <link rel="stylesheet" type="text/css" href="..\..\..\assets\icon\simple-line-icons\css\simple-line-icons.css">
	    <link rel="stylesheet" type="text/css" href="..\..\..\assets\icon\feather\css\feather.css">
	    <link rel="stylesheet" type="text/css" href="..\..\..\assets\icon\font-awesome\css\font-awesome.min.css">
	</head>

	<body class="sb-nav-fixed">
	    <nav class="sb-topnav navbar navbar-expand navbar-dark bg-dark shadow ">
	        <a class="navbar-brand order-lg-0" href="Dashboard.php"><i class="ti-user"></i> Halaman Dosen</a>
	        <button class="btn btn-link btn-sm order-1 order-lg-0" id="sidebarToggle" href="#"><i
	                class="fas fa-bars"></i></button>
	        <!-- Navbar Search-->
	        <form class="d-none d-md-inline-block form-inline ml-auto mr-0 mr-md-3 my-2 my-md-0">
	            <span class="mr-2 d-none d-lg-inline text-gray-600 small">SANDRA ISLAMA PUTRA, S.Si., M.Kom., S.Si.</span>
	        </form>
	        <!-- Navbar-->
	        <ul class="navbar-nav ml-auto ml-md-0">
	            <li class="nav-item dropdown">
	                <a class="nav-link dropdown-toggle" id="userDropdown" href="#" role="button" data-toggle="dropdown"
	                    aria-haspopup="true" aria-expanded="false">
	                    <img class="img-profile rounded-circle" height="32" src="..\..\..\assets\image\logo.png"></a>
	                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="userDropdown">
	                    <a class="dropdown-item" href="Profil.php">Profil</a>
	                    <a class="dropdown-item" href="ProfilEdit.php">Edit Profil</a>
	                    <a class="dropdown-item" href="UbahKataSandi.php">Ubah Kata Kunci</a>
	                    <div class="dropdown-divider"></div>
	                    <a class="dropdown-item" href="#" data-toggle="modal" data-target="#logoutModal">Logout</a>
	                </div>
	            </li>
	        </ul>
	    </nav>
	    <div id="layoutSidenav">
	        <div id="layoutSidenav_nav">
	            <nav class="sb-sidenav accordion sb-sidenav-dark" id="sidenavAccordion">
	                <div class="sb-sidenav-menu">
	                    <div class="nav">
	                        <div class="sb-sidenav-menu-heading"></div>
	                        <a class="nav-link" href="Dashboard.php">
	                            <div class="sb-nav-link-icon">
	                                <i class="fas fa-tachometer-alt"></i>
	                            </div>
	                            Dashboard
	                        </a>
	                        <!-- 1 -->
	                        <div class="sb-sidenav-menu-heading">Perkuliahan</div>
	                        <a class="nav-link collapsed" href="#" data-toggle="collapse"
	                            data-target="#collapsePerkuliahan" aria-expanded="false"
	                            aria-controls="collapsePerkuliahan">
	                            <div class="sb-nav-link-icon">
	                                <i class="fa fa-graduation-cap"></i>
	                            </div>
	                            Perkuliahan
	                            <div class="sb-sidenav-collapse-arrow">
	                                <i class="fas fa-angle-down"></i>
	                            </div>
	                        </a>
	                        <div class="collapse" id="collapsePerkuliahan" aria-labelledby="headingOne"
	                            data-parent="#sidenavAccordion">
	                            <nav class="sb-sidenav-menu-nested nav">
	                                <a class="nav-link" href="JadwalMengajar.php">Jadwal Mengajar</a>
	                                <a class="nav-link" href="PresensiPerkuliahan.php">Presensi Perkuliahan</a>
	                                <a class="nav-link" href="NilaiPerkuliahan.php">Nilai Perkuliahan</a>
	                            </nav>
	                        </div>
	                        <!-- 2 -->
	                        <div class="sb-sidenav-menu-heading">Perwalian</div>
	                        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapsePerwalian"
	                            aria-expanded="false" aria-controls="collapsePerwalian">
	                            <div class="sb-nav-link-icon">
	                                <i class="ti-pencil-alt"></i>
	                            </div>
	                            Perwalian
	                            <div class="sb-sidenav-collapse-arrow">
	                                <i class="fas fa-angle-down"></i>
	                            </div>
	                        </a>
	                        <div class="collapse" id="collapsePerwalian" aria-labelledby="headingTwo"
	                            data-parent="#sidenavAccordion">
	                            <nav class="sb-sidenav-menu-nested nav">
	                                <a class="nav-link" href="StatusPerwalian.php">Status Perwalian</a>
	                                <a class="nav-link" href="Perwalian.php">Perwalian</a>
	                                <a class="nav-link" href="ProfilMhsWali.php">Profil Mahasiswa Wali</a>
	                                <a class="nav-link" href="JadwalKuliahMhs.php">Jadwal Kuliah Mahasiswa</a>
	                            </nav>
	                        </div>
	                        <!-- 3 -->
	                        <div class="sb-sidenav-menu-heading">Informasi Prodi</div>
	                        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseProdi"
	                            aria-expanded="false" aria-controls="collapseProdi">
	                            <div class="sb-nav-link-icon">
	                                <i class="ti-book"></i>
	                            </div>
	                            Informasi Prodi
	                            <div class="sb-sidenav-collapse-arrow">
	                                <i class="fas fa-angle-down"></i>
	                            </div>
	                        </a>
	                        <div class="collapse" id="collapseProdi" aria-labelledby="headingOne"
	                            data-parent="#sidenavAccordion">
	                            <nav class="sb-sidenav-menu-nested nav">
	                                <a class="nav-link" href="#">Teknik Kimia</a>
	                                <a class="nav-link" href="#">Teknik Informatika</a>
	                                <a class="nav-link" href="#">Teknik Pangan</a>
	                                <a class="nav-link" href="#">Teknik Industri</a>
	                                <a class="nav-link" href="#">Teknik Sipil</a>
	                            </nav>
	                        </div>

	                        <div class="sb-sidenav-menu-heading">Aplikasi Lainnya</div>
	                        <a class="nav-link" href="http://sister.unpas.ac.id/auth/login" target="_blank" rel="sister">
	                            <div class="sb-nav-link-icon">
	                                <i class="fa fa-flask"></i>
	                            </div>
	                            SISTER
	                        </a>

	                        <a class="nav-link" href="http://simlitabmas.unpas.ac.id/login.php" target="_blank"
	                            rel="simlitabmas">
	                            <div class="sb-nav-link-icon">
	                                <i class="icofont icofont-education"></i>
	                            </div>
	                            SIMLITABMAS
	                        </a>

	                        <a class="nav-link" href="https://ypt-pasundan.org/" target="_blank" rel="simpeg">
	                            <div class="sb-nav-link-icon">
	                                <i class="icofont icofont-group-students"></i>
	                            </div>
	                            SIMPEG Pasundan
	                        </a>

	                    </div>
	                </div>
	            </nav>
	        </div>