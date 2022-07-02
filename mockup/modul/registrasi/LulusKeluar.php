<!DOCTYPE html>
<html lang="en">
<?php include('konten/konten.php'); ?>
<div class="pcoded-content">
    <div id="layoutSidenav_content">
        <main>
            <!-- Begin Page Content -->
            <div class="container-fluid">
                <!-- Content Row -->
                <br />
                <!-- form jadwal mengajar start -->
                <div class="row g-2">
                    <!-- Start -->
                    <div class="col-md">
                        <div class="form-floating">
                            <input type="email" class="form-control" id="floatingInputGrid"
                                placeholder="name@example.com" value="">
                            <label for="floatingInputGrid">Mahasiswa</label>
                        </div>
                    </div>
                    <!-- button -->
                    <div class="col-md">
                        <a class="btn btn-primary" href="TampilStatusPerwalian.php" role="button">Nama</a>
                        <a class="btn btn-primary" href="TampilStatusPerwalian.php" role="button">Nrp</a>
                        <a class="btn btn-primary" href="TampilStatusPerwalian.php" role="button">Semua</a>
                    </div>
                </div>
                <br />
                <br />
                <!-- table card full -->
                <div class="container-fluid">
                    <div class="page-body">
                        <!-- Config. table start -->
                        <div class="card">
                            <div class="card-header">
                                <h5> Daftar Mahasiswa Lulus/Keluar/DO</h5>
                                <div class="card-header-right">
                                    <ul class="list-unstyled card-option">
                                        <li><i class="feather icon-maximize full-card"></i></li>
                                        <li><i class="feather icon-minus minimize-card"></i></li>
                                        <li><i class="feather icon-trash-2 close-card"></i></li>
                                    </ul>
                                </div>
                            </div>
                            <div class="card-block">
                                <!-- babeh -->
                                <!-- tabel -->
                                <div class="mb-3">
                                    <div class="card-content p-2" style="color: #f76700;">
                                        <table class="table row-hover">
                                            <thead style="color: #f76700;">

                                                <tr>
                                                    <th class="tbl">#</th>
                                                    <th class="tbl">NPM</th>
                                                    <th class="tbl">NIK dan Nama Mahasiswa</th>
                                                    <th class="tbl">Nama Ibu</th>
                                                    <th class="tbl">Tempat Lahir<br>Tanggal Lahir</th>
                                                    <th class="tbl">Program<br>Program Studi</th>
                                                    <th class="tbl">Status</th>
                                                    <th class="tbl">SKS</th>
                                                    <th class="tbl">IPK</th>
                                                    <th class="tbl">No, Tanggal dan <br>Status Ijazah</th>
                                                    <th class="tbl">Tanggal dan<br>Thn Keluar</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <tr>
                                                    <td data-label="#">1</td>
                                                    <td data-label="NRP"><a href="#">003010182</a><br></td>
                                                    <td data-label="NIK dan Nama Mahasiswa">CECEP RUHIMAT</td>
                                                    <td data-label="Nama Ibu">IJEM</td>
                                                    <td data-label="TTL"> Jakarta, 21 April 1981</td>
                                                    <td data-label="Program Program Studi">REG-Reguler
                                                        Pagi<br>301-Teknik Industri</td>
                                                    <td data-label="Status">Drop-out</td>
                                                    <td data-label="SKS">0</td>
                                                    <td data-label="IPK">0.00</td>
                                                    <td data-label="NO & status Ijazah">-</td>
                                                    <td data-label="thn Keluar">-</td>
                                                </tr>

                                                <tr>
                                                    <td data-label="#">2</td>
                                                    <td data-label="NRP"><a href="#">003010182</a><br></td>
                                                    <td data-label="NIK dan Nama Mahasiswa">Ningma</td>
                                                    <td data-label="Nama Ibu">Inuibu</td>
                                                    <td data-label="TTL"> Jakarta, 21 April 1983</td>
                                                    <td data-label="Program Program Studi">REG-Reguler
                                                        Pagi<br>301-Teknik Industri</td>
                                                    <td data-label="Status">Drop-out</td>
                                                    <td data-label="SKS">0</td>
                                                    <td data-label="IPK">0.00</td>
                                                    <td data-label="NO & status Ijazah">-</td>
                                                    <td data-label="thn Keluar">-</td>
                                                </tr>

                                            </tbody>
                                        </table>

                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- tabel -->
                    </div>
                </div>
                <!-- Config. table end -->
            </div>
        </main>
        <!-- footer start -->
        <?php include('konten/footer.php'); ?>
    </div>
    <!-- JS -->
    <?php include('konten/js.php'); ?>
    </body>

</html>