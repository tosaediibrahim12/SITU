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
                            </select>
                            <label for="floatingSelectGrid">Tahun Akademik</label>
                        </div>
                    </div>
                    <div class="col-md">
                        <div class="form-floating">
                            <select class="form-select" aria-label="Tahun Akademik">
                                <option value="KER">KER - Kerjasama</option>
                                <option value="NON">NON - Reguler Sore</option>
                                <option value="REG">REG - Reguler Pagi</option>
                                <option value="TES">TES - Program Tes</option>
                            </select>
                            <label for="floatingSelectGrid">Program</label>
                        </div>
                    </div>

                    <div class="col-md">
                        <div class="form-floating">
                            <select class="form-select" aria-label="Tahun Akademik">
                                <option value="301">301 - Teknik Kimia</option>
                                <option value="302">302 - Teknologi Pertambangan</option>
                                <option value="303">303 - Teknik Sipil</option>
                                <option value="304">304 - Teknik Informatika</option>
                                <option value="305">305 - Teknik Lingkungan</option>
                                <option value="306">306 - Perencanaan Wilayah dan Kota</option>
                                <option value="444">444 - Prodi Tes</option>
                            </select>
                            <label for="floatingSelectGrid">Prodi</label>
                        </div>
                    </div>
                    <!-- button -->
                    <div class="col-md">
                        <a class="btn btn-primary" href="TampilJadwalPerkuliahan.php" role="button">Tampilkan</a>
                    </div>
                </div>
                <!-- end form -->
                <br />
                <br />
                <!-- end Presensi Perkuliahan -->

                <!-- table card full -->
                <div class="container-fluid">
                    <div class="page-body">
                        <!-- Config. table start -->
                        <div class="card">
                            <div class="card-header">

                                <h5> Rekapitulasi Perwalian Bedasarkan Matakuliah</h5>
                                <a class="btn btn-primary" href="#" role="button">Cetak</a>
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
                                    <div class="dt-responsive table-responsive" style="color: #f76700;">
                                        <table class="table row-hover table table-striped">
                                            <thead>
                                                <tr>
                                                    <th class="ttl" rowspan="2" nowrap="true">No</th>
                                                    <th class="ttl" rowspan="2" nowrap="true">Kode</th>
                                                    <th class="ttl" rowspan="2" nowrap="true">Matakuliah</th>
                                                    <th class="ttl" rowspan="2" nowrap="true">KLS</th>
                                                    <th class="ttl" rowspan="2" nowrap="true">SMT</th>
                                                    <th class="ttl" rowspan="2" nowrap="true">SKS</th>
                                                    <th class="ttl" colspan="4" nowrap="true">Perkuliahan</th>
                                                    <th class="ttl" colspan="5" nowrap="true">Angkatan</th>
                                                    <th class="ttl" rowspan="2" nowrap="true">Jumlah</th>
                                                </tr>
                                                <tr>
                                                    <th class="ttl" nowrap="true">Hari</th>
                                                    <th class="ttl" nowrap="true">Waktu</th>
                                                    <th class="ttl" nowrap="true">Ruang</th>
                                                    <th class="ttl" nowrap="true">Dosen</th>
                                                    <th class="ttl" nowrap="true">&lt;=2015</th>
                                                    <th class="ttl" nowrap="true">2016</th>
                                                    <th class="ttl" nowrap="true">2017</th>
                                                    <th class="ttl" nowrap="true">2018</th>
                                                    <th class="ttl" nowrap="true">2019</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <tr>
                                                    <td data-label="#">1</td>
                                                    <td data-label="Kode">IF165107</td>
                                                    <td data-label="Matakuliah">AGAMA</td>
                                                    <td data-label="Kelas">A</td>
                                                    <td data-label="Semester">1</td>
                                                    <td data-label="SKS">2</td>
                                                    <td data-label="Hari">Rabu</td>
                                                    <td data-label="Waktu">10:40 - 12:20</td>
                                                    <td data-label="Ruang">SB204</td>
                                                    <td data-label="Dosen">ZAENAL ABIDIN, Drs., M.Ag.</td>
                                                    <td data-label="<=2015">5</td>
                                                    <td data-label="2016">0</td>
                                                    <td data-label="2017">0</td>
                                                    <td data-label="2018">0</td>
                                                    <td data-label="2019">38</td>
                                                    <td data-label="Jumlah">43</td>
                                                </tr>
                                                <tr>
                                                    <td data-label="#">2</td>
                                                    <td data-label="Kode">IF165107</td>
                                                    <td data-label="Matakuliah">AGAMA</td>
                                                    <td data-label="Kelas">B</td>
                                                    <td data-label="Semester">1</td>
                                                    <td data-label="SKS">2</td>
                                                    <td data-label="Hari">Rabu</td>
                                                    <td data-label="Waktu">10:40 - 12:20</td>
                                                    <td data-label="Ruang">SB204</td>
                                                    <td data-label="Dosen">DRS. MAMAN, M.AG.</td>
                                                    <td data-label="<=2015">5</td>
                                                    <td data-label="2016">0</td>
                                                    <td data-label="2017">0</td>
                                                    <td data-label="2018">0</td>
                                                    <td data-label="2019">38</td>
                                                    <td data-label="Jumlah">43</td>
                                                </tr>
                                                <tr>
                                                    <td data-label="#">3</td>
                                                    <td data-label="Kode">IF165107</td>
                                                    <td data-label="Matakuliah">AGAMA</td>
                                                    <td data-label="Kelas">B</td>
                                                    <td data-label="Semester">1</td>
                                                    <td data-label="SKS">2</td>
                                                    <td data-label="Hari">Rabu</td>
                                                    <td data-label="Waktu">10:40 - 12:20</td>
                                                    <td data-label="Ruang">SB204</td>
                                                    <td data-label="Dosen">DRS. AMIN, M.SI.</td>
                                                    <td data-label="<=2015">5</td>
                                                    <td data-label="2016">0</td>
                                                    <td data-label="2017">0</td>
                                                    <td data-label="2018">0</td>
                                                    <td data-label="2019">38</td>
                                                    <td data-label="Jumlah">43</td>
                                                </tr>
                                                <tr>
                                                    <td data-label="#">4</td>
                                                    <td data-label="Kode">IF161102</td>
                                                    <td data-label="Matakuliah">MATEMATIKA DASAR</td>
                                                    <td data-label="Kelas">A</td>
                                                    <td data-label="Semester">1</td>
                                                    <td data-label="SKS">2</td>
                                                    <td data-label="Hari">Rabu</td>
                                                    <td data-label="Waktu">10:40 - 12:20</td>
                                                    <td data-label="Ruang">SB204</td>
                                                    <td data-label="Dosen">DRS. AMIN, M.SI.</td>
                                                    <td data-label="<=2015">5</td>
                                                    <td data-label="2016">0</td>
                                                    <td data-label="2017">0</td>
                                                    <td data-label="2018">0</td>
                                                    <td data-label="2019">38</td>
                                                    <td data-label="Jumlah">43</td>
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
    </main>
    <!-- footer start -->
</div>
<!-- JS -->
<?php include('konten/footer.php'); ?>
<?php include('konten/js.php'); ?>
</body>

</html>