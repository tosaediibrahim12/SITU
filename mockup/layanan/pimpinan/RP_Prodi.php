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
                                <h5>Rekap Perwalian Prodi</h5>
                                <a class="btn btn-primary" href="#" role="button">Cetak</a>
                            </div>
                            <div class="card-block">
                                <!-- babeh -->
                                <!-- tabel -->
                                <div class="mb-3">
                                    <div class="dt-responsive table-responsive" style="color: #f76700;">
                                        <table class="table row-hover table table-striped">
                                            <thead>
                                                <tr>
                                                    <th class="tbl" colspan="10">Fakultas Teknik</th>
                                                </tr>
                                                <tr>
                                                    <th class="tbl1" width="10%" rowspan="2">Prodi</th>
                                                    <th class="tbl1" rowspan="2">Angkatan</th>
                                                    <td class="tbl1" colspan="4" align="center">Status</td>
                                                    <td class="tbl1" colspan="2" align="center">Perwalian</td>
                                                    <td class="tbl1" colspan="2" align="center">Jenis Kelamin</td>
                                                </tr>
                                                <tr>
                                                    <td class="tbl2" width="8%" align="center">Aktif</td>
                                                    <td class="tbl2" width="8%" align="center">0 SKS</td>
                                                    <td class="tbl2" width="8%" align="center">DPP</td>
                                                    <td class="tbl2" width="8%" align="center">Dispensasi</td>
                                                    <td class="tbl2" width="8%" align="center">KRS</td>
                                                    <td class="tbl2" width="8%" align="center">Proses</td>
                                                    <td class="tbl2" width="8%" align="center">Pria</td>
                                                    <td class="tbl2" width="8%" align="center">Wanita</td>
                                                </tr>
                                            </thead>
                                            <tbody>

                                                <tr>
                                                    <td data-label="" rowspan="10"><b>301</b></td>
                                                    <td class="tbl" colspan="9"><b>Teknik Kimia</b></td>
                                                </tr>
                                                <tr>
                                                    <td data-label="Angkatan">&lt;= 2017</td>
                                                    <td data-label="Aktif">0</td>
                                                    <td data-label="0 SKS">0</td>
                                                    <td data-label="DPP">0</td>
                                                    <td data-label="Dispensasi">0</td>
                                                    <td data-label="KRS">0</td>
                                                    <td data-label="Proses">0</td>
                                                    <td data-label="Pria">0</td>
                                                    <td data-label="Wanita">0</td>
                                                </tr>
                                                <tr>
                                                    <td data-label="Angkatan">2018</td>
                                                    <td data-label="Aktif">0</td>
                                                    <td data-label="0 SKS">0</td>
                                                    <td data-label="DPP">0</td>
                                                    <td data-label="Dispensasi">0</td>
                                                    <td data-label="KRS">0</td>
                                                    <td data-label="Proses">0</td>
                                                    <td data-label="Pria">0</td>
                                                    <td data-label="Wanita">0</td>
                                                </tr>
                                                <tr>
                                                    <td data-label="Angkatan">2019</td>
                                                    <td data-label="Aktif">1</td>
                                                    <td data-label="0 SKS">0</td>
                                                    <td data-label="DPP">1</td>
                                                    <td data-label="Dispensasi">0</td>
                                                    <td data-label="KRS">1</td>
                                                    <td data-label="Proses">0</td>
                                                    <td data-label="Pria">1</td>
                                                    <td data-label="Wanita">0</td>
                                                </tr>
                                                <tr>
                                                    <td data-label="Angkatan">2020</td>
                                                    <td data-label="Aktif">0</td>
                                                    <td data-label="0 SKS">0</td>
                                                    <td data-label="DPP">0</td>
                                                    <td data-label="Dispensasi">0</td>
                                                    <td data-label="KRS">0</td>
                                                    <td data-label="Proses">0</td>
                                                    <td data-label="Pria">0</td>
                                                    <td data-label="Wanita">0</td>
                                                </tr>
                                                <tr>
                                                    <td data-label="Angkatan">2021</td>
                                                    <td data-label="Aktif">0</td>
                                                    <td data-label="0 SKS">0</td>
                                                    <td data-label="DPP">0</td>
                                                    <td data-label="Dispensasi">0</td>
                                                    <td data-label="KRS">0</td>
                                                    <td data-label="Proses">0</td>
                                                    <td data-label="Pria">0</td>
                                                    <td data-label="Wanita">0</td>
                                                </tr>
                                                <tr>
                                                    <td data-label="Angkatan">2022</td>
                                                    <td data-label="Aktif">0</td>
                                                    <td data-label="0 SKS">0</td>
                                                    <td data-label="DPP">0</td>
                                                    <td data-label="Dispensasi">0</td>
                                                    <td data-label="KRS">0</td>
                                                    <td data-label="Proses">0</td>
                                                    <td data-label="Pria">0</td>
                                                    <td data-label="Wanita">0</td>
                                                </tr>
                                                <tr>
                                                    <td data-label="Angkatan">2023</td>
                                                    <td data-label="Aktif">0</td>
                                                    <td data-label="0 SKS">0</td>
                                                    <td data-label="DPP">0</td>
                                                    <td data-label="Dispensasi">0</td>
                                                    <td data-label="KRS">0</td>
                                                    <td data-label="Proses">0</td>
                                                    <td data-label="Pria">0</td>
                                                    <td data-label="Wanita">0</td>
                                                </tr>
                                                <tr>
                                                    <td data-label="Angkatan">2024</td>
                                                    <td data-label="Aktif">0</td>
                                                    <td data-label="0 SKS">0</td>
                                                    <td data-label="DPP">0</td>
                                                    <td data-label="Dispensasi">0</td>
                                                    <td data-label="KRS">0</td>
                                                    <td data-label="Proses">0</td>
                                                    <td data-label="Pria">0</td>
                                                    <td data-label="Wanita">0</td>
                                                </tr>
                                                <tr>
                                                    <td class="tbl2"><b>Total</b></td>
                                                    <td class="tbl2"><b>1</b></td>
                                                    <td class="tbl2"><b>0</b></td>
                                                    <td class="tbl2"><b>1</b></td>
                                                    <td class="tbl2"><b>0</b></td>
                                                    <td class="tbl2"><b>1</b></td>
                                                    <td class="tbl2"><b>0</b></td>
                                                    <td class="tbl2"><b>1</b></td>
                                                    <td class="tbl2"><b>0</b></td>
                                                </tr>
                                                <tr>
                                                    <td data-label="" rowspan="10"><b>302</b></td>
                                                    <td class="tbl" colspan="9"><b>Teknologi
                                                            Pertambangan</b></td>
                                                </tr>
                                                <tr>
                                                    <td data-label="Angkatan">&lt;= 2017</td>
                                                    <td data-label="Aktif">0</td>
                                                    <td data-label="0 SKS">0</td>
                                                    <td data-label="DPP">0</td>
                                                    <td data-label="Dispensasi">0</td>
                                                    <td data-label="KRS">0</td>
                                                    <td data-label="Proses">0</td>
                                                    <td data-label="Pria">0</td>
                                                    <td data-label="Wanita">0</td>
                                                </tr>
                                                <tr>
                                                    <td data-label="Angkatan">2018</td>
                                                    <td data-label="Aktif">0</td>
                                                    <td data-label="0 SKS">0</td>
                                                    <td data-label="DPP">0</td>
                                                    <td data-label="Dispensasi">0</td>
                                                    <td data-label="KRS">0</td>
                                                    <td data-label="Proses">0</td>
                                                    <td data-label="Pria">0</td>
                                                    <td data-label="Wanita">0</td>
                                                </tr>
                                                <tr>
                                                    <td data-label="Angkatan">2019</td>
                                                    <td data-label="Aktif">0</td>
                                                    <td data-label="0 SKS">0</td>
                                                    <td data-label="DPP">0</td>
                                                    <td data-label="Dispensasi">0</td>
                                                    <td data-label="KRS">0</td>
                                                    <td data-label="Proses">0</td>
                                                    <td data-label="Pria">0</td>
                                                    <td data-label="Wanita">0</td>
                                                </tr>
                                                <tr>
                                                    <td data-label="Angkatan">2020</td>
                                                    <td data-label="Aktif">0</td>
                                                    <td data-label="0 SKS">0</td>
                                                    <td data-label="DPP">0</td>
                                                    <td data-label="Dispensasi">0</td>
                                                    <td data-label="KRS">0</td>
                                                    <td data-label="Proses">0</td>
                                                    <td data-label="Pria">0</td>
                                                    <td data-label="Wanita">0</td>
                                                </tr>
                                                <tr>
                                                    <td data-label="Angkatan">2021</td>
                                                    <td data-label="Aktif">0</td>
                                                    <td data-label="0 SKS">0</td>
                                                    <td data-label="DPP">0</td>
                                                    <td data-label="Dispensasi">0</td>
                                                    <td data-label="KRS">0</td>
                                                    <td data-label="Proses">0</td>
                                                    <td data-label="Pria">0</td>
                                                    <td data-label="Wanita">0</td>
                                                </tr>
                                                <tr>
                                                    <td data-label="Angkatan">2022</td>
                                                    <td data-label="Aktif">0</td>
                                                    <td data-label="0 SKS">0</td>
                                                    <td data-label="DPP">0</td>
                                                    <td data-label="Dispensasi">0</td>
                                                    <td data-label="KRS">0</td>
                                                    <td data-label="Proses">0</td>
                                                    <td data-label="Pria">0</td>
                                                    <td data-label="Wanita">0</td>
                                                </tr>
                                                <tr>
                                                    <td data-label="Angkatan">2023</td>
                                                    <td data-label="Aktif">0</td>
                                                    <td data-label="0 SKS">0</td>
                                                    <td data-label="DPP">0</td>
                                                    <td data-label="Dispensasi">0</td>
                                                    <td data-label="KRS">0</td>
                                                    <td data-label="Proses">0</td>
                                                    <td data-label="Pria">0</td>
                                                    <td data-label="Wanita">0</td>
                                                </tr>
                                                <tr>
                                                    <td data-label="Angkatan">2024</td>
                                                    <td data-label="Aktif">0</td>
                                                    <td data-label="0 SKS">0</td>
                                                    <td data-label="DPP">0</td>
                                                    <td data-label="Dispensasi">0</td>
                                                    <td data-label="KRS">0</td>
                                                    <td data-label="Proses">0</td>
                                                    <td data-label="Pria">0</td>
                                                    <td data-label="Wanita">0</td>
                                                </tr>
                                                <tr>
                                                    <td class="tbl2"><b>Total</b></td>
                                                    <td class="tbl2"><b>0</b></td>
                                                    <td class="tbl2"><b>0</b></td>
                                                    <td class="tbl2"><b>0</b></td>
                                                    <td class="tbl2"><b>0</b></td>
                                                    <td class="tbl2"><b>0</b></td>
                                                    <td class="tbl2"><b>0</b></td>
                                                    <td class="tbl2"><b>0</b></td>
                                                    <td class="tbl2"><b>0</b></td>
                                                </tr>
                                                <tr>
                                                    <td class="tbl" colspan="2"><b>Jumlah Fakultas
                                                            Teknik</b></td>
                                                    <td class="tbl1"><b>1</b></td>
                                                    <td class="tbl1"><b>0</b></td>
                                                    <td class="tbl1"><b>1</b></td>
                                                    <td class="tbl1"><b>0</b></td>
                                                    <td class="tbl1"><b>1</b></td>
                                                    <td class="tbl1"><b>0</b></td>
                                                    <td class="tbl1"><b>1</b></td>
                                                    <td class="tbl1"><b>0</b></td>
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