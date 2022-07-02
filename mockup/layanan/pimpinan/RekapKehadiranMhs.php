<!DOCTYPE html>
<html lang="en">
<?php include('konten/konten.php'); ?>
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
                        <br>
                        <div class="col-md">
                            <div class="form-floating">
                                <select class="form-select" aria-label="Tahun Akademik">
                                    <option value="301">301 - Teknik Kimia</option>
                                    <option value="302">302 - Teknologi Pertambangan
                                    </option>
                                    <option value="303">303 - Teknik Sipil</option>
                                    <option value="304">304 - Teknik Informatika
                                    </option>
                                    <option value="305">305 - Teknik Lingkungan</option>
                                    <option value="306">306 - Perencanaan Wilayah dan
                                        Kota</option>
                                    <option value="444">444 - Prodi Tes</option>
                                </select>
                                <label for="floatingSelectGrid">Prodi</label>
                            </div>
                        </div>


                    </div>

                </div>
                <br />
                <div class="row g-2">
                    <div class="col-md">
                        <div class="form-floating">
                            <select class="form-select" aria-label="Tahun Akademik">
                                <option value="EI009">DR. DRS. IMAN FIRMANSYAH,
                                    M.SC., </option>
                                <option value="EI018">DR. IR. AGUS PURNOMO, MT.,
                                </option>
                            </select>
                            <label for="floatingSelectGrid">Dosen</label>
                        </div>
                    </div>
                    <div class="col-md">
                        <div class="j-span6 j-unit">
                            <div class="form-floating">
                                <input type="email" class="form-control" id="floatingInputGrid" placeholder="A"
                                    value="">
                                <label for="floatingInputGrid">Dari NRP</label>
                            </div>
                        </div>
                    </div>

                    <div class="col-md">
                        <div class="j-span6 j-unit">
                            <div class="form-floating">
                                <input type="email" class="form-control" id="floatingInputGrid" placeholder="A"
                                    value="">
                                <label for="floatingInputGrid">Sampai NRP</label>
                            </div>
                        </div>
                    </div>
                </div>
                <br />
                <div class="row g-2">
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
                            <h5><b>Rekap Kehadiran Mahasiswa</b></h5>

                        </div>
                        <div class="card-block">
                            <!-- babeh -->
                            <!-- tabel -->
                            <div class="mb-3">
                                <div class="dt-responsive table-responsive" style="color: #516091;">
                                    <table class="table row-hover table table-striped table-bordered nowrap">
                                        <thead>
                                            <tr>
                                                <th class="ttl" nowrap="true">#</th>
                                                <th class="ttl" nowrap="true">NMP/NRP</th>
                                                <th class="ttl" nowrap="true">Nama Mahasiswa</th>
                                                <th class="ttl" nowrap="true">Dosen Wali</th>
                                                <th class="ttl" nowrap="true">IPS</th>
                                                <th class="ttl" nowrap="true">Rerata</th>
                                                <th class="ttl" nowrap="true">MK 1</th>
                                                <th class="ttl" nowrap="true">MK 2</th>
                                                <th class="ttl" nowrap="true">MK 3</th>
                                                <th class="ttl" nowrap="true">MK 4</th>
                                                <th class="ttl" nowrap="true">MK 5</th>
                                                <th class="ttl" nowrap="true">MK 6</th>
                                                <th class="ttl" nowrap="true">MK 7</th>
                                                <th class="ttl" nowrap="true">MK 8</th>
                                                <th class="ttl" nowrap="true">MK 9</th>
                                                <th class="ttl" nowrap="true">MK 10</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td data-label="#" rowspan="2" class="ul">1</td>
                                                <td data-label="NPM" rowspan="2" class="inp1">143010071</td>
                                                <td data-label="Nama Mahasiswa" rowspan="2" class="ul">JAYAN
                                                    REZKI PERDANA
                                                </td>
                                                <td data-label="Dosen Wali" rowspan="2" class="ul">IR.
                                                    DADANG
                                                    HENDRIANA,
                                                    M.SC., </td>
                                                <td data-label="IPS" rowspan="2" class="ul" align="RIGHT">
                                                    2.63
                                                </td>
                                                <td data-label="Rerata" rowspan="2" class="ul" align="RIGHT">42.95
                                                </td>
                                                <td data-label="MK 1" class="ul" align="CENTER">TI942</td>
                                                <td data-label="MK 2" class="ul" align="CENTER">TI943</td>
                                                <td data-label="MK 3" class="ul" align="CENTER">TI944</td>
                                                <td data-label="MK 4" class="ul" align="CENTER">TI945</td>
                                                <td data-label="MK 5" class="ul" align="CENTER">TI946</td>
                                                <td data-label="MK 6" class="ul" align="CENTER">TI947</td>
                                                <td data-label="MK 7" class="ul" align="CENTER">TI947</td>
                                                <td data-label="MK 8" class="ul" align="CENTER">TI947</td>
                                                <td data-label="MK 9" class="ul" align="CENTER">TI947</td>
                                                <td data-label="MK 10" class="ul" align="CENTER">TI947</td>
                                            </tr>
                                            <tr>
                                                <td data-label="MK 1" class="ul" align="RIGHT">53.85</td>
                                                <td data-label="MK 2" class="ul" align="RIGHT">57.14</td>
                                                <td data-label="MK 3" class="ul" align="RIGHT">42.86</td>
                                                <td data-label="MK 4" class="ul" align="RIGHT">28.57</td>
                                                <td data-label="MK 5" class="ul" align="RIGHT">21.43</td>
                                                <td data-label="MK 6" class="ul" align="RIGHT">53.85</td>
                                                <td data-label="MK 7" class="ul" align="RIGHT">53.85</td>
                                                <td data-label="MK 8" class="ul" align="RIGHT">53.85</td>
                                                <td data-label="MK 9" class="ul" align="RIGHT">53.85</td>
                                                <td data-label="MK 10" class="ul" align="RIGHT">53.85</td>
                                            </tr>
                                            <tr>
                                                <td data-label="#" rowspan="2" class="ul">2</td>
                                                <td data-label="NPM" rowspan="2" class="inp1">143010071</td>
                                                <td data-label="Nama Mahasiswa" rowspan="2" class="ul">Jaki
                                                    adbul axzizi
                                                </td>
                                                <td data-label="Dosen Wali" rowspan="2" class="ul">EI001 -
                                                    IR. DADANG
                                                    HENDRIANA,
                                                    M.SC., </td>
                                                <td data-label="IPS" rowspan="2" class="ul" align="RIGHT">
                                                    2.63
                                                </td>
                                                <td data-label="Rerata" rowspan="2" class="ul" align="RIGHT">42.95
                                                </td>
                                                <td data-label="MK 1" class="ul" align="CENTER">TI942</td>
                                                <td data-label="MK 2" class="ul" align="CENTER">TI943</td>
                                                <td data-label="MK 3" class="ul" align="CENTER">TI944</td>
                                                <td data-label="MK 4" class="ul" align="CENTER">TI945</td>
                                                <td data-label="MK 5" class="ul" align="CENTER">TI946</td>
                                                <td data-label="MK 6" class="ul" align="CENTER">TI947</td>
                                                <td data-label="MK 7" class="ul" align="CENTER">TI947</td>
                                                <td data-label="MK 8" class="ul" align="CENTER">TI947</td>
                                                <td data-label="MK 9" class="ul" align="CENTER">TI947</td>
                                                <td data-label="MK 10" class="ul" align="CENTER">TI947</td>
                                            </tr>
                                            <tr>
                                                <td data-label="MK 1" class="ul" align="RIGHT">53.85</td>
                                                <td data-label="MK 2" class="ul" align="RIGHT">57.14</td>
                                                <td data-label="MK 3" class="ul" align="RIGHT">42.86</td>
                                                <td data-label="MK 4" class="ul" align="RIGHT">28.57</td>
                                                <td data-label="MK 5" class="ul" align="RIGHT">21.43</td>
                                                <td data-label="MK 6" class="ul" align="RIGHT">53.85</td>
                                                <td data-label="MK 7" class="ul" align="RIGHT">53.85</td>
                                                <td data-label="MK 8" class="ul" align="RIGHT">53.85</td>
                                                <td data-label="MK 9" class="ul" align="RIGHT">53.85</td>
                                                <td data-label="MK 10" class="ul" align="RIGHT">53.85</td>
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