<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta content="initial-scale=1, minimum-scale=1, width=device-width" name="viewport">
    <meta name="robots" content="all,follow">
    <title>SIMPLE UI &mdash; Admin Templates</title>

    <!-- inject:css -->
    <link rel="stylesheet" href="..\..\..\foundations\semantic\vendors\fomantic-ui\semantic.min.css">
    <link rel="stylesheet" href="..\..\..\foundations\semantic\css\main.css">
    <!-- endinject -->
    <!-- chartjs:css -->
    <link rel="stylesheet" href="..\..\..\foundations\semantic\vendors\chart.js\Chart.min.css">
    <!-- endinject -->

    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge" />
    <title>Situ Akademik Universitas Pasundan</title>
    <link rel="icon" href="..\..\..\assets\images\Logo-unpas.png" type="image/x-icon">


    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/semantic-ui/2.4.1/semantic.min.css" integrity="sha256-9mbkOfVho3ZPXfM7W8sV2SndrGDuh7wuyLjtsWeTI1Q=" crossorigin="anonymous" />

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.11.2/css/all.min.css" integrity="sha256-+N4/V/SbAFiW1MPBCXnfnP9QSN3+Keu+NlB+0ev/YKQ=" crossorigin="anonymous" />
    <link rel="stylesheet" href="https://prototipe.unpas.ac.id/situ/foundations/semantic/css/style.css" />
    <!-- floating label -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KyZXEAg3QhqLMpG8r+8fhAXLRk2vvoC2f3B09zVXn8CA5QIVfZOJ3BCsw2P0p/We" crossorigin="anonymous">
    <!-- Table Responsive -->
    <link rel="stylesheet" type="text/css" href="https://prototipe.unpas.ac.id/situ/foundations/bootstrap/scss/table.css">
    <!-- themify-icons line icon -->
    <link rel="stylesheet" type="text/css" href="..\..\..\assets\icon\themify-icons\themify-icons.css">
    <!-- ico font -->
    <link rel="stylesheet" type="text/css" href="..\..\..\assets\icon\icofont\css\icofont.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css" integrity="sha384-zCbKRCUGaJDkqS1kPbPd7TveP5iyJE0EjAuZQTgFLD2ylzuqKfdKlfG/eSrtxUkn" crossorigin="anonymous">

</head>

