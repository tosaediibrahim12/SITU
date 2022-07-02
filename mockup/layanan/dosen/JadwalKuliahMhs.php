<!DOCTYPE html>
<html lang="en">
<?php include('konten/sidebar.php'); ?>
<div id="layoutSidenav_content">
    <main>
        <!-- Begin Page Content -->
        <div class="container-fluid">
            <!-- Content Row -->
            <br />
            <div class="row">
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