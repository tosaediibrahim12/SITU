<?php include('konten/sidebar.php'); ?>
        <!-- BEGIN CONTEN -->
		<div class="right floated thirteen wide computer sixteen wide phone column" id="content">
            <br />
            <!-- form  start -->
            <div class="container-fluid">
                <div class="row g-3">
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
                            <a class="btn btn-primary" href="#" role="button">Tampilkan</a>
                        </div>
                    </div>
                    <br />
                </div>
                <div class="row g-3">
                </div>
                <!-- end form -->
                <br />

                <!-- table card full -->
                <div class="container-fluid">
                    <div class="page-body">
                        <!-- Config. table start -->
                        <div class="card">
                            <div class="card-header">
                                <h5><b> Detail Sebaran Nilai</b></h5>
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
                                                <th class="ttl" rowspan="2" nowrap="true">Kelas</th>
                                                <th class="ttl" rowspan="2" nowrap="true">SKS</th>
                                                <th class="ttl" colspan="4" nowrap="true">Dosen</th>
                                                <th class="ttl" colspan="7" nowrap="true">Nilai dalam %</th>
                                                <th class="ttl" colspan="5" nowrap="true">Mahasiswa</th>
                                            </tr>
                                            <tr>
                                                <th class="ttl" nowrap="true">Nama</th>
                                                <th class="ttl" nowrap="true">Hadir</th>
                                                <th class="ttl" nowrap="true">%</th>
                                                <th class="ttl" nowrap="true">KM</th>
                                                <th class="ttl" width="3%" nowrap="true">A</th>
                                                <th class="ttl" width="3%" nowrap="true">B</th>
                                                <th class="ttl" width="3%" nowrap="true">C</th>
                                                <th class="ttl" width="3%" nowrap="true">D</th>
                                                <th class="ttl" width="3%" nowrap="true">E</th>
                                                <th class="ttl" width="3%" nowrap="true">T</th>
                                                <th class="ttl" width="3%" nowrap="true">K</th>
                                                <th class="ttl" nowrap="true">Kehadiran</th>
                                                <th class="ttl" nowrap="true">Peserta</th>
                                                <th class="ttl" nowrap="true">Tidak Aktif</th>
                                                <th class="ttl" nowrap="true">Mengulang</th>
                                                <th class="ttl" nowrap="true">%</th>
                                            </tr>
                                        </thead>
                                        <tbody>

                                            <tr>
                                                <td data-label="#" align="center">1</td>
                                                <td data-label="Kode">IF162801</td>
                                                <td data-label="Matakuliah">APLIKASI ENTERPRISE</td>
                                                <td data-label="Kelas" align="center">A&nbsp;</td>
                                                <td data-label="SKS" align="center">3</td>
                                                <td data-label="Dosen">SALI ALAS MAJAPAHIT, S.ST., M.KOM.</td>
                                                <td data-label="Hadir" align="center">14</td>
                                                <td data-label="%" align="right">100</td>
                                                <td data-label="KM" align="right">3.88</td>
                                                <td data-label="A">25</td>
                                                <td data-label="B">5</td>
                                                <td data-label="C">2</td>
                                                <td data-label="D">1</td>
                                                <td data-label="E">0</td>
                                                <td data-label="T">0</td>
                                                <td data-label="K">12</td>
                                                <td data-label="Kehadiran " align="center">57.47</td>
                                                <td data-label="Peserta" align="center">26</td>
                                                <td data-label="Tidak Aktif" align="center">0</td>
                                                <td data-label="Mengulang" align="center">10</td>
                                                <td data-label="%" align="right">38.46</td>
                                            </tr>
                                            <tr>
                                                <td data-label="#" align="center">2</td>
                                                <td data-label="Kode">IF162801</td>
                                                <td data-label="Matakuliah">APLIKASI ENTERPRISE</td>
                                                <td data-label="Kelas" align="center">B&nbsp;</td>
                                                <td data-label="SKS" align="center">3</td>
                                                <td data-label="Dosen">DODDY FERDIANSYAH, ST., MT.</td>
                                                <td data-label="Hadir" align="center">14</td>
                                                <td data-label="%" align="right">100</td>
                                                <td data-label="KM" align="right">3.88</td>
                                                <td data-label="A">25</td>
                                                <td data-label="B">5</td>
                                                <td data-label="C">2</td>
                                                <td data-label="D">1</td>
                                                <td data-label="E">0</td>
                                                <td data-label="T">0</td>
                                                <td data-label="K">12</td>
                                                <td data-label="Kehadiran " align="center">57.47</td>
                                                <td data-label="Peserta" align="center">26</td>
                                                <td data-label="Tidak Aktif" align="center">0</td>
                                                <td data-label="Mengulang" align="center">10</td>
                                                <td data-label="%" align="right">38.46</td>
                                            </tr>
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