<body>
    <div class="ui grid">
        <div class="row">
            <div class="ui grid">
                <!-- BEGIN NAVBAR -->
                <!-- computer only navbar -->
                <div class="computer only row">
                    <div class="column">
                        <div class="ui top fixed menu navcolor">
                            <div class="item">
                                <img src="..\..\..\assets\images\Logo-unpas.png" alt="SimpleIU">
                            </div>
                            <div class="left menu">
                                <div class="nav item">
                                    <strong class="navtext">Layanan Pimpinan</strong>
                                </div>
                            </div>
                            <div class="ui top pointing dropdown admindropdown link item right">
                                <img class="imgrad" src="..\..\..\assets\images\Logo-unpas.png" alt="">
                                <span class="clear navtext"><strong>Hi, Kabayan</strong></span>
                                <i class="dropdown icon navtext"></i>
                                <div class="menu">
                                    <div class="item">
                                        <p><i class="settings icon"></i>Account Setting</p>
                                    </div>
                                    <a href="login.html" class="item"><i class="sign out alternate icon"></i> Logout</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- end computer only navbar -->
                <!-- mobile and tablet only navbar -->
                <div class="tablet mobile only row">
                    <div class="column">
                        <div class="ui top fixed menu navcolor">
                            <a id="showmobiletabletsidebar" class="item navtext"><i class="content icon"></i></a>
                            <div class="right menu">
                                <div class="item">
                                    <strong class="navtext">Layanan Pimpinan</strong>
                                </div>
                                <div class="item">
                                    <img src="..\..\..\assets\images\Logo-unpas.png">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- end mobile and tablet only navbar -->
                <!-- END NAVBAR -->

                <!-- BEGIN SIDEBAR -->
                <!-- mobile and tablet only sidebar -->
                <div class="tablet mobile only row">
                    <div id="mobiletabletsidebar" class="mobiletabletsidebar animate hidden">
                        <div class="ui left fixed vertical menu scrollable">
                            <div class="item">
                                <table>
                                    <tr>
                                        <td>
                                            <img class="ui mini image" src="..\..\..\assets\images\Logo-unpas.png">
                                        </td>
                                        <td>
                                            <span class="clear"><strong> Sidebar</strong></span>
                                        </td>
                                    </tr>
                                </table>
                            </div>
                            <a class="item" href="index.php"><i class="home icon"></i> Dashboard</a>
                            <!-- Begin Simple Accordion -->
                            <div class="ui accordion simpleaccordion item">
                                <div class="title titleaccordion item"><i class="dropdown icon"></i> Kurikulum</div>
                                <div class="content contentaccordion">
                                    <a class="item" href="Kurikulum.php">
                                        <div><i class="ti-book"></i> Kurikulum</div>
                                    </a>
                                    <a class="item" href="ProfileDosen.php">
                                        <div><i class="ti-user"></i> Profil Dosen</div>
                                    </a>
                                    <a class="item" href="ProfileMahasiswa.php">
                                        <div><i class="users icon"></i> Profil Mahasiswa</div>
                                    </a>
                                </div>
                            </div>
                            <!-- perkuliahan mobile -->
                            <div class="ui accordion simpleaccordion item">
                                <div class="title titleaccordion item"><i class="dropdown icon"></i> Perkuliahan</div>
                                <div class="content contentaccordion">
                                    <a class="item" href="JadwalKuliah.php">
                                        <i class="ti-calendar"></i> Jadwal Perkuliahan
                                    </a>
                                    <a class="item" href="JadwalMengajarDosen.php">
                                        <div><i class="ti-calendar"></i> Jadwal Mengajar Dosen</div>
                                    </a>
                                    <a class="item" href="KehadiranDosen.php">
                                        <div><i class="ti-check-box"></i> Kehadiran Dosen di Kampus</div>
                                    </a>
                                    <a class="item" href="Monitoring.php">
                                        <div><i class="ti-eye"></i> Monitoring Perkuliahan</div>
                                    </a>
                                    <a class="item" href="StatusAkademikMhs.php">
                                        <div><i class="ti-user"></i>Status Akademik Mahasiswa</div>
                                    </a>
                                    <a class="item" href="LaporanKehadiranDosen.php">
                                        <div><i class="ti-pie-chart"></i> Laporan Kehadiran Dosen</div>
                                    </a>
                                    <a class="item" href="LaporanKehadiranMhs.php">
                                        <div><i class="ti-pie-chart"></i> Laporan Kehadiran Mahasiswa</div>
                                    </a>
                                    <a class="item" href="RekapKehadiranMhs.php">
                                        <div><i class="ti-server"></i> Rekap Kehadiran Mahasiswa</div>
                                    </a>
                                </div>
                            </div>
                            <!-- End Simple Accordion -->
                            <!-- Perwalian -->
                            <div class="ui accordion simpleaccordion item">
                                <div class="title titleaccordion item"><i class="dropdown icon"></i> Perwalian</div>
                                <div class="content contentaccordion">
                                    <a class="item" href="StatusPerwalian.php">
                                        <div><i class="ti-folder"></i> Status Perwalian</div>
                                    </a>
                                    <a class="item" href="RP_Kelas.php">
                                        <div><i class="ti-folder"></i> Rekap Perwalian Per Kelas</div>
                                    </a>
                                    <a class="item" href="RP_Matkul.php">
                                        <div><i class="ti-folder"></i> Rekap Perwalian Per MK</div>
                                    </a>
                                    <a class="item" href="RP_Prodi.php">
                                        <div><i class="ti-folder"></i> Rekap Perwalian Per Prodi</div>
                                    </a>
                                    <a class="item" href="RP_DosenWali.php">
                                        <div><i class="ti-folder"></i> Rekap Perwalian Per Dosen Wali</div>
                                    </a>
                                </div>
                            </div>
                            <!-- perwalian -->
                            <!-- menu sisa -->
                            <a href="FinalisasiNilai.php" class="item">
                                <div>
                                    <i class="ti-blackboard"></i>
                                    Finalisasi Nilai
                                </div>
                            </a>

                            <a href="RekapSebaranNilai.php" class="item">
                                <div>
                                    <i class="ti-harddrives"></i>
                                    Rekap Sebaran Nilai
                                </div>
                            </a>
                            <a href="DetailSebaranNilai.php" class="item">
                                <div>
                                    <i class="ti-bar-chart"></i>
                                    Detail Sebaran Nilai
                                </div>
                            </a>

                            <a href="EvaluasiNilaiMhs.php" class="item">
                                <div>
                                    <i class="icon lightbulb"></i>
                                    Evaluasi Nilai Mahasiswa
                                </div>
                            </a>
                            <a href="TranskripNilai.php" class="item">
                                <div>
                                    <i class="icon chart line"></i>
                                    Transkrip Nilai
                                </div>
                            </a>

                            <a href="NilaiMahasiswa.php" class="item">
                                <div>
                                    <i class="ti-id-badge"></i>
                                    Nilai Mahasiswa
                                </div>
                            </a>
                            <a href="PesertaTugasAkhir.php" class="item">
                                <div>
                                    <i class="ti-ruler-pencil"></i>
                                    Peserta Tugas Akhir
                                </div>
                            </a>
                            <a href="SKYudisium.php" class="item">
                                <div>
                                    <i class="ti-clip"></i>
                                    SK Yudisium
                                </div>
                            </a>
                            <a href="LulusanPertahun.php" class="item">
                                <div>
                                    <i class="users icon"></i>
                                    Lulusan Pertahun
                                </div>
                            </a>
                            <a href="LulusanPerSemester.php" class="item">
                                <div>
                                    <i class="users icon"></i>
                                    Lulusan Per Semester
                                </div>
                            </a>
                            <!-- menu sisa end -->
                            <a class="item"><i class="settings icon"></i> Settings</a>
                            <a href="login.html" class="item"><i class="sign out alternate icon"></i> Logout</a>
                            <a class="item" href="https://fomantic-ui.com/"><i class="heart icon"></i>More Components</a>
                            <div class="item" id="hidemobiletabletsidebar">
                                <button class="fluid ui button">
                                    Close
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- end mobile and tablet only sidebar -->
                <!-- computer only sidebar -->
                <div class="computer only row">
                    <div class="left floated three wide computer column" id="computersidebar">
                        <div class="ui vertical fluid menu scrollable" id="simplefluid">
                            <div class="clearsidebar"></div>
                            <div class="item">
                                <img src="..\..\..\assets\images\Logo-unpas.png" id="sidebar-image">
                            </div>
                            <a class="item" href="index.php"><i class="home icon"></i> Dashboard</a>
                            <!-- Begin Simple Accordion -->
                            <!-- kurikulum start -->
                            <div class="item">

                            </div>
                            <div class="ui accordion simpleaccordion item">
                                <div class="title titleaccordion item"><i class="dropdown icon"></i> Kurikulum</div>
                                <div class="content contentaccordion">
                                    <a class="item" href="Kurikulum.php">
                                        <div><i class="ti-book"></i> Kurikulum</div>
                                    </a>
                                    <a class="item" href="ProfileDosen.php">
                                        <div><i class="ti-user"></i> Profil Dosen</div>
                                    </a>
                                    <a class="item" href="ProfileMahasiswa.php">
                                        <div><i class="users icon"></i> Profil Mahasiswa</div>
                                    </a>
                                </div>
                            </div>
                            <!-- kurikulum end -->
                            <div class="ui accordion simpleaccordion item">
                                <div class="title titleaccordion item"><i class="dropdown icon"></i> Layanan Perkuliahan</div>
                                <div class="content contentaccordion">
                                    <a class="item" href="JadwalKuliah.php">
                                        <i class="ti-calendar"></i> Jadwal Perkuliahan
                                    </a>
                                    <a class="item" href="JadwalMengajarDosen.php">
                                        <div><i class="ti-calendar"></i> Jadwal Mengajar Dosen</div>
                                    </a>
                                    <a class="item" href="KehadiranDosen.php">
                                        <div><i class="ti-check-box"></i> Kehadiran Dosen di Kampus</div>
                                    </a>
                                    <a class="item" href="Monitoring.php">
                                        <div><i class="ti-eye"></i> Monitoring Perkuliahan</div>
                                    </a>
                                    <a class="item" href="StatusAkademikMhs.php">
                                        <div><i class="ti-user"></i>Status Akademik Mahasiswa</div>
                                    </a>
                                    <a class="item" href="LaporanKehadiranDosen.php">
                                        <div><i class="ti-pie-chart"></i> Laporan Kehadiran Dosen</div>
                                    </a>
                                    <a class="item" href="LaporanKehadiranMhs.php">
                                        <div><i class="ti-pie-chart"></i> Laporan Kehadiran Mahasiswa</div>
                                    </a>
                                    <a class="item" href="RekapKehadiranMhs.php">
                                        <div><i class="ti-server"></i> Rekap Kehadiran Mahasiswa</div>
                                    </a>
                                </div>
                            </div>
                            <!-- End Simple Accordion -->
                            <!-- Perwalian -->
                            <div class="ui accordion simpleaccordion item">
                                <div class="title titleaccordion item"><i class="dropdown icon"></i> Perwalian</div>
                                <div class="content contentaccordion">
                                    <a class="item" href="StatusPerwalian.php">
                                        <div><i class="ti-folder"></i> Status Perwalian</div>
                                    </a>
                                    <a class="item" href="RP_Kelas.php">
                                        <div><i class="ti-folder"></i> Rekap Perwalian Per Kelas</div>
                                    </a>
                                    <a class="item" href="RP_Matkul.php">
                                        <div><i class="ti-folder"></i> Rekap Perwalian Per MK</div>
                                    </a>
                                    <a class="item" href="RP_Prodi.php">
                                        <div><i class="ti-folder"></i> Rekap Perwalian Per Prodi</div>
                                    </a>
                                    <a class="item" href="RP_DosenWali.php">
                                        <div><i class="ti-folder"></i> Rekap Perwalian Per Dosen Wali</div>
                                    </a>
                                </div>
                            </div>
                            <!-- perwalian -->
                            <!-- menu sisa -->
                            <a href="FinalisasiNilai.php" class="item">
                                <div>
                                    <i class="ti-blackboard"></i>
                                    Finalisasi Nilai
                                </div>
                            </a>

                            <a href="RekapSebaranNilai.php" class="item">
                                <div>
                                    <i class="ti-harddrives"></i>
                                    Rekap Sebaran Nilai
                                </div>
                            </a>
                            <a href="DetailSebaranNilai.php" class="item">
                                <div>
                                    <i class="ti-bar-chart"></i>
                                    Detail Sebaran Nilai
                                </div>
                            </a>

                            <a href="EvaluasiNilaiMhs.php" class="item">
                                <div>
                                    <i class="icon lightbulb"></i>
                                    Evaluasi Nilai Mahasiswa
                                </div>
                            </a>
                            <a href="TranskripNilai.php" class="item">
                                <div>
                                    <i class="icon chart line"></i>
                                    Transkrip Nilai
                                </div>
                            </a>

                            <a href="NilaiMahasiswa.php" class="item">
                                <div>
                                    <i class="ti-id-badge"></i>
                                    Nilai Mahasiswa
                                </div>
                            </a>
                            <a href="PesertaTugasAkhir.php" class="item">
                                <div>
                                    <i class="ti-ruler-pencil"></i>
                                    Peserta Tugas Akhir
                                </div>
                            </a>
                            <a href="SKYudisium.php" class="item">
                                <div>
                                    <i class="ti-clip"></i>
                                    SK Yudisium
                                </div>
                            </a>
                            <a href="LulusanPertahun.php" class="item">
                                <div>
                                    <i class="users icon"></i>
                                    Lulusan Pertahun
                                </div>
                            </a>
                            <a href="LulusanPerSemester.php" class="item">
                                <div>
                                    <i class="users icon"></i>
                                    Lulusan Per Semester
                                </div>
                            </a>
                            <!-- menu sisa end -->
                            <a href="login.html" class="item"><i class="sign out alternate icon"></i> Logout</a>
                            <a class="item" href="https://fomantic-ui.com/"><i class="heart icon"></i>More Components</a>
                            <a class="item"></a>
                        </div>
                    </div>
                </div>
                <!-- end computer only sidebar -->
                <!-- END SIDEBAR -->
            </div>
        </div>