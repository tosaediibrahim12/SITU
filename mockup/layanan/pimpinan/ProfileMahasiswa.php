<!DOCTYPE html>
<html lang="en">
<?php include('konten/konten.php'); ?>
<div class="right floated thirteen wide computer sixteen wide phone column" id="content">
            <!-- Content Row -->
            <br />
            <!-- form  start -->
            <div class="container-fluid">
                <div class="">
                    <div class="row g-2">
                        <div class="col-md">
                            <div class="form-floating">
                                <input type="email" class="form-control" id="floatingInputGrid"
                                    placeholder="name@example.com" value="">
                                <label for="floatingInputGrid">Cari Mahasiswa</label>
                            </div>
                        </div>
                        <div class="col-md">
                            <div class="form-floating">

                            </div>
                        </div>
                    </div>

                    <!-- button -->
                    <div class="col-md">
                        <a class="btn btn-primary" href="#" role="button">NIP</a>
                        <a class="btn btn-primary" href="#" role="button">Nama</a>
                        <a class="btn btn-primary" href="#" role="button">Semua</a>
                    </div>
                </div>
            </div>
          
            <!-- end form -->
            <br />

            <!-- table card full -->
            <div class="container-fluid">
                <div class="page-body">
                    <!-- Config. table start -->
                    <div class="card">
                        <div class="card-header">
                            <h5>Profile Mahasiswa</h5>
                        </div>
                        <div class="card-block">
                            <!-- babeh -->
                            <!-- tabel -->
                            <div class="mb-3">
                                <div class="dt-responsive table-responsive" style="color: #f76700;">
                                    <table class="table row-hover table table-striped">
                                        <thead>
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

                                                <td class="row12">1</td>
                                                <td class="cell12" data-label="NPM"> <a href="ProfilMahasiswa.php">193040164</a>
                                                    
                                                </td>
                                                <td class="cell12" data-label="NIK &amp; Nama Mahasiswa">
                                                    1306023007010003
                                                    M. DIO GEOVANI
                                                </td>
                                                <td class="cell12" data-label="Nama Ibu">
                                                    ROSMAWATI
                                                </td>
                                                <td class="cell12" data-label="Tempat Tanggal Lahir">
                                                    Lubuk basung, 30 Juli 2001
                                                </td>
                                                <td class="cell12" data-label="Program Studi">
                                                    REG-Reguler Pagi
                                                    304-Teknik Informatika
                                                </td>
                                                <td class="cell12" data-label="Status">
                                                    Aktif
                                                </td>
                                                <td class="cell12" data-label="SKS">
                                                    16
                                                </td>
                                                <td class="cell12" data-label="IPK">
                                                    2.81
                                                </td>
                                                <td class="cell12" data-label="No, tanggal dan Status Ijazah">
                                                    -
                                                </td>
                                                <td class="cell12" data-label="Tanggal &amp; Thun Keluar">
                                                    -
                                                </td>
                                            </tr>
                                            <!-- 2 -->
                                            <tr>
                                                <td class="row12">2</td>
                                                <td class="cell12" data-label="NPM">
                                                    193040165
                                                </td>
                                                <td class="cell12" data-label="NIK &amp; Nama Mahasiswa">
                                                    3217046407010002
                                                    NELLI MARLIANA
                                                </td>
                                                <td class="cell12" data-label="Nama Ibu">
                                                    ROSMIDA
                                                </td>
                                                <td class="cell12" data-label="Tempat Tanggal Lahir">
                                                    Bandung, 24 Juli 2001
                                                </td>
                                                <td class="cell12" data-label="Program Studi">
                                                    REG-Reguler Pagi
                                                    304-Teknik Informatika
                                                </td>
                                                <td class="cell12" data-label="Status">
                                                    Aktif
                                                </td>
                                                <td class="cell12" data-label="SKS">
                                                    18
                                                </td>
                                                <td class="cell12" data-label="IPK">
                                                    2.94
                                                </td>
                                                <td class="cell12" data-label="No, tanggal dan Status Ijazah">
                                                    -
                                                </td>
                                                <td class="cell12" data-label="Tanggal &amp; Thun Keluar">
                                                    -
                                                </td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                        <!-- tabel -->
                    </div>
                </div>
                <!-- Config. table end -->
            </div>
        </div>
    </div>
    <!-- footer start -->
</div>
<!-- JS -->
<?php include('konten/js.php'); ?>
</body>

</html>