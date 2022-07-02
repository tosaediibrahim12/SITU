<?php include('konten/sidebar.php'); ?>
        <!-- BEGIN CONTEN -->
		<div class="right floated thirteen wide computer sixteen wide phone column" id="content">

            <!-- Content Row -->
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
                                <h5>Jadwal Kuliah</h5>

                            </div>
                            <div class="card-block">
                                <!-- babeh -->
                                <!-- tabel -->
                                <div class="mb-3">
                                    <div class="dt-responsive table-responsive" style="color: #f76700;">
                                        <table class="table row-hover table table-striped">
                                            <thead>
                                                <tr>
                                                    <td class="ul" colspan="11"><b>Senin</b></td>
                                                </tr>
                                                <tr>
                                                    <th>No</th>
                                                    <th>Jam</th>
                                                    <th>Ruangan</th>
                                                    <th>Kode</th>
                                                    <th>Matakuliah</th>
                                                    <th>Kelas</th>
                                                    <th>SKS</th>
                                                    <th width="25%">Dosen</th>
                                                    <th title="Kehadiran Kuliah">Asisten</th>
                                                    <th>Peserta</th>
                                                    <th>Pendaftar</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <tr>
                                                    <td data-label="#">1</td>
                                                    <td data-label="Jam">07:00 ~ 08:40</td>
                                                    <td data-label="Ruangan">07:00 ~ 08:40</td>
                                                    <td data-label="Kode">IF164505</td>
                                                    <td data-label="Matkul">PSI</td>
                                                    <td data-label="Kelas">A</td>
                                                    <td data-label="SKS">2</td>
                                                    <td data-label="Dosen">HELMI ILHAM FAUZI, </td>
                                                    <td data-label="Asisten">HELMI ILHAM FAUZI, </td>
                                                    <td data-label="Peserta">36</td>
                                                    <td data-label="Pendaftar">36</td>
                                                </tr>
                                                <tr>
                                                    <td data-label="#">1</td>
                                                    <td data-label="Jam">07:00 ~ 08:40</td>
                                                    <td data-label="Ruangan">07:00 ~ 08:40</td>
                                                    <td data-label="Kode">IF164505</td>
                                                    <td data-label="Matkul">PSI</td>
                                                    <td data-label="Kelas">A</td>
                                                    <td data-label="SKS">2</td>
                                                    <td data-label="Dosen">HELMI ILHAM FAUZI, </td>
                                                    <td data-label="Asisten">HELMI ILHAM FAUZI, </td>
                                                    <td data-label="Peserta">36</td>
                                                    <td data-label="Pendaftar">36</td>
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