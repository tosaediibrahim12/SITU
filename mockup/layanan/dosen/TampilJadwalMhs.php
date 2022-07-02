<!DOCTYPE html>
<html lang="en">
<?php include('konten/sidebar.php'); ?>
<div id="layoutSidenav_content">
    <main>
        <!-- Begin Page Content -->
        <br />
        <!-- form jadwal mengajar start -->
        <div class="container-fluid">
            <legend>Jadwal Kuliah Mahasiswa</legend>
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

                <a class="btn btn-info" href="TampilJadwalMhs.php" role="button"><i class="fa fa-search"></i>
                    Tampilkan</a>
            </form>
        </div>

        <!-- end Presensi Perkuliahan -->

        <!-- tampil jadwal mahasiswa -->
        <br />
        <div class="container-fluid">
            <div class="table12">
                <div class="row12 header12 green">
                    <div class="cell12">
                        Hari
                    </div>
                    <div class="cell12">
                        Jam
                    </div>
                    <div class="cell12">
                        Kode Matakuliah
                    </div>
                    <div class="cell12">
                        Matakuliah
                    </div>
                    <div class="cell12">
                        SKS
                    </div>
                    <div class="cell12">
                        Kelas
                    </div>
                    <div class="cell12">
                        Ruangan
                    </div>
                    <div class="cell12">
                        Dosen
                    </div>
                    <div class="cell12">
                        Presensi
                    </div>
                    <div class="cell12">
                        Kuliah
                    </div>
                    <div class="cell12">
                        Registrasi
                    </div>
                </div>

                <div class="row12">
                    <div class="cell12" data-title="Hari">
                        <i class="icofont icofont-ui-calendar"> </i> Senin
                    </div>
                    <div class="cell12" data-title="Jam">
                        <i class="icofont icofont-ui-alarm"> </i> 09:40 ~ 12:10
                    </div>
                    <div class="cell12" data-title="Kode Matakuliah">
                        <i class="icofont icofont-ui-note"> </i> IF164606
                    </div>
                    <div class="cell12" data-title="Matakuliah">
                        <i class="icofont icofont-book"></i> VERIFIKASI & VALIDASI PERANGKAT LUNAK
                    </div>
                    <div class="cell12" data-title="SKS">
                        <i class="icofont icofont-library"> </i> 3 SKS
                    </div>
                    <div class="cell12" data-title="Kelas">
                        <i class="icofont icofont-black-board"> </i> C
                    </div>
                    <div class="cell12" data-title="Ruangan">
                        <i class="icofont icofont-ui-home"> </i> SB 205
                    </div>
                    <div class="cell12" data-title="Dosen">
                        <i class="icofont icofont-graduate-alt"></i> DR. AYI PURBASARI, ST., MT.
                    </div>
                    <div class="cell12" data-title="Presensi">
                        <i class="icofont icofont-pie"> </i> 1.00 dari 1 pertemuan (100.00 %)
                    </div>
                    <div class="cell12" data-title="Kuliah">
                        <div class="btn-group">
                            <a class="btn btn-success" href="#" role="button"><i
                                    class="icofont icofont-phone-circle"></i> WAG</a>
                            <a class="btn btn-primary" href="#" role="button"><i class="icofont icofont-ui-browser"></i>
                                E-learning</a>
                        </div>
                    </div>
                    <div class="cell12" data-title="Registrasi ">
                        <div class="btn-group">
                            <a class="btn btn-success" href="#" role="button"><i class="icofont icofont-paper"></i>
                                Pindah Kelas</a>
                            <a class="btn btn-info" href="#" role="button"><i class="icofont icofont-paper"></i>
                                Ajuan Presensi</a>
                        </div>
                    </div>
                </div>
                <!-- 2 -->
                <div class="row12">
                    <div class="cell12" data-title="Hari">
                        <i class="icofont icofont-ui-calendar"> </i> Kamis
                    </div>
                    <div class="cell12" data-title="Jam">
                        <i class="icofont icofont-ui-alarm"> </i> 13:00 ~ 15:30
                    </div>
                    <div class="cell12" data-title="Kode Matakuliah">
                        <i class="icofont icofont-ui-note"> </i> IF162614
                    </div>
                    <div class="cell12" data-title="Matakuliah">
                        <i class="icofont icofont-book"></i> SISTEM INFORMASI BISNIS
                    </div>
                    <div class="cell12" data-title="SKS">
                        <i class="icofont icofont-library"></i> 2 SKS
                    </div>
                    <div class="cell12" data-title="Kelas">
                        <i class="icofont icofont-black-board"> </i> C
                    </div>
                    <div class="cell12" data-title="Ruangan">
                        <i class="icofont icofont-ui-home"> </i> SB 406
                    </div>
                    <div class="cell12" data-title="Dosen">
                        <i class="icofont icofont-graduate-alt"></i> FERRY MULYANTO, ST., M.KOM
                    </div>
                    <div class="cell12" data-title="Kehadiran Mahasiswa">
                        <i class="icofont icofont-pie"> </i> 1.00 dari 1 pertemuan (100.00 %)
                    </div>
                    <div class="cell12" data-title="Kuliah">
                        <div class="btn-group">
                            <a class="btn btn-success" href="#" role="button"><i
                                    class="icofont icofont-phone-circle"></i> WAG</a>
                            <a class="btn btn-primary" href="#" role="button"><i class="icofont icofont-ui-browser"></i>
                                E-learning</a>
                        </div>
                    </div>
                    <div class="cell12" data-title="Registrasi">
                        <div class="btn-group">
                            <a class="btn btn-success" href="#" role="button"><i class="icofont icofont-paper"></i>
                                Pindah Kelas</a>
                            <a class="btn btn-info" href="#" role="button"><i class="icofont icofont-paper"></i>
                                Ajuan Presensi</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </main>
    <!-- footer start -->
    <?php include('konten/footer.php'); ?>
</div>
<!-- JS -->
<?php include('konten/js.php'); ?>
</body>

</html>