<!DOCTYPE html>
<html lang="en">
<?php include('konten/konten.php'); ?>
<div class="pcoded-content">
    <div class="card-header fg-white" style="background-color: #404E67; color: #fff; ">
        <h3>Presensi Perkuliahan</h3>
    </div>
    <div id="layoutSidenav_content">
        <main>
            <!-- Begin Page Content -->
            <div class="container-fluid">
                <!-- Content Row -->
                <br />
                <br />
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

                <br />
                <br />
                <!-- start Profile -->
                <div class="main-body">
                    <div class="row gutters-sm">
                        <div class="col-md-4 mb-3">
                            <div class="card">
                                <div class="card-body">
                                    <div class="d-flex flex-column align-items-center text-center">
                                        <img src="https://img2.pngdownload.id/20180423/uie/kisspng-character-animation-person-hero-vector-5ade4ee5abff85.1443460815245186297045.jpg"
                                            alt="Admin" class="rounded-circle" width="150">
                                        <div class="mt-3">
                                            <h4>Fulan ST,. MT.</h4>

                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-8">
                            <div class="card mb-3">
                                <div class="card-body">
                                    <div class="row">
                                        <div class="col-sm-3">
                                            <h6 class="mb-0">Matakuliah</h6>
                                        </div>
                                        <div class="col-sm-9 text-secondary">IF164205 - PERANCANGAN BASIS DATA</div>
                                    </div>
                                    <hr>
                                    <div class="row">
                                        <div class="col-sm-3">
                                            <h6 class="mb-0">Waktu Kuliah</h6>
                                        </div>
                                        <div class="col-sm-9 text-secondary">Jumat, 13:00 ~ 15:30</div>
                                    </div>
                                    <hr>
                                    <div class="row">
                                        <div class="col-sm-3">
                                            <h6 class="mb-0">Dosen Koordinator</h6>
                                        </div>
                                        <div class="col-sm-9 text-secondary">SANDRA ISLAMA PUTRA, S.Si., M.Kom.</div>
                                    </div>
                                    <hr>
                                    <div class="row">
                                        <div class="col-sm-3">
                                            <h6 class="mb-0">SKS</h6>
                                        </div>
                                        <div class="col-sm-9 text-secondary">3 dari 3 SKS</div>
                                    </div>
                                    <hr>
                                    <div class="row">
                                        <div class="col-sm-3">
                                            <h6 class="mb-0">Lokasi</h6>
                                        </div>
                                        <div class="col-sm-9 text-secondary">Kampus Empat, SB110</div>
                                    </div>
                                    <hr>
                                    <div class="row">
                                        <div class="col-sm-3">
                                            <h6 class="mb-0">Kehadiran</h6>
                                        </div>
                                        <div class="col-sm-9 text-secondary">1/14</div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <br />
                <!-- start table  -->
                <!-- table card full -->
                <div class="container-fluid">
                    <div class="page-body">
                        <!-- Config. table start -->
                        <div class="card">
                            <div class="card-header">
                                <h5> Daftar Praktikum Mahasiswa</h5>
                                <span>Jika tombol proses KRS tidak muncul, kemungkinan mahasiswa dalam status
                                    Non-Aktif,
                                    silahkan aktifkan terlebih dahulu, status mahasiswa tersebut</span>
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
                                    <div class="card-content p-2" style="color: #516091;">
                                        <table class="table row-hover">
                                            <thead>
                                                <tr>
                                                    <th>Pertemuan</th>
                                                    <th>Tanggal</th>
                                                    <th>Jam</th>
                                                    <th>Hadir</th>
                                                    <th>Presentase</th>
                                                    <th>Cetak</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <tr>
                                                    <td data-label="Pertemuan">1</td>
                                                    <td data-label="Tanggal">21-01-2020</td>
                                                    <td data-label="Jam">13:00 ~ 14:23</td>
                                                    <td data-label="Hadir">38 dari 38</td>
                                                    <td data-label="Presentase">100%</td>
                                                    <td data-label="Cetak"><a href=""><i class="ti-printer"></i></a>
                                                    </td>
                                                </tr>

                                                <tr>
                                                    <td data-label="Pertemuan">2</td>
                                                    <td data-label="Tanggal">31-01-2020</td>
                                                    <td data-label="Jam">13:00 ~ 14:23</td>
                                                    <td data-label="Hadir">30 dari 38</td>
                                                    <td data-label="Presentase">90%</td>
                                                    <td data-label="Cetak"><a href=""><i class="ti-printer"></i></a>
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
                <!-- end table -->
            </div>
    </div>

    </main>
    <!-- footer start -->

</div>

<!-- JS -->
<?php include('konten/js.php'); ?>
</body>

</html>