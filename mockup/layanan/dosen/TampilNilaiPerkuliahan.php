<!DOCTYPE html>
<html lang="en">
<?php include('konten/sidebar.php'); ?>
<div id="layoutSidenav_content">
    <main>
        <!-- Begin Page Content -->
        <br />
        <!-- form  start -->
        <div class="container-fluid">
            <legend>Nilai Perkuliahan</legend>
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

                <select class="custom-select my-1 mr-sm-2" id="inlineFormCustomSelectPref">
                    <option selected>- Pilih Mata Kuliah -</option>
                    <option value="1">IF164205 - Perancangan Basis Data - C (kamis - 13.00) </option>
                    <option value="2">-</option>
                    <option value="3">-</option>
                </select>
                <br />
                <a class="btn btn-info" href="TampilNilaiPerkuliahan.php" role="button"><i class="fa fa-search"></i>
                    Tampilkan</a>
            </form>
        </div>
        <!-- form end  -->
        <br />
        <!-- table Nilai -->
        <div class="container-fluid">
            <div class="col-right">
                <a class="btn btn-info" href="#" role="button"><i class="icofont icofont-paper"></i> Unggah Nilai</a>
            </div>
            <br />
            <div class="table12">
                <div class="row12 header12 green">
                    <div class="cell12">NPM</div>
                    <div class="cell12">Nama Mahasiswa</div>
                    <div class="cell12">Tugas Mandiri
                        <div class="cell12"> 1 </div>
                        <div class="cell12"> 2 </div>
                        <div class="cell12"> 3 </div>
                        <div class="cell12"> 4 </div>
                    </div>
                    <div class="cell12">Presensi</div>
                    <div class="cell12">UTS</div>
                    <div class="cell12">UAS</div>
                    <div class="cell12">Paktikum </div>
                    <div class="cell12">Nilai Akhir</div>
                    <div class="cell12">Grade</div>
                    <div class="cell12">Status</div>
                </div>

                <div class="row12">
                    <div class="cell12" data-title="NPM">173040102</div>
                    <div class="cell12" data-title="Nama Mahasiswa">Tosaedi Ibrahim</div>
                    <div class="cell12" data-title="Tugas Mandiri">
                        <div class="cell12" data-title="Tugas Mandiri 1">80</div>
                        <div class="cell12" data-title="Tugas Mandiri 2">80</div>
                        <div class="cell12" data-title="Tugas Mandiri 3">80</div>
                        <div class="cell12" data-title="Tugas Mandiri 4">80</div>
                    </div>
                    <div class="cell12" data-title="Presensi">90%</div>
                    <div class="cell12" data-title="UTS">85</div>
                    <div class="cell12" data-title="UAS">79</div>
                    <div class="cell12" data-title="Praktikum">90</div>
                    <div class="cell12" data-title="Nilai Akhir">89</div>
                    <div class="cell12" data-title="Grade">A</div>
                    <div class="cell12" data-title="Status">
                        Aktif <i class="fa fa-check row-blue"></i>
                    </div>
                </div>
                <!-- 2 -->
                <div class="row12">
                    <div class="cell12" data-title="NPM">173040102</div>
                    <div class="cell12" data-title="Nama Mahasiswa">Fakri Eka abdul malik aziz fathurohman</div>
                    <div class="cell12" data-title="Tugas Mandiri">
                        <div class="cell12" data-title="Tugas Mandiri 1">80</div>
                        <div class="cell12" data-title="Tugas Mandiri 2">80</div>
                        <div class="cell12" data-title="Tugas Mandiri 3">80</div>
                        <div class="cell12" data-title="Tugas Mandiri 4">80</div>
                    </div>
                    <div class="cell12" data-title="Presensi">90%</div>
                    <div class="cell12" data-title="UTS">85</div>
                    <div class="cell12" data-title="UAS">79</div>
                    <div class="cell12" data-title="Praktikum">90</div>
                    <div class="cell12" data-title="Nilai Akhir">89</div>
                    <div class="cell12" data-title="Grade">A</div>
                    <div class="cell12" data-title="Status">
                        Aktif <i class="fa fa-check row-blue"></i>
                    </div>
                </div>
            </div>
            <!-- end tabel jadwal kuliah -->
        </div>
    </main>
    <!-- footer start -->
    <?php include('konten/footer.php'); ?>
</div>
<!-- JS -->
<?php include('konten/js.php'); ?>
</body>

</html>