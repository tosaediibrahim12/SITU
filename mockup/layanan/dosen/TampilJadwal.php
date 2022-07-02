<!DOCTYPE html>
<html lang="en">
<?php include('konten/sidebar.php'); ?>
<div id="layoutSidenav_content">
    <main>
        <!-- form jadwal mengajar start -->
        <div class="container-fluid">
            <legend>Jadwal Kuliah </legend>
            <form class="form-inline">
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
                <a class="btn btn-info" href="TampilJadwal.html" role="button"><i class="fa fa-search"></i>
                    Tampilkan</a>
            </form>
        </div>
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
                        Peserta
                    </div>
                    <div class="cell12">
                        Kehadiran Mahasiswa
                    </div>
                    <div class="cell12">
                        Kehadiran Dosen
                    </div>
                    <div class="cell12">
                        Kuliah
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
                        <i class="icofont icofont-ui-note"> </i> IF164205
                    </div>
                    <div class="cell12" data-title="Matakuliah">
                        <i class="icofont icofont-book"></i> PERANCANGAN BASIS DATA
                    </div>
                    <div class="cell12" data-title="SKS">
                        <i class="icofont icofont-library"> </i>3 SKS
                    </div>
                    <div class="cell12" data-title="Kelas">
                        <i class="icofont icofont-black-board"></i> C
                    </div>
                    <div class="cell12" data-title="Ruangan">
                        <i class="icofont icofont-ui-home"> </i> SB 205
                    </div>
                    <div class="cell12" data-title="Peserta">
                        <i class="icofont icofont-users-alt-2"> </i> 35/40
                    </div>
                    <div class="cell12" data-title="Kehadiran Mahasiswa">
                        <i class="icofont icofont-pie"> </i> 96.67 %
                    </div>
                    <div class="cell12" data-title="Kehadiran Dosen">
                        <i class="icofont icofont-ui-clip-board"> </i> 1
                    </div>
                    <div class="cell12" data-title="Kuliah">
                        <div class="btn-group">
                            <a class="btn btn-success" href="#" role="button"><i
                                    class="icofont icofont-phone-circle"></i> WAG</a>
                            <a class="btn btn-primary" href="#" role="button"><i class="icofont icofont-ui-browser"></i>
                                E-learning</a>
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
                        <i class="icofont icofont-ui-note"> </i> IF163104
                    </div>
                    <div class="cell12" data-title="Matakuliah">
                        <i class="icofont icofont-book"></i> INFRASTRUKTUR TEKNOLOGI INFORMASI
                    </div>
                    <div class="cell12" data-title="SKS">
                        <i class="icofont icofont-library"> </i> 3 SKS
                    </div>
                    <div class="cell12" data-title="Kelas">
                        <i class="icofont icofont-black-board"> </i> C
                    </div>
                    <div class="cell12" data-title="Ruangan">
                        <i class="icofont icofont-ui-home"> </i> SB 406
                    </div>
                    <div class="cell12" data-title="Peserta">
                        <i class="icofont icofont-users-alt-2"> </i> 35/40
                    </div>
                    <div class="cell12" data-title="Kehadiran Mahasiswa">
                        <i class="icofont icofont-pie"> </i> 96.67 %
                    </div>
                    <div class="cell12" data-title="Kehadiran Dosen">
                        <i class="icofont icofont-ui-clip-board"></i> 1
                    </div>
                    <div class="cell12" data-title="Kuliah">
                        <div class="btn-group">
                            <a class="btn btn-success" href="#" role="button"><i
                                    class="icofont icofont-phone-circle"></i> WAG</a>
                            <a class="btn btn-primary" href="#" role="button"><i class="icofont icofont-ui-browser"></i>
                                E-learning</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </main>
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
</body>

</html>