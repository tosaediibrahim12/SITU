
<?php include('konten/konten.php'); ?>
<div class="right floated thirteen wide computer sixteen wide phone column" id="content">
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
                            <a class="btn btn-primary" href="TampilJadwalPerkuliahan.php" role="button">Tampilkan</a>
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
                                <h5><b>Informasi Nilai yg Telah Difinalisasi dan Divalidasi</b></h5>
                                <div class="row g-2">
                                    <div class="col-md">
                                        <div class="form-floating">
                                            <select class="form-select" aria-label="Tahun Akademik">
                                                <option value="Kode">Kode</option>
                                                <option value="Kelas" selected="">Kelas</option>
                                                <option value="Presensi">Presensi</option>
                                                <option value="Dosen">Dosen</option>
                                            </select>
                                            <label for="floatingSelectGrid">Urutkan</label>
                                        </div>
                                    </div>
                                    <div class="col-md">

                                    </div>
                                </div>
                                <div class="col-md"></div>
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
                                                <th class="ttl" nowrap="true">#</th>
                                                <th class="ttl" nowrap="true">Kode</th>
                                                <th class="ttl" nowrap="true">Matakuliah</th>
                                                <th class="ttl" nowrap="true">Kelas</th>
                                                <th class="ttl" nowrap="true">Dosen</th>
                                                <th class="ttl" nowrap="true">JP</th>
                                                <th class="ttl" nowrap="true">JV</th>
                                                <th class="ttl" nowrap="true">JVV</th>
                                                <th class="ttl" nowrap="true">JVN</th>
                                                <th class="ttl" nowrap="true">Pres</th>
                                                <th class="ttl" nowrap="true">UTS</th>
                                                <th class="ttl" nowrap="true">UAS</th>
                                                <th class="ttl" nowrap="true">Final</th>
                                            </tr>
                                        </thead>
                                        <tbody>

                                            <tr>
                                                <td data-label="#">1</td>
                                                <td data-label="Kode">TI914</td>
                                                <td data-label="Matakuliah">MATEMATIKA I</td>
                                                <td data-label="Kelas">A</td>
                                                <td data-label="Dosen"><abbr title="Telp: , +6281224069945">DR. DRS.
                                                        IMAN
                                                        FIRMANSYAH, M.SC., </abbr></td>
                                                <td data-label="JP">0</td>
                                                <td data-label="JV">0</td>
                                                <td data-label="JVV">0</td>
                                                <td data-label="JVN">0</td>
                                                <td data-label="Pres">2</td>
                                                <td data-label="UTS">00-00-0000</td>
                                                <td data-label="UAS">00-00-0000</td>
                                                <td data-label="Final"><i class="ti-book"></i></td>
                                            </tr>
                                            <tr>
                                                <td data-label="#">2</td>
                                                <td data-label="Kode">TI913</td>
                                                <td data-label="Matakuliah">MENGGAMBAR TEKNIK+PRAK</td>
                                                <td data-label="Kelas">A</td>
                                                <td data-label="Dosen"><abbr title="Telp: , +6282130247474">IR.
                                                        DADANG
                                                        HENDRIANA, M.SC., </abbr></td>
                                                <td data-label="JP">0</td>
                                                <td data-label="JV">0</td>
                                                <td data-label="JVV">0</td>
                                                <td data-label="JVN">0</td>
                                                <td data-label="Press">0</td>
                                                <td data-label="UTS">00-00-0000</td>
                                                <td data-label="UAS">00-00-0000</td>
                                                <td data-label="Final"><i class="ti-book"></i></td>
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