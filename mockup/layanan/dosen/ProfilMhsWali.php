<!DOCTYPE html>
<html lang="en">
<?php include('konten/sidebar.php'); ?>
<div id="layoutSidenav_content">
    <main>
        <!-- Begin Page Content -->
        <div class="container-fluid">
            <legend>Perwalian</legend>
            <form class="form-inline">
                <input type="text" class="form-control my-1 mr-sm-2" placeholder="NRP/NPM">
                <select class="custom-select my-1 mr-sm-2" id="inlineFormCustomSelectPref">
                    <option value="1">- Pilih Tahun Akademik -</option>
                    <option value="2">2019 - 2 - Semester Genap - (2019-2020)</option>
                    <option value="3">2019 - 1 - Semester Ganjil - (2019-2020)</option>
                    <option value="4">2018 - 2 - Semester Genap - (2018-2019)</option>
                    <option value="5">2018 - 1 - Semester Ganjil - (2018-2019)</option>
                    <option value="6">2017 - 2 - Semester Genap - (2017-2018)</option>
                    <option value="7">2017 - 1 - Semester Ganjil - (2017-2018)</option>
                    <option value="8">2016 - 2 - Semester Genap - (2016-2017)</option>
                    <option value="9">2016 - 1 - Semester Ganjil - (2016-2017)</option>
                </select>

                <a class="btn btn-info" href="TampilPerwalian.php" role="button"><i class="fa fa-search"></i>
                    Tampilkan</a>
            </form>
        </div>
        <br />

        <!-- table Nilai -->
        <div class="container-fluid">
            <div class="table12">
                <div class="row12 header12 green">
                    <div class="cell12">
                        NPM
                    </div>
                    <div class="cell12">
                        Nik & Nama Mahasiswa
                    </div>
                    <div class="cell12">
                        Nama Ibu
                    </div>
                    <div class="cell12">
                        Tempat Tanggal Lahir
                    </div>
                    <div class="cell12">
                        Program Studi
                    </div>
                    <div class="cell12">
                        Status
                    </div>
                    <div class="cell12">
                        SKS
                    </div>
                    <div class="cell12">
                        IPK
                    </div>
                    <div class="cell12">
                        No,Tanggal & Tahun Ijazah
                    </div>
                    <div class="cell12">
                        Tanggal & Tahaun Keluar
                    </div>
                </div>

                <div class="row12">
                    <div class="cell12" data-title="NPM">
                    <a href="ProfilMahasiswa.php" target="_blank" rel="noopener noreferrer"> 193040164</a>
                    </div>
                    <div class="cell12" data-title="NIK & Nama Mahasiswa">
                        1306023007010003
                        M. DIO GEOVANI
                    </div>
                    <div class="cell12" data-title="Nama Ibu">
                        ROSMAWATI
                    </div>
                    <div class="cell12" data-title="Tempat Tanggal Lahir">
                        Lubuk basung, 30 Juli 2001
                    </div>
                    <div class="cell12" data-title="Program Studi">
                        REG-Reguler Pagi
                        304-Teknik Informatika
                    </div>
                    <div class="cell12" data-title="Status">
                        Aktif
                    </div>
                    <div class="cell12" data-title="SKS">
                        16
                    </div>
                    <div class="cell12" data-title="IPK">
                        2.81
                    </div>
                    <div class="cell12" data-title="No, tanggal dan Status Ijazah">
                        -
                    </div>
                    <div class="cell12" data-title="Tanggal & Thun Keluar">
                        -
                    </div>
                </div>
                <!-- 2 -->
                <div class="row12">
                    <div class="cell12" data-title="NPM">
                        193040165
                    </div>
                    <div class="cell12" data-title="NIK & Nama Mahasiswa">
                        3217046407010002
                        NELLI MARLIANA
                    </div>
                    <div class="cell12" data-title="Nama Ibu">
                        ROSMIDA
                    </div>
                    <div class="cell12" data-title="Tempat Tanggal Lahir">
                        Bandung, 24 Juli 2001
                    </div>
                    <div class="cell12" data-title="Program Studi">
                        REG-Reguler Pagi
                        304-Teknik Informatika
                    </div>
                    <div class="cell12" data-title="Status">
                        Aktif
                    </div>
                    <div class="cell12" data-title="SKS">
                        18
                    </div>
                    <div class="cell12" data-title="IPK">
                        2.94
                    </div>
                    <div class="cell12" data-title="No, tanggal dan Status Ijazah">
                        -
                    </div>
                    <div class="cell12" data-title="Tanggal & Thun Keluar">
                        -
                    </div>
                </div>
            </div>
            <!-- end tabel jadwal kuliah -->
    </main>
    <!-- footer start -->
    <footer class="py-4 bg-light mt-auto">
        <div class="container-fluid">
            <div class="d-flex align-items-center justify-content-between small">
                <div class="text-muted">Copyright &copy; SITU Akademik 2021</div>
            </div>
        </div>
    </footer>
</div>
<!-- JS -->
<?php include('konten/js.php'); ?>