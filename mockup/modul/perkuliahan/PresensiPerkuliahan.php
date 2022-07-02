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
                <!-- form  start -->
                <div class="row g-2">
                    <div class="col-md">
                        <div class="form-floating">
                            <select class="form-select" aria-label="Tahun Akademik">
                                <option value="20211">20211 - Semester Gasal 2021 - 2022</option>
                                <option value="2020">2020 - Semester Transisi 2020 - 2021</option>
                                <option value="20192">20192 - Semester Genap 2019 - 2020</option>
                                <option value="20191">20191 - Semester Gasal 2019 - 2020</option>
                                <option value="20190">20190 - Semester Transisi 2019 - 2020</option>
                                <option value="20183">20183 - Semester Sisipan 2018 - 2019</option>
                                <option value="20182">20182 - Semester Genap 2018 - 2019</option>
                                <option value="20181">20181 - Semester Gasal 2018 - 2019</option>
                                <option value="20180">20180 - Semester Transisi 2018 - 2019</option>
                                <option value="20173">20173 - Semester Sisipan 2017 - 2018</option>
                                <option value="20172">20172 - Semester Genap 2017 - 2018</option>
                                <option value="20171">20171 - Semester Gasal 2017 - 2018</option>
                                <option value="20163">20163 - Semester Sisipan 2016 - 2017</option>
                                <option value="20162">20162 - Semester Genap 2016 - 2017</option>
                                <option value="20161">20161 - Semester Gasal 2016 - 2017</option>
                                <option value="20160">20160 - Semester Transisi 2016 - 2017</option>
                                <option value="20153">20153 - Semester Sisipan 2015 - 2016</option>
                                <option value="20152">20152 - Semester Genap 2015 - 2016</option>
                                <option value="20151">20151 - Semester Gasal 2015 - 2016</option>
                                <option value="20150">20150 - Semester Transisi 2015 - 2016</option>
                                <option value="20143">20143 - Semester Sisipan 2014 - 2015</option>
                                <option value="20142">20142 - Semester Genap 2014 - 2015</option>
                                <option value="20141">20141 - Semester Gasal 2014 - 2015</option>
                                <option value="20140">20140 - Semester Transisi 2014 - 2015</option>
                            </select>
                            <label for="floatingSelectGrid">Tahun Akademik</label>
                        </div>
                    </div>
                    <div class="col-md">
                        <div class="form-floating">
                            <select class="form-select" aria-label="Tahun Akademik">
                                <option value="KER">fulan.ST., M.kom</option>
                                <option value="KER">fulan bin fulan.ST., M.kom</option>

                            </select>
                            <label for="floatingSelectGrid">Dosen</label>
                        </div>
                    </div>

                    <div class="col-md">
                        <div class="form-floating">
                            <select class="form-select" aria-label="Tahun Akademik">
                                <option value="301">Perancangan Sistem Informasi</option>

                            </select>
                            <label for="floatingSelectGrid">Matakuliah</label>
                        </div>
                    </div>

                    <!-- button -->
                    <div class="col-md">
                        <a class="btn btn-primary" href="TampilPresensiPerkuliahan.php" role="button">Tampilkan</a>
                    </div>
                </div>
                <!-- end form -->
            </div>
        </main>
        <!-- footer start -->
    </div>
    <!-- JS -->
    <?php include('konten/js.php'); ?>
    </body>

</html